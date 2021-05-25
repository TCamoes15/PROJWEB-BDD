<?php
ob_clean();
?>

    <title>Films</title>


    <div class="filmsPage">


        <div>
            Film 1<br><br><br><br><br><br><br><br>
        </div>
        <div>
            Description<br><br><br><br><br><br><br><br>
        </div>
        <div>
            Film 2<br><br><br><br><br><br><br><br>
        </div>
        <div>
            Description<br><br><br><br><br><br><br><br>
        </div>
        <div>
            Film 3<br><br><br><br><br><br><br><br>
        </div>
        <div>
            Description<br><br><br><br><br><br><br><br>
        </div>
        <div>
            Film 4<br><br><br><br><br><br><br><br>
        </div>
        <div>
            Description<br><br><br><br><br><br><br><br>
        </div>

    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
