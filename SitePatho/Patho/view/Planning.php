<?php
ob_start();
?>

    <title>Planning</title>

<?php
$content = ob_get_clean();
require "gabarit.php";
