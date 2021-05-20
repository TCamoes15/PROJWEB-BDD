<?php
ob_start();
?>

    <title>Compte</title>

<?php
$content = ob_get_clean();
require "gabarit.php";
