<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : 151_2019_ForStudents
 * Created  : 05.02.2019 - 18:40
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */

function home(){
    $_GET['action'] = "home";
    require "view/home.php";
}

function login($loginRequest){
    //if a login request was submitted
    if (isset($loginRequest['inputUserEmailAddress']) && isset($loginRequest['inputUserPsw'])) {
        //extract login parameters
        $userEmailAddress = $loginRequest['inputUserEmailAddress'];
        $userPsw = $loginRequest['inputUserPsw'];

        //try to check if user/psw are matching with the database
        require_once "model/usersManager.php";
        if (isLoginCorrect($userEmailAddress, $userPsw)) {
            $userType=getUserType($userEmailAddress);
            createSession($userEmailAddress,$userType);
            $_GET['loginError'] = false;
            $_GET['action'] = "home";
            require "view/home.php";
        } else { //if the user/psw does not match, login form appears again
            $_GET['loginError'] = true;
            $_GET['action'] = "login";
            require "view/login.php";
        }
    }else{ //the user does not yet fill the form
        $_GET['action'] = "login";
        require "view/login.php";
    }
}
/**
 * This function is designed to create a new user session
 * @param $userEmailAddress : user unique id
 */
function createSession($userEmailAddress,$userType){
    $_SESSION['userEmailAddress'] = $userEmailAddress;
    $_SESSION['userType']=$userType;
}

function register($registerRequest){
    //variable set
    if (isset($registerRequest['inputUserEmailAddress']) && isset($registerRequest['inputUserPsw']) && isset($registerRequest['inputUserPswRepeat'])) {

        //extract register parameters
        $userEmailAddress = $registerRequest['inputUserEmailAddress'];
        $userPsw = $registerRequest['inputUserPsw'];
        $userPswRepeat = $registerRequest['inputUserPswRepeat'];

        if ($userPsw == $userPswRepeat){
            require_once "model/usersManager.php";
            if (registerNewAccount($userEmailAddress, $userPsw)){ //Cas inscription tout OK, on cr??e direct la session
                createSession($userEmailAddress,1);
                $_GET['registerError'] = false;
                $_GET['action'] = "home";
                require "view/home.php";
            } else{ //Cas requ??te refus??e (email existant)
                $_GET['registerError'] = true;
                $_GET['action'] = "register";
                require "view/register.php";
            }
        }else{ //Cas inscription pas possible, il faut recommencer
            $_GET['registerError'] = true;
            $_GET['action'] = "register";
            require "view/register.php";
        }
    }else{ //Cas o?? on arrive sans donn??es
        $_GET['action'] = "register";
        require "view/register.php";
    }
}

/**
 * This function is designed to manage logout request
 */
function logout(){
    $_SESSION = array();
    session_destroy();
    $_GET['action'] = "home";
    require "view/home.php";
}

function displaySnows(){
    require_once("model/snowsManager.php");

    //solution sans isset (si non logg??, @$_SESSION['userType'] renvoie false)
    if (@$_SESSION['userType']==2){
        $snows=getSnows();
        require "view/snowsSeller.php";
    } else{ // cas client
        if (isset($_POST['fSearch'])){ //avec recherche
            $snows=getSnowsSearch($_POST['fSearch']);
        } else { //sans recherche
            $snows=getSnows();
        }
        require "view/snows.php";
    }
}

function addSnow(){
    //Cette fonction est pour ajouter un snow

    if (isset($_POST['fcode'])) {
        //cas o?? on ajoute vraiment un snow en BD
        require_once("model/snowsManager.php");
        $result=addSnowBD($_POST['fcode'],$_POST['fbrand'],$_POST['fmodel'],$_POST['fSnowLength'],
            $_POST['fQtyAvailable'], $_POST['fDescription'],$_POST['fDailyPrice'],
            $_POST['fPhoto'],$_POST['factive']);

        if ($result){ //cas OK si result=1
            displaySnows(); //rappel de l'affichage des snows.
        } else { //cas d'erreur, ajout impossible
            $adderror="Erreur d'ajout de snow (attention doublon ou type de donn??es)";
            require "view/addSnow.php";
        }

    } else {
        //appel du formulaire d'ajout de snow
        require "view/addSnow.php";
    }



}

