<?php
function Accueil(){
    require_once "model/usersManager.php";
    $movies = recuperateImage();
    require "view/Accueil.php";
}

function Contact(){

    require "view/Contact.php";
}

function LoginRegister(){

    require "view/LoginRegister.php";
}
function login($loginRequest)
{
//if a login request was submitted
    if (isset($loginRequest['inputUserEmailAddress']) && isset($loginRequest['inputUserPsw'])) {
        //extract login parameters
        $userEmailAddress = $loginRequest['inputUserEmailAddress'];
        $userPsw = $loginRequest['inputUserPsw'];

        //try to check if user/psw are matching with the database
        require_once "model/usersManager.php";
        if (isLoginCorrect($userEmailAddress, $userPsw)) {
            $userType = getUserType($userEmailAddress);
            createSession($userEmailAddress, $userType);
            $_GET['loginError'] = false;
            $_GET['action'] = "Accueil";
           require "view/Accueil.php";
        } else { //if the user/psw does not match, login form appears again
            $_GET['loginError'] = true;
            $_GET['action'] = "login";
            require "view/LoginRegister.php";
        }

    }
}

function createSession($userEmailAddress,$userType){
    $_SESSION['userEmailAddress'] = $userEmailAddress;
    $_SESSION['userType']=$userType;
}

function register($registerRequest){
    //variable set
    if (isset($registerRequest['inputUserEmailAddress']) && isset($registerRequest['inputUserPsw'])) {

        //extract register parameters
        $userEmailAddress = $registerRequest['inputUserEmailAddress'];
        $userPsw = $registerRequest['inputUserPsw'];
        $userPhoneNumber = $registerRequest['inputPhoneNumber'];
        $userLastName = $registerRequest['inputLastname'];
        $userFirstName = $registerRequest['inputFirstname'];

        if ($userPsw !=null) {
            require_once "model/usersManager.php";
            if (registerNewAccount($userEmailAddress, $userPsw, $userPhoneNumber, $userLastName, $userFirstName )){ //Cas inscription tout OK, on crée direct la session
                createSession($userEmailAddress,1);
                $_GET['registerError'] = false;
                $_GET['action'] = "Accueil";
                require "view/Accueil.php";
                echo "COK" ;
            } else{ //Cas requête refusée (email existant)
                $_GET['registerError'] = true;
                $_GET['action'] = "register";
                require "view/LoginRegister.php";

            }
        }else{ //Cas inscription pas possible, il faut recommencer
            $_GET['registerError'] = true;
            $_GET['action'] = "register";
            require "view/LoginRegister.php";
            echo "COsK" ;
        }
    }else{ //Cas où on arrive sans données
        $_GET['action'] = "register";
        require "view/LoginRegister.php";
        echo "COaK" ;
    }
}

function logout(){

    $_SESSION = array();

    require "view/Accueil.php";
}

function Films(){
    require_once "model/usersManager.php";
    $movies = recuperateImage();
    require "view/Films.php";
}

function GestionDeCompte(){

    require "view/GestionDeCompte.php";
}

function Planning(){
    require_once "model/usersManager.php";
    $descriptions = recuperatePlanningData();

    foreach ($descriptions as $description){
        $movies [$description ['idRooms']] [$description['Day']] = $description['Title'];
    }

    require "view/Planning.php";
}

