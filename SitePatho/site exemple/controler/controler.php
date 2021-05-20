<?php


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
            if (registerNewAccount($userEmailAddress, $userPsw)){ //Cas inscription tout OK, on crée direct la session
                createSession($userEmailAddress,1);
                $_GET['registerError'] = false;
                $_GET['action'] = "home";
                require "view/home.php";
            } else{ //Cas requête refusée (email existant)
                $_GET['registerError'] = true;
                $_GET['action'] = "register";
                require "view/register.php";
            }
        }else{ //Cas inscription pas possible, il faut recommencer
            $_GET['registerError'] = true;
            $_GET['action'] = "register";
            require "view/register.php";
        }
    }else{ //Cas où on arrive sans données
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
    require_once("model/DataManager.php");
    $snows=getSnows();
    //solution sans isset (si non loggé, @$_SESSION['userType'] renvoie false)
    if (@$_SESSION['userType']==2){
       require "view/snowsSeller.php";
    } else{
        require "view/snows.php";
    }


}