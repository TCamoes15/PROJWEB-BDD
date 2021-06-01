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
<div class="span12" id="divMain">

<article>
    <header>
        <h2> Nos snows</h2>
        <div class="table-responsive">
            <table class="table textcolor">
                <tr>
                    <th>Code</th><th>Marque</th><th>Modèle</th><th>Longueur</th><th>Prix</th><th>Disponibilité</th><th>Photo</th>
                </tr>
                <?php foreach ($snows as $snow) : ?>
                    <tr>
                        <td><a href="index.php?action=displayASnow&code=<?=$snow['code']?>"><?=$snow['code']?></a></td>
                        <td><?=$snow['brand']?></td>
                        <td><?=$snow['model']?></td>
                        <td><?=$snow['snowLength']?> cm</td>
                        <td>CHF <?=$snow['dailyPrice']?>.- par jour</td> <!-- Prices are not float -->
                        <td><?=$snow['qtyAvailable']?></td>
                        <td><a href="<?=$snow['photo']?>" target="blank"><img src="<?=$snow['photo']?>" style="height: 20px"></a></td>
                        <td><a href="index.php?action=delSnow&code=<?=$snow['code']?>"><button>Poubelle</button></a></td>
                    </tr>
                <?php endforeach ?>
            </table>
            <a href="index.php?action=addSnow"><button>Ajouter un snow</button></a>

        </div>
    </header>
</article>
<hr/>

</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
