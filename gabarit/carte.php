
<?php 
/**
 * Template-part carte.php
 * Affiche une carte dans un conteneur flex
 */
?>
  
   <article class="conteneur__carte">
    <?php the_post_thumbnail('miniature');?>
    
    <h1><?php 
    // affiche le titre principale de "post" 
    the_title(); ?></h1>
    
    <?php $lien = "<a href=". get_permalink().">Suite</a>";
    echo "<p>". wp_trim_words (get_the_excerpt(),10, $lien) . "</p>";

?>
</article>