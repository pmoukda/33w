<?php 
/**
 * le modèle index 
 * Représent le modèle par défaut
 */

?>

<?php get_header(); ?>

  <section class="populaire">
    <h2><?php single_cat_title() ?></h2>
    <?= category_description(); ?>
    <?php if(have_posts()){
      while(have_posts()){
        // affiche image "mise en avant" miniature
        the_post(); 
        the_post_thumbnail('thumbnail');
        ?>
        <!-- affiche le titre principale de "post" -->
        <h1><?php the_title();?></h1>
        <!-- cette fonction permet d'afficher l'ensemble du contenenu du post (article ou page) -->
        <?php the_content();
      }
    }  
    ?>
  </section>
  
<?php get_footer(); ?>