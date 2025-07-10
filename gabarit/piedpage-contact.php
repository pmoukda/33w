<?php
/**
 * Template-part piedpage-contact.php
 * Affiche les contacts et medias sociaux dans le footer
 */
?>

<?php
$hero_couleur = get_theme_mod('hero_couleur');
$hero_couleur_info = get_theme_mod('hero_couleur_info');
$hero_auteur = get_theme_mod('hero_auteur', 'Moukda');
$hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
$hero_description = get_theme_mod('hero_description', 'Default Title');
$hero_bouton = get_theme_mod('hero_bouton', 'Découvrir nos destinations');
?>

<p class="piedpage__coordonnes">Adresse: 233 rue Sherbrooke, Montréal, Qc</p>
    <p class="piedpage__coordonnes">Téléphone: 514-573-2356</p>
    <p class="piedpage__coordonnes">Courriel: <a href="#">paradise@voyage.com</a></p>
    
    <div class="piedpage__medias">
        <p class="piedpage__coordonnes">Suivez-nous</p>
        <?php icone_sociaux('#fff'); ?>
    </div>