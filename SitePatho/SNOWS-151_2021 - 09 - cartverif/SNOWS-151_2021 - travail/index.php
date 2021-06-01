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
        case 'home' :
            home();
            break;
        case 'login' :
            login($_POST);
            break;
        case 'register' :
            register($_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'snows' :
            displaySnows();
            break;
        case 'addSnow':
            addSnow();
        case 'delSnow':
            delSnow($_GET['code']);
            break;
        case 'displayCart':
            displayCart();
            break;
        case 'delCart': //Supprimer la ligne key du panier
            delCart($_GET['key']);
            break;
        case "snowLeasingRequest": //ajouter la location d'un snow
            addSnowCart($_GET['code']);
            break;
        case "qtychange":
            qtyChange($_GET['key'], $_GET['modif']);
            break;
        case "dureechange":
            dureeChange($_GET['key'], $_GET['modif']);
            break;
        case "writeCart":
            writeCart();
            break;
        default :
            home();
    }
}
else {
    home();
}

?>