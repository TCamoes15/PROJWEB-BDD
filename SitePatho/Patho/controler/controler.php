<?php
function Accueil(){
    $_GET['action'] = "Accueil";
    require "view/Accueil.php";
}

function Contact(){
    $_GET['action'] = "Contact";
    require "view/Contact.php";
}

function LoginRegister(){
    $_GET['action'] = "LoginRegister";
    require "view/LoginRegister.php";
}

function logout(){
    $_GET['action'] = "logout";
    require "view/logout.php";
}

function Films(){
    $_GET['action'] = "Films";
    require "view/Films.php";
}

function GestionDeCompte(){
    $_GET['action'] = "Filmes";
    require "view/GestionDeCompte.php";
}

function Planning(){
    $_GET['action'] = "Filmes";
    require "view/Planning.php";
}