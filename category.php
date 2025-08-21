<?php 
/**
 * le modèle catégorie
 * Représent le modèle par défaut
 */

?>

<?php get_header(); ?>

  <section class="populaire">
    <h2><?php single_cat_title() ?></h2>
    <?= category_description(); ?>
    <?php get_template_part("gabarit/categorie"); ?>
  </section>
  
<?php get_footer(); ?>