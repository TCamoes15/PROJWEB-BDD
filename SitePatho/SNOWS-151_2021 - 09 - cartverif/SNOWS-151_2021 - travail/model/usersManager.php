<?php
/**
 * This function is designed to verify user's login
 * @param $userEmailAddress
 * @param $userPsw
 * @return bool : "true" only if the user and psw match the database. In all other cases will be "false".
 */
function isLoginCorrect($userEmailAddress, $userPsw){
    $result = false;

    $strSeparator = '\'';
   $loginQuery = 'SELECT * FROM users WHERE userEmailAddress = '. $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    echo $loginQuery;
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1) //Si queryResult comporte 1 ligne c'est que l'email existe
    {
        $userHashPsw = $queryResult[0]['userHashPsw']; //récupération du hash dans la BD
        $result = password_verify($userPsw, $userHashPsw); //renvoie vrai si le password et le hash correspondent
    }
    return $result;
}

function registerNewAccount($userEmailAddress, $userPsw){

    $strSeparator = '\'';
    //avec password hashé
    $userHashPsw = password_hash($userPsw, PASSWORD_DEFAULT);
    $registerQuery = 'INSERT INTO users (userEmailAddress, userHashPsw, userType) 
        VALUES (' .$strSeparator . $userEmailAddress .$strSeparator . ','
        .$strSeparator . $userHashPsw .$strSeparator. ',1)';
    //$registerQuery = 'INSERT INTO users (`userEmailAddress`, `userPsw`)
    //        '.$strSeparator . $userPsw .$strSeparator. ')';
    echo $registerQuery;
    require_once 'model/dbConnector.php';
    $queryResult = executeQueryIUD($registerQuery);

    return $queryResult;//renvoie true (si l'insert a été exécuté) ou false (si l'insert a été refusé)
}

function getUserType($userEmailAddress){
    $result = 1;//we fix the result to 1 -> customer

    $strSeparator = '\'';

    $getUserTypeQuery = 'SELECT userType FROM users WHERE users.userEmailAddress =' . $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($getUserTypeQuery);

    if (count($queryResult) == 1){
        $result = $queryResult[0]['userType'];
    }
    return $result;
}



