<?php

ob_start();

?>


<title>Accueil</title>

<body  >

<div>

    <span class="texteSurImageUn ">Envie de voir le meilleur ?<br> </span>
    <span class="texteSurImageDeux ">Cliquez juste ici </span>



    <a class="logoPlanningAccueil" href=index.php?action=Planning>
        <div class="centerBootstrapAccueil">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="grey" class="bi bi-calendar-plus-fill" viewBox="0 0 16 16" >
            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM8.5 8.5V10H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V11H6a.5.5 0 0 1 0-1h1.5V8.5a.5.5 0 0 1 1 0z"/>
        </svg>
        </div>
    </a>

    <video autoplay muted loop class="myVideo">
        <source src="view/content/image/TrailerVideo/TrailerStarWars.mp4" type="video/mp4"  >
    </video>


</div>

<div class="filmsPageAccueil">


    <div class ="LeftElementGirdAccueil">
        30 JOURS MAX <br>
    <img src="https://media.services.cinergy.ch/media/cinemanteaser174x240/9c6892dcfa42447574d8c02da5adb9bb7de10eb8.jpg" >
    </div>
    <div class ="RightElementGirdAccueil">
        Croyant que ses jours sont comptés, un policer décide de jouer le tout pour le tout.
    </div>
    <div class ="LeftElementGirdAccueil">
        <img class="centrerimg" src="http://www.close-upmag.com/wp-content/uploads/2020/10/Adieu-Les-Cons-affiche-film.jpg" width="600px" height="300px" >
    </div>

    <div class ="RightElementGirdAccueil">
        <strong>Adieu les cons</strong> <br>
        Gravement malade, une quadragénaire décide de retrouver l’enfant qu’elle a dû abandonner.
    </div>

    <div class ="LeftElementGirdAccueil">
        ethgwiubgwgv8ybg8uowayvbg
    </div>

    <div  class ="RightElementGirdAccueil">
        ethgwiubgwgv8ybg8uowayvbg
    </div>

    <div>

    </div>

</div>


</body>

<?php

$content = ob_get_clean();

require "gabarit.php";
