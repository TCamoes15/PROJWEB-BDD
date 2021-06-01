<?php
/**
 * Projet   : www
 * Fichier  : addSnow.php
 * Auteur   : Jean-Philippe.CHAVEY
 * Date     : 12.02.2021 10:01
 * Version  : 1.0.0
 * Description: Ce programme...
 */


ob_start();
?>
    <h1>Ajout d'un snow</h1>
<?php if (isset($adderror)) :?>
    <h5><span style="color:red"><?=$adderror?></span></h5>
<?php endif ?>
    <article>
        <form class='form' method='POST' action="index.php?action=addSnow">

           <div class="container">
                <label for="fcode"><b>Code</b></label>
                <input type="text" placeholder="code" name="fcode" required>

                <label for="fbrand"><b>Marque</b></label>
                <input type="text" placeholder="marque" name="fbrand" required>

                <label for="fmodel"><b>model</b></label>
                <input type="text" placeholder="modèle" name="fmodel" required>

               <label for="fSnowLength"><b>Longueur (cm)</b></label>
               <input type="text" placeholder="Longueur (cm)" name="fSnowLength" required>

               <label for="fqtyAvailable"><b>Quantité dispo</b></label>
               <input type="number" placeholder="Quantité dispo" name="fQtyAvailable" required>

               <label for="fDescription"><b>Description</b></label>
               <input type="text" placeholder="Description" name="fDescription" required>

               <label for="fDailyPrice"><b>Prix par jour</b></label>
               <input type="number" placeholder="Prix par jour" name="fDailyPrice" required>

               <label for="fPhoto"><b>Nom de la photo</b></label>
               <input type="text" placeholder="Photo" name="fPhoto" value="view/content/images/B101_small.jpg" required>

               <label for="factive"><b>Actif (0/1) </b></label>
               <input type="number" placeholder="Actif (0/1)" name="factive" value="view/content/images/B101_small.jpg" required>

               <button type="submit" class="registerbtn">Ajouter le snow</button>
            </div>
        </form>

    </article>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>