<?php

ob_start();
?>


    <title>Accueil</title>

    <body>

    <div>

        <span class="texteSurImageUn ">Envie de voir le meilleur ?<br> </span>
        <span class="texteSurImageDeux ">Cliquez juste ici </span>


        <a class="logoPlanningAccueil" href=index.php?action=Planning>
            <div class="centerBootstrapAccueil">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="grey"
                     class="bi bi-calendar-plus-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM8.5 8.5V10H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V11H6a.5.5 0 0 1 0-1h1.5V8.5a.5.5 0 0 1 1 0z"/>
                </svg>
            </div>
        </a>

        <video autoplay muted loop class="myVideo">
            <source src="view/content/image/TrailerVideo/TrailerStarWars.mp4" type="video/mp4">
        </video>



    </div>

    <div class="filmsPageAccueil">
        <?php $i=0;
        foreach ($movies as $movie) :
            $i++;
            if ($i < 4) : ?>
            <div class="LeftElementGirdAccueil">
                <img src=<?= $movie['Image'] ?> class="AfficheFilmGrandFormat">
            </div>

            <div class="RightElementGirdAccueil">
                <?= $movie['Description'] ?>
            </div>

        <?php endif;
        endforeach;?>


        <div>


        </div>

    </div>


    </body>

<?php

$content = ob_get_clean();

require "gabarit.php";
