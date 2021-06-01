<?php
function Accueil(){

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
            $_GET['action'] = "home";
            require "view/home.php";
        } else { //if the user/psw does not match, login form appears again
            $_GET['loginError'] = true;
            $_GET['action'] = "login";
            require "view/login.php";
        }

    }
}

function register($registerRequest){


}

function logout(){

    require "view/logout.php";
}

function Films(){

    require "view/Films.php";
}

function GestionDeCompte(){

    require "view/GestionDeCompte.php";
}

function Planning(){

    require "view/Planning.php";
}