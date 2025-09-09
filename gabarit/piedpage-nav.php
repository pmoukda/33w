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
        <?php wp_nav_menu(array(
            "menu" => "footer_liensUtiles",
            "container" => "nav"))
        ?>
        <?php wp_nav_menu(array(
            "menu" => "externe",
            "container" => "nav")) 
        ?>
    </ul>
</div>
<div class="piedpage__apropos">
<h3 class="piedpage__titre">À propos de nous</h3>
<ul class="piedpage__menu">
    <?php wp_nav_menu(array(
        "menu" => "footer_apropos",
        "container" => "nav"))
    ?>
</ul>
</div>
<div class="piedpage__informations">
<h3 class="piedpage__titre">Informations</h3>
<ul class="piedpage__menu">
    <?php wp_nav_menu(array(
            "menu" => "footer_information",
            "container" => "nav"
            )) 
    ?>
</ul>
</div>