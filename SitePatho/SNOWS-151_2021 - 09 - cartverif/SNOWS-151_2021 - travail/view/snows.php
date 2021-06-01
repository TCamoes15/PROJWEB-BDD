<?php
/**
 * Projet   : www
 * Fichier  : snowsSeller.php
 * Auteur   : Jean-Philippe.CHAVEY
 * Date     : 19.02.2021 08:14
 * Version  : 1.0.0
 * Description: Ce programme...
 */
ob_start();
$titre="RentASnow - Nos snows";
?>
    <h1>Snows</h1><br>

<form action="index.php?action=snows" method="post">
    <label for="fSearch">Entrer une chaine de caractère pour filtrer</label>
    <input type="text" name="fSearch" id="fSearch">
    <input type="Submit" value="Filtrer">
 </form>
<?php
foreach ($snows as $snow):
    ?>
    <div style="border: solid black 1px; border-radius: 5px; display: inline-block;
        margin: 10px; padding: 5px; width: 20%; min-width: 150px;">
        <a href="<?=$snow['photo'];?>"><img src="<?=$snow['photo'];?>" style="height: 100px"></a><br>
        <h2><a href="index.php?action=displayASnow&code=<?=$snow['code'];?>"><?=$snow['code'];?></a></h2><br>
        Marque: <?=$snow['brand'];?><br>
        Model: <?=$snow['model'];?><br>
        Longueur: <?=$snow['snowLength'];?> cm<br>
        Prix: <?=$snow['dailyPrice'];?> Frs.-<br>
        Disponibilité: <?=$snow['qtyAvailable'];?><br>
        <?php if ($snow['active']==1) :?>
            <p><a href="index.php?action=snowLeasingRequest&code=<?= $snow['code']; ?>"
                  class="btn btn-primary">Louer ce snow</a></p>
        <?php else : ?>
            <p><a class="btn btn-danger" disabled="disabled">Plus en location</a></p>
        <?php endif ?>
    </div>
<?php
endforeach;
?>

<?php
$content = ob_get_clean();
require "gabarit.php";
