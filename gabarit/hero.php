<?php 
/**
 * Template-part hero.php
 * permet d'afficher la section "Hero"
 * 
 */
?>
<?php
  $hero_couleur = get_theme_mod('hero_couleur');
  $hero_auteur = get_theme_mod('hero_auteur', 'Moukda');
  $hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
?>
<style>
  .hero__contenu{
    color: <?= $hero_couleur?>;
  }
</style>
<div class="hero__contenu">
    <h1 class="hero__titre"><?php bloginfo("name") ?></h1>
    <p class="hero__description"><?php bloginfo("description") ?>
    Envie de dépaysement, d’aventure ou simplement de faire une pause loin du quotidien ?
    Chez <strong>Paradise</strong>, nous imaginons pour vous des voyages sur mesure, authentiques et inoubliables. Que ce soit pour un week-end en Europe, un safari en Afrique ou une escapade en amoureux sous les tropiques, notre équipe est à votre écoute pour créer le séjour qui vous ressemble.
  </p> 
  <q class="hero__slogan">Des destinations de rêve, des souvenirs pour la vie.</q>
  <div class="hero__bouton">Découvrir nos destinations</div>
  <p>Auteur du thème:<?= $hero_auteur?></p>
  <p>Adresse du club:<?= $hero_adresse?></p>
  <?php icone_sociaux('#fff')?>
</div>
  