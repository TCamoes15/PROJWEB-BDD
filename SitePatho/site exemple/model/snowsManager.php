<?php


function getSnows(){
    //Cette fonction renvoie la liste des snows triés par ID
    $loginQuery = "SELECT * FROM snows ORDER BY code";
    require_once 'model/dbConnector.php';
    //echo $loginQuery;
    $queryResult = executeQuerySelect($loginQuery);
    return $queryResult;
}