<?php
/**
 * Projet   : www
 * Fichier  : snowsManager.php
 * Auteur   : Jean-Philippe.CHAVEY
 * Date     : 19.02.2021 08:17
 * Version  : 1.0.0
 * Description: Ce programme contient les fonctions d'accès à la BD pour les snows
 */

function getSnows(){
    //Cette fonction renvoie la liste des snows triés par ID
    $loginQuery = "SELECT * FROM snows ORDER BY code";
    require_once 'model/dbConnector.php';
    //echo $loginQuery;
    $queryResult = executeQuerySelect($loginQuery);
    return $queryResult;
}