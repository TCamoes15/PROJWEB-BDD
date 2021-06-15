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



        <?php $i=0;
        foreach ($description as $descriptions ):
            $i++;
           if ($i <= 4) :?>

        <div class="PlanningRoom">Salle <?php echo $i ?></div>
        <div class="PlanningContent"> <img src=<?="view/content/image/gris.jpg" ?>  class="PlanningContentImage"> <?php $description['Title']['1'] ?> </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"> <img src="view/content/image/gris.jpg" class="PlanningContentImage"> Star Jones </div>
        <div class="PlanningContent"></div>

           <?php endif;
        endforeach;?>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
