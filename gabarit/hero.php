<?php 
/**
* Template-part hero.php
* permet d'afficher la section "Hero"
* 
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
<style>
.hero__contenu{
  color: <?= $hero_couleur?>;
}

</style>
<div class="hero__contenu">
<h1 class="hero__titre"><?php bloginfo("name") ?></h1>
<p class="hero__description"><?= $hero_description?></p> 
<q class="hero__slogan"><?php bloginfo("description") ?></q>
<div class="hero__bouton"><?= $hero_bouton?></div>
<p class="hero__info">Auteur du thème:<?= $hero_auteur?></p>
<p class="hero__info">Adresse du club:<?= $hero_adresse?></p>
<span class="hero__icones-sociaux"><?php icone_sociaux('#000')?></span>
</div>
