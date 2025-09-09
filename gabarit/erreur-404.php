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

$titre_404 = get_theme_mod('404_titre', "Oops, vous avez échoué sur l'île 404 !");
$message_404 = get_theme_mod('404_message', "Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !");
$bouton_404 = get_theme_mod("404_bouton', 'Retour à l'accueil");
?>
<style>
.erreur-404__bouton{
  color: <?= $couleur_bouton_404 ?>;
}

</style>

    <div class="erreur-404__contenu">
        <h1 class="erreur-404__titre"><?= $titre_404 ?></h1>
        <p class="erreur-404__message"><?= $message_404 ?></p>
        <div>
            <a class="erreur-404__bouton" href="<?php echo home_url(); ?>"><?= $bouton_404 ?></a>
            <?php get_search_form(); ?>
        </div>
    </div>

