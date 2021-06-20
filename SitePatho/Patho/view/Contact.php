<?php
ob_clean();
?>
    <title>Contact</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <div class="container">
        <h1 class="text-center">Contact</h1>
        <hr>
        <div class="row">
            <div class="col-sm-8">

                <h4 class="pt-2">Numéro de téléphone</h4>
                <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"> 024 459 12 34 </a><br>
                <h4 class="pt-2">Email</h4>
                <i class="fa fa-envelope" style="color:#000"></i> <a href="">patho@patho.com</a><br>
                <h4 class="pt-2">Horaire: <br><br>
                Lundi: 16h-23h <br>
                Mardi: 16h-23h <br>
                Mecredi: 14h-23h <br>
                Jeudi: 16h-23h <br>
                Vendredi: 14h-23h <br>
                Samedi: 14h-23h<br>
                Dimanche: Fermé <br></h4>
            </div>

            <div class="col-sm-4" id="contact2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43701.40631792934!2d6.532153522712549!3d46.797649567954835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478db876b925cce3%3A0xc43383adf22945c2!2sCPNV%2C%20Centre%20professionnel%20du%20Nord%20vaudois!5e0!3m2!1sfr!2sch!4v1622465957759!5m2!1sfr!2sch" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <h4 class="pt-2">Adresse</h4>
                <i class="fas fa-globe" style="color:#000"></i> CPNV Sainte croix<br>

            </div>
        </div>
    </div>


    <br><br>



<?php
$content = ob_get_clean();
require "gabarit.php";