<?php
ob_clean();
?>

    <title>Planning</title>


    <div class="PlanningGird">

        <!-- 1ère ligne -->
        <div class="PlanningTitle">Planning</div>
        <div class="PlanningTitle">Lundi</div>
        <div class="PlanningTitle">Mardi</div>
        <div class="PlanningTitle">Mercredi</div>
        <div class="PlanningTitle">Jeudi</div>
        <div class="PlanningTitle">Vendredi</div>
        <div class="PlanningTitle">Samedi</div>
        <div class="PlanningTitle">Dimanche</div>

        <!-- 2ère ligne -->
        <div class="PlanningRoom">Salle 1</div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"></div>

        <!-- 3ère ligne -->
        <div class="PlanningRoom">Salle 2</div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"></div>

        <!-- 4ère ligne -->
        <div class="PlanningRoom">Salle 3</div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"></div>

        <!-- 5ère ligne -->
        <div class="PlanningRoom">Salle 4</div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"></div>

    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";
