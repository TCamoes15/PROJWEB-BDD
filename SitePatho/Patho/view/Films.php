<?php
ob_clean();
?>

    <title>Films</title>

    <div class="filmsPage">

        // affiche des films et leur description depuis la bdd

        <?php  foreach ($movies as $movie) :  ?>

            <div class="LeftElementGirdAccueil">
                <img src=<?= $movie['Image'] ?> class="AfficheFilmGrandFormat">
            </div>

            <div class="RightElementGirdAccueil">
                <?= $movie['Description'] ?>
            </div>
        <?php endforeach?>

        <div>
            
        </div>

    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
