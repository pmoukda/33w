<?php 
/**
 * le modèle index 
 * Représent le modèle par défaut
 */

?>

<?php get_header(); ?>
<h1>Pour déboggage seulement  ------------ index-page.php --------------</h1>

  <section class="populaire">
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