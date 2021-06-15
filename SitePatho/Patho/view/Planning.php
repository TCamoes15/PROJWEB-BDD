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

        <?php for ($line = 1 ; $line <=4 ; $line++) : ?>
            <div class="PlanningRoom">Salle <?php echo $line ?></div>

            <?php for ($day = 1 ; $day <=7; $day++): ?>
                <div class="PlanningContent"> <img src=  class="PlanningContentImage"> <?php  ?> </div>
            <?php endfor ?>

            <div class="PlanningContent"></div>

        <?php endfor ?>

    </div>
<?php
$content = ob_get_clean();
require "gabarit.php"; ?>
