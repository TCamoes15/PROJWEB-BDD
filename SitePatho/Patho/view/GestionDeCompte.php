<?php
ob_clean();
?>

    <title>Compte</title>
    <div class="GestionDeCompteFormulaire">
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <h5 class="user-name">Nom</h5>
                                <h5 class="user-surname">Prénom</h5>
                                <h6 class="user-email">email@email.com</h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary">Que voulez vous changez ?</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">nouveau numéro de téléphone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="nouveau numéro de téléphone">
                                    <label for="eMail">nouvel email</label>
                                    <input type="email" class="form-control" id="eMail" placeholder="nouvel e-mail">
                                    <label for="pwd">nouveau mot de passe</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="nouveau mot de passe">
                                </div>
                            </div>

                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">

                                    <form  method='POST' action="index.php?action=logout">
                                        <br>
                                    <button type="submit" id="submit" name="submit" class="btn btn-danger">Se déconnecter</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
