
<?php 
/**
 * Template-part carte.php
 * Affiche une carte dans un conteneur flex
 */
?>
  <?php $lien = "<a href=". get_permalink().">Suite</a>";?>

   <article class="conteneur__carte">
       <?php the_post_thumbnail('thumbnail');?>
        <h2><?php the_title(); ?></h2>
        <p><?= wp_trim_words (get_the_excerpt(),10, $lien)?></p>
        <small>Température minimum: <?php the_field('temperature_minimum'); ?>&deg;C</small>
        <small>Température maximum: <?php the_field('temperature_maximum'); ?>&deg;C</small>
        <small>Température moyenne: <?php the_field('temperature_moyenne'); ?>&deg;C</small>
        <?php  the_category()?>
</article>