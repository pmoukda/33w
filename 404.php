<?php 
/**
 * nouveau modèle erreur-404 
 * Représente le modèle par défaut
 */

?>

<?php get_header(); ?>
<?php $image_404 = get_theme_mod('404_image_background');; ?>

  <section class="erreur-404">
    <?php get_template_part("gabarit/erreur-404"); ?>
    <img src="<?= esc_url($image_404); ?>" class="erreur-404__image" alt="Image 404">
    
  </section>
  
<?php get_footer(); ?>