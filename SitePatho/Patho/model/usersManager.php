<?php


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

function registerNewAccount($userEmailAddress, $userPsw, $userPhoneNumber, $userLastName, $userFirstName ){

    $strSeparator = '\'';
    //avec password hashé
    $userHashPsw = password_hash($userPsw, PASSWORD_DEFAULT);
    $register = "INSERT INTO users (e-mail, password, phoneNumber, firstname, lastname, autorisation) VALUES ('$userEmailAddress', '$userHashPsw', '$userPhoneNumber', '$userFirstName', '$userLastName' , '1')";
    //$registerQuery = 'INSERT INTO users (`userEmailAddress`, `userPsw`)
    //        '.$strSeparator . $userPsw .$strSeparator. ')';
    require_once 'model/dbConnector.php';
    $queryResult = executeQueryIUD($register);

    return $queryResult;//renvoie true (si l'insert a été exécuté) ou false (si l'insert a été refusé)
}

function getUserType($userEmailAddress){
    $result = 1;//we fix the result to 1 -> customer

    $strSeparator = '\'';

    $getUserTypeQuery = 'SELECT autorisation FROM users WHERE users.e-mail =' . $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($getUserTypeQuery);

    if (count($queryResult) == 1){
        $result = $queryResult[0]['userType'];
    }
    return $result;
}
