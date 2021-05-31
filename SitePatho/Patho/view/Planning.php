<?php
ob_clean();
?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
<div class="planning">
    <div class=" col-md-4 col-sm-12 well pull-right-lg" style="border:0px solid">

        <div class="col-md-12" style="padding:0px;">
            <br>
            <table class="table table-bordered table-style table-responsive">

                <tr>
                    <th>Salle</th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                </tr>
                <tr>
                    <td>Salle 1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>Salle 2</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td class="today">12</td>
                    <td>13</td>
                    <td>14</td>
                </tr>
                <tr>
                    <td>Salle 3</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>Salle 4</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                </tr>



            </table>

        </div>
    </div>













    <!-- <?php

    ?>-->
<?php
$content = ob_get_clean();
require "gabarit.php";
