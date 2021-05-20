<?php

ob_start();
$titre="RentASnow - Nos snows";
?>

<?php
$content = ob_get_clean();
require "gabarit.php";
