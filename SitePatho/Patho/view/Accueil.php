<?php

ob_start();

?>


<title>Accueil</title>

<body>

<div>
    <span class="texteSurImage ">Envie de voir le meilleur ? <br> Cliquez juste en bas </span>
    <video autoplay muted loop class="myVideo">
        <source src="view/content/image/TrailerVideo/TrailerStarWars.mp4" type="video/mp4"  >
    </video>
</div>

<div class="filmsPageAccueil">


    <div class ="LeftElementGirdAccueil">
    ethgwiubgwgv8ybg8uowayvbg<br><br><br><br><br><br><br><br>
    </div>

    <div class ="RightElementGirdAccueil">
    ethgwiubgwgv8ybg8uowayvbg<br><br><br><br><br><br><br><br>
    </div>

    <div class ="LeftElementGirdAccueil">
    ethgwiubgwgv8ybg8uowayvbg<br><br><br><br><br><br><br><br>
    </div>

    <div class ="RightElementGirdAccueil">
    ethgwiubgwgv8ybg8uowayvbg<br><br><br><br><br><br><br><br>
    </div>

    <div class ="LeftElementGirdAccueil">
        ethgwiubgwgv8ybg8uowayvbg<br><br><br><br><br><br><br><br>
    </div>

    <div  class ="RightElementGirdAccueil">
        ethgwiubgwgv8ybg8uowayvbg<br><br><br><br><br><br><br><br>
    </div>


</div>


</body>

<?php

$content = ob_get_clean();

require "gabarit.php";
