<?php
/**
 * Projet   : www
 * Fichier  : test_psw.php
 * Auteur   : Jean-Philippe.CHAVEY
 * Date     : 15.02.2021 10:37
 * Version  : 1.0.0
 * Description: Ce programme...
 */

echo password_hash("soleil", PASSWORD_DEFAULT);

echo "<br> avec lune".password_verify ( "lune" , '$2y$10$xRg4.BKGKFXeoN8XoRihzeBZ8aogOtO4c.hDe1K6OVdfYZcfMWGWm' );
echo "<br> avec soleil:".password_verify ( "soleil" , '$2y$10$xRg4.BKGKFXeoN8XoRihzeBZ8aogOtO4c.hDe1K6OVdfYZcfMWGWm' );