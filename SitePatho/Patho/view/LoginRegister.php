<?php
ob_start();
?>

    <title>Connexion</title>

    <div class="FormulairePageLogin">



        <form class="formLogin" method='POST' action="index.php?action=login">
            <h1 class="ConnexionTitleLogin" > Connexion </h1>

            <h4 > E-mail</h4>
            <input type="email" placeholder="email address" name="inputUserEmailAddress" required>

            <h4 > Mot-de-passe</h4>
            <input type="password" placeholder="Enter Password" name="inputUserPsw" required >

            <button class="buttonLoginRegisterValidation" type="submit"> Valider </button>
        </form>

        <div>      </div>

        <form class="formRegister">
            <h1 class="InscriptionTitleLogin"> Inscription </h1>

            <h4 > E-mail</h4>
            <input type="search">

            <h4 > Mot-de-passe</h4>
            <input type="search" >

            <h4 > Numéro de Téléphone</h4>
            <input type="search">

            <h4 > Nom</h4>
            <input type="search" >

            <h4>  Prénom</h4>
            <input type="search">

            <button class="buttonLoginRegisterValidation"> Valider </button>

        </form>

    </div>




    <div></div>

<?php
$content = ob_get_clean();
require "gabarit.php";
