<?php
ob_start();
?>

    <title>Connexion</title>

    <div class="FormulairePageLogin">



        <form class="formLogin">
            <h1 class="ConnexionTitleLogin"> Connexion </h1>
            <h4 class="LoginRegisterContentTexte"> E-mail</h4>
            <input type="search" class="LoginRegisterbutton">
            <h4 class="LoginRegisterContentTexte"> Mot-de-passe</h4>
            <input type="search" class="LoginRegisterbutton">
            <button class="buttonLoginRegisterValidation"> Valider </button>
        </form>

        <form class="formRegister">
            <h1 class="InscriptionTitleLogin"> Inscription </h1>
            <h4 class="LoginRegisterContentTexte"> E-mail</h4>
            <input type="search" class="LoginRegisterbutton">
            <h4 class="LoginRegisterContentTexte"> Mot-de-passe</h4>
            <input type="search" class="LoginRegisterbutton">
            <h4 class="LoginRegisterContentTexte"> Numéro de Téléphone</h4>
            <input type="search" class="LoginRegisterbutton">
            <h4 class="LoginRegisterContentTexte"> Nom</h4>
            <input type="search" class="LoginRegisterbutton">
            <h4 class="LoginRegisterContentTexte">  Prénom</h4>
            <input type="search" class="LoginRegisterbutton">
            <button class="buttonLoginRegisterValidation"> Valider </button>

        </form>

    </div>




    <div></div>

<?php
$content = ob_get_clean();
require "gabarit.php";
