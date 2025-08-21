<?php
/**
 * Template-part carrousel.php
 * Permet d'afficher le carrousel de la section héro
 */

  $hero_background = [];
  
  for ($i = 0; $i < 10; $i++) {
      $image_url = get_theme_mod("hero_background_$i");
      if ($image_url) {
          $hero_background[] = $image_url;
      }
  }
  ?>
    <?php foreach ($hero_background as $index => $url): ?>
      <div class="carrousel"
           style="background-image: url('<?= esc_url($url) ?>'); opacity: <?= $index === 0 ? '1' : '0' ?>;">
      </div>
    <?php endforeach; ?>

    <form class="carrousel__form">
      <?php foreach ($hero_background as $index => $url): ?>
        <input type="radio"
               class="carrousel__radio"
               name="carrousel__radio"
               id="carrousel-radio-<?= $index ?>"
               <?= $index === 0 ? 'checked' : '' ?>>
      <?php endforeach; ?>
    </form>
?> 