<?php 
/**
 * le modèle front-page permet d'afficher la page d'accueil
 */

?>

<?php get_header(); ?>
<!-- section hero -->

<section class="hero">
   <?php get_template_part("gabarit/carrousel"); ?>
   <?php get_template_part("gabarit/hero"); ?>
</section>

  <!-- section populaire -->
  <section class="populaire"> 
    <?php get_template_part("gabarit/populaire"); ?>
  </section>

  <?php  $vague_couleur = "#0d5e52ff";?>
  <?php vague("#f9f7f4", $vague_couleur); ?>
  
  <!-- section rest-api-->
  <section class="destination">
    <?php extraire_list_categories("destination");?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
  </section>

  <!-- section infolettre -->
  <section class="infolettre" id="inscription">
    <?php get_template_part("gabarit/infolettre"); ?>
  </section>
  <?php get_footer(); ?>