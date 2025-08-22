<?php 
/**
* Template-part erreur-404.php
* permet d'afficher la section "erreur-404"
* 
*/
?>
<?php
$couleur_bouton_404 = get_theme_mod('404_couleur_bouton');
$couleur_zoneRecherche_404 = get_theme_mod('404_couleur_zone_recherche');

$titre_404 = get_theme_mod('404_titre', 'Default Title');
$message_404 = get_theme_mod('404_message', 'Default Title');
$bouton_404 = get_theme_mod("404_bouton', 'Retour à l'accueil");
?>
<style>
.erreur-404__bouton{
  color: <?= $couleur_bouton_404 ?>;
}

</style>

<div class="erreur-404">
    <h1 class="erreur-404__titre"><?= $titre_404 ?></h1>
    <p class="erreur-404__message"><?= $message_404 ?></p>
  
    <div>
        <a class="erreur-404__bouton" href="<?php echo home_url(); ?>"><?= $bouton_404 ?></a>
        <?php get_search_form(); ?>
    </div>
</div>
