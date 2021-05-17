<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 12.05.2017
 * Time: 08:45
 */

// Tampon de flux stocké en mémoire
ob_start();
$titre = "erreur";
?>


<?php
  $content = ob_get_clean();
  require 'gabarit.php';