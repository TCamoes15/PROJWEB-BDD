<?php
ob_start();
?>

    <title>Connexion</title>

    <div class="FormulairePageLogin">



        <form>
            <h1 class="ConnexionTitleLogin"> Connexion </h1>
            <h4> E-mail</h4>
            <input type="search">
            <h4> Mot-de-passe</h4>
            <input type="search">
            <h4> bouton valider </h4>
            <input type="search">
        </form>

        <form>
            <h1 class="InscriptionTitleLogin"> Inscription </h1>
            <h4> E-mail</h4>
            <input type="search">
            <h4> Mot-de-passe</h4>
            <input type="search">
            <h4> Numéro de Téléphone</h4>
            <input type="search">
            <h4> Nom</h4>
            <input type="search">
            <h4> Prénom</h4>
            <input type="search">

        </form>

    </div>




    <div></div>

<?php
$content = ob_get_clean();
require "gabarit.php";
