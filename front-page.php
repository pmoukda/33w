<?php 
/**
 * le modèle front-page permet d'afficher la page d'accueil
 */

?>

<?php get_header(); ?>
<!-- section hero -->
  <section class="hero" style="background-image: url('<?= get_template_directory_uri() ?> /images/riziere.jpg');">
    <?php get_template_part("gabarit/hero"); ?> 
  </section>

  <!-- section infolettre -->
  <section class="infolettre">
     <?php get_template_part("gabarit/infolettre"); ?>
  </section>

  <!-- section populaire -->
  <section class="populaire"> 
    <?php get_template_part("gabarit/populaire"); ?>
  </section>
<?php get_footer(); ?>