function delSnow($code){
    //Cette fonction d??truit le snow correspondant au code et rappelle la liste
    require_once("model/snowsManager.php");
    delSnowBD($code); //appel de la fonction en BD
    displaySnows(); //rappel de l'affichage des snows
}

function displayCart(){
    //Cette fonction affiche le panier.
    //dans le cas o?? il n'existe pas, on le cr??e vide
    if (!isset($_SESSION['cart'])) { //cas o?? le panier n'existait pas
        $_SESSION['cart'] = [];
    }
    //Cette fonction affiche le panier
    require "view/cart.php";
}

function qtyChange($key, $modif){
    //Cette fonction modifie une quantit?? dans le panier, ligne $key,de la valeur $modif
    $code=$_SESSION['cart'][$key]['code'];
    $dateD=$_SESSION['cart'][$key]['dateD'];
    $qty=$_SESSION['cart'][$key]['qty'];
    $nbD=$_SESSION['cart'][$key]['nbD'];

    //sauvegarder le panier et supprimer la ligne concern??e (gard??e dans $templine)
    $oldCart=$_SESSION['cart'];
    array_splice($_SESSION['cart'],$key,1);

    //g??n??rer un tableau des qt??s dans le panier pour les jours prochains
    $qtyCart=sumQty($code,$dateD,$nbD,$_SESSION['cart']);
    require_once("model/snowsManager.php");
    $rents=getRents($code);
    $qtyBD=sumQty($code,$dateD,$nbD,$rents);

    //V??rifier les quantit??s demand??es pour chaque jour et prendre le max
    $max=0;
    for ($i=0;$i<$nbD;$i++){
        $sum=$qtyCart[$i]+$qtyBD[$i]+$qty+$modif;
        if ($sum>$max) $max=$sum;
    }

    //V??rifier si la disponibilit?? est suffisante
    $dispo=getDispo($code); //chercher en BD la dispo (qtyAvalaible)

    if ($dispo - $max>=0) { //cas OK, faire la modif
        $_SESSION['cart']=$oldCart;
        if ($_SESSION['cart'][$key]["qty"]+$modif>0){
            $_SESSION['cart'][$key]["qty"]+=$modif; //cas o?? il reste une qt??, on modifie la ligne
        } else {
            array_splice($_SESSION['cart'],$key,1);// qt??=0 on resupprime la ligne
        }
    }
    else { //cas KO, ne pas faire la modif et afficher une erreur
        $_SESSION['cart']=$oldCart;
        $_GET["cartError"]="La modif de qt?? n'est pas possible ?? cause des disponibilit??s";
    }
    require "view/cart.php";
}

function dureeChange($key, $modif){
    //Cette fonction modifie une dur??e dans le panier, ligne $key,de la valeur $modif
    $code=$_SESSION['cart'][$key]['code'];
    $dateD=$_SESSION['cart'][$key]['dateD'];
    $qty=$_SESSION['cart'][$key]['qty'];
    $nbD=$_SESSION['cart'][$key]['nbD']+$modif;

    //sauvegarder le panier et supprimer la ligne concern??e
    $oldCart=$_SESSION['cart'];
    array_splice($_SESSION['cart'],$key,1);

    //g??n??rer un tableau des qt??s dans le panier pour les jours prochains
    $qtyCart=sumQty($code,$dateD,$nbD,$_SESSION['cart']);
    require_once("model/snowsManager.php");
    $rents=getRents($code);
    $qtyBD=sumQty($code,$dateD,$nbD,$rents);

    //V??rifier les qt??s demand??es pour chaque jour et prendre le max
    $max=0;
    for ($i=0;$i<$nbD;$i++){
        $sum=$qtyCart[$i]+$qtyBD[$i]+$qty;
        if ($sum>$max) $max=$sum;
    }

    //V??rifier si la disponibilit?? est suffisante
    $dispo=getDispo($code); //chercher en BD la dispo (qtyAvalaible)

    if ($dispo - $max>=0) { //cas OK, faire la modif
        $_SESSION['cart']=$oldCart;
        if ($_SESSION['cart'][$key]["nbD"]+$modif>0){
            $_SESSION['cart'][$key]["nbD"]+=$modif; //cas o?? il reste une qt??, on modifie la ligne
        } else {
            array_splice($_SESSION['cart'],$key,1);// qt??=0 on resupprime la ligne
        }
    }
    else { //cas KO, ne pas faire la modif et afficher une erreur
        $_SESSION['cart']=$oldCart;
        $_GET["cartError"]="La modif de dur??e n'est pas possible ?? cause des disponibilit??s";
    }
    require "view/cart.php";

}
function delCart($index){
    //Supprime la ligne $index du panier et r??affiche le panier
    // deux syntaxes pour supprimer la ligne $index
    //unset($_SESSION['cart'][$index]); //laisse le trou (ne renum??rote pas)
    array_splice($_SESSION['cart'], $index, 1); //renum??rote depuis 0

    require "view/cart.php";
}

