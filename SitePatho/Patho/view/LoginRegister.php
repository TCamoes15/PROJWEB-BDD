<?php
ob_start();
?>

    <title>Connexion</title>

    <div class="FormulairePageLogin">


        <div class="row">
            <div class="col-25">
        <form class="formLogin" method='POST' action="index.php?action=login">
            <h1 class="ConnexionTitleLogin" > Connexion </h1>

            <h4 > E-mail</h4>
            <input type="email" placeholder="adresse e-mail" name="inputUserEmailAddress" required>

            <h4 > Mot-de-passe</h4>
            <input type="password" placeholder="mot de passe" name="inputUserPsw" required >

            <button class="buttonLoginRegisterValidation" type="submit"> Valider </button>
        </form>
            </div>
        </div>


        <form class="formRegister" method='POST' action="index.php?action=register">
            <h1 class="InscriptionTitleLogin"> Inscription </h1>

            <h4 > E-mail</h4>
            <input type="email" placeholder="adresse e-mail" name="inputUserEmailAddress" require>

            <h4 > Mot-de-passe</h4>
            <input type="password" placeholder="mot de passe" name="inputUserPsw" require>

            <h4 > Numéro de Téléphone</h4>
            <input type="tel" placeholder="numéro de teléphone" name="inputPhoneNumber" require>

            <h4 > Nom</h4>
            <input type="lname" placeholder="nom de famille" name="inputLastname" require>

            <h4>  Prénom</h4>
            <input type="fname" placeholder="prénom" name="inputFirstname" require>

            <button class="buttonLoginRegisterValidation" type="submit" > Valider </button>
        </form>

    </div>




    <div></div>

<?php
$content = ob_get_clean();
require "gabarit.php";
