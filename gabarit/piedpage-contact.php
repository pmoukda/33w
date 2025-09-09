<?php
/**
 * Template-part piedpage-contact.php
 * Affiche les contacts et medias sociaux  ainsi que droit auteur dans le footer
 */
?>

<?php
$footer_adresse = get_theme_mod('footer_adresse');
$footer_telephone = get_theme_mod('footer_telephone');
$footer_courriel = get_theme_mod('footer_courriel');

?>

<p class="piedpage__coordonnes">Adresse: <?= $footer_adresse ?></p>
    <p class="piedpage__coordonnes">Téléphone: <?= $footer_telephone ?></p>
    <p class="piedpage__coordonnes">Courriel: <a href="#"><?= $footer_courriel ?></a></p>
    
    <div class="piedpage__medias">
        <p class="piedpage__coordonnes">Suivez-nous</p>
        <span><?php icone_sociaux('#fff'); ?></span>
    </div>
    