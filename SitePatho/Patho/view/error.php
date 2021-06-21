<?php

ob_start();

?>

<article>
  <header>
    <h2>Erreur</h2>
    <p>L'action demandée est inconnue !</p>
    <?=@$_SESSION['erreur'];?>
  </header>
</article>
<hr/>

<?php
  $content = ob_get_clean();
  require 'gabarit.php';