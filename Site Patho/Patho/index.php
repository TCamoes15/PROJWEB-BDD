<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 08:54
 * Update : 31-JAN-2019 - nicolas.glassey
 *          Simplify index. Remove all pages references.
 */

session_start();
require "controler/controler.php";



if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'Accueil' :
            Accueil();
            break;
        case 'Contact' :
            Contact($_POST);
            break;
        case 'LoginRegister' :
            LoginRegister($_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'Filmes' :
            Filmes();
            break;
        case 'GestionDeCompte' :
            GestionDeCompte();
            break;
        case 'Planning' :
            Planning();
            break;
        default :
            Accueil();
    }
}
else {
    Accueil();
}

?>