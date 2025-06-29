<?php
/**
 * Template-part piedpage-nav.php
 * affiche la navigation secondaire dans le pied de page
 * 
 */
?>

<div class="piedpage__liens-utiltes">
    <h3 class="piedpage__titre">Liens Utiles</h3>
    <ul class="piedpage__menu">
        <li class="piedpage__menu-item"><a href="#">Témoignages</a></li>
        <li class="piedpage__menu-item"><a href="#">Destinations populaires</a></li>
        <?php wp_nav_menu(array(
            "menu" => "externe",
            "container" => "nav"
            )) ?>
    </ul>
    </div>
    <div class="piedpage__apropos">
    <h3 class="piedpage__titre">À propos de nous</h3>
    <ul class="piedpage__menu">
        <li class="piedpage__menu-item"><a href="#">À propos</a></li>
        <li class="piedpage__menu-item"><a href="#">Contactez-nous</a></li>
    </ul>
    </div>
    <div class="piedpage__informations">
    <h3 class="piedpage__titre">Informations</h3>
    <ul class="piedpage__menu">
        <li class="piedpage__menu-item"><a href="#">Termes et Conditions</a></li>
        <li class="piedpage__menu-item"><a href="#">Devenir membre</a></li>
        <li class="piedpage__menu-item"><a href="#">Promotions</a></li>
        <li class="piedpage__menu-item"><a href="#">FAQ</a></li>
    </ul>
    </div>