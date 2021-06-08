<?php


function isLoginCorrect($userEmailAddress, $userPsw)
{
    $result = false;


    $strSeparator = '\'';
    $loginQuery = "SELECT * FROM users WHERE email LIKE '$userEmailAddress'";

    require_once 'model/dbConnector.php';

    $queryResult = executeQuerySelect($loginQuery);


    if (count($queryResult) == 1) //Si queryResult comporte 1 ligne c'est que l'email existe
    {
        $userHashPsw = $queryResult[0]['password']; //récupération du hash dans la BD
        $result = password_verify($userPsw, $userHashPsw);

    }


    return $result;
}

function registerNewAccount($userEmailAddress, $userPsw, $userPhoneNumber, $userLastName, $userFirstName)
{
    $strSeparator = '\'';
    //avec password hashé
    $userHashPsw = password_hash($userPsw, PASSWORD_DEFAULT);
    $register = "INSERT INTO users (email, password, phoneNumber, firstname, lastname, autorisation) VALUES ('$userEmailAddress', '$userHashPsw', '$userPhoneNumber', '$userFirstName', '$userLastName' , '1')";

    require_once 'model/dbConnector.php';
    $queryResult = executeQueryIUD($register);

    return $queryResult;//renvoie true (si l'insert a été exécuté) ou false (si l'insert a été refusé)
}

function getUserType($userEmailAddress)
{
    $result = 1;//we fix the result to 1 -> customer

    $strSeparator = '\'';

    $getUserTypeQuery = 'SELECT autorisation FROM users WHERE users.email =' . $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($getUserTypeQuery);

    if (count($queryResult) == 1) {
        $result = $queryResult[0]['autorisation'];
    }
    return $result;
}