function addSnowCart($code){
    //ajoute au panier le snow demand?? (avec dur??e de 1 jour, quantit?? 1)
    //pour l'instant en date fixe
   $newSnowLeasing = array('code' => $code, 'dateD' => date("Y-m-d"), 'nbD' => 1, 'qty' => 1);
    if (!isset($_SESSION['cart'])){ //cas o?? le panier n'existait pas
        $_SESSION['cart']=[];
    }
    //array_push($_SESSION['cart'], $newSnowLeasing); //ajouter une ligne (syntaxe 1)
    $_SESSION['cart'][]=$newSnowLeasing; //ajouter une ligne au panier (syntaxe 2)
    require "view/cart.php";

}

function writeCart(){
    //Cette fonction ??crit en BD tout le panier dans la table rents
    //puis vide le panier
    //puis ram??ne sur un panier vide avec message erreur si pas logg??
    require_once "model/snowsManager.php";
    if (isset($_SESSION['userEmailAddress'])){ //cas o?? on est logg??
      foreach (@$_SESSION['cart'] as $key=>$row){
            writeBDcart($_SESSION['userEmailAddress'],$row['code'], $row['dateD'],$row['qty'], $row['nbD']);
        }
        //vider le panier
        $_SESSION['cart']=[];
    } else { //cas pas logg??
        $_GET['cartError']="Merci de passer par le login avant d'enregistrer le panier";
    }
    //rappeler le panier (vide ou avec message d'erreur)
    require "view/cart.php";
}

function sumQty($code,$dateD,$nbD,$array){
    // Cette fonction va renvoyer un tableau de quantit??s, pour le snow $code
    // et pour chaque jour depuis $dateD, des quantit??s demand??es par le tableau
    // Cette fonction sera utilis??e 2 fois, une avec $_SESSION['cart'] et une autre
    // avec les locations ??crites en BD
    $dateDf=date_create_from_format('Y-m-d', $dateD);//date mise en forme
    $sumQty=[];//tableau vide
    //Pour chaque jour, remplir avec des 0
    for ($j=0;$j<$nbD;$j++){
        $sumQty[]=0;
    }
    for ($j=0;$j<$nbD;$j++) { //pour chaque jour de location
        foreach ($array as $item){//pour chaque ligne du tableau
            if ($item['code']==$code) {
                $dateitemf=date_create_from_format('Y-m-d', $item['dateD']);//date mise en forme
                for ($j2=0;$j2<$item['nbD'];$j2++){ //parcourir les jours de location de l'item
                    if (sumDate($item['dateD'],$j2) == sumDate($dateD,$j)){ //si c'est la bonne date
                        $sumQty[$j] += $item["qty"];
                    }
                }
           }
        }
    }
    var_dump($sumQty);
    return $sumQty;

}

function sumDate($date1,$n1){
    //Cette fonction fait la somme entre une date (format 'Y-m-d' et un nombre de jours)
    //la fonction strtotime sait ajouter et passer par des timestamp
    $sum=date('Y-m-d',strtotime('+'.$n1.'day', strtotime($date1)));
    return $sum;

}