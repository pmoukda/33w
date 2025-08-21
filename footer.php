<?php
/**
 * Le modèle footer.php permet d'afficher le pied de page
 * 
 */
?>
<?php
$footer_droit_auteur = get_theme_mod('footer_droit_auteur');
$footer_couleur = "#000";
vagueFooter("#f9f7f4", $footer_couleur); ?>
<footer class="piedpage" style="background-color: <?= $footer_couleur ?> ;">
    <nav class="piedpage__nav">
     <?php get_template_part("gabarit/piedpage-nav"); ?>
    </nav>
    <div class="piedpage__recherche">
      <?php get_search_form();?>
    </div>
   
    <div class="piedpage__contact">
      <figure class="footer__logo">
      <?= get_custom_logo(); ?>
    </figure> 
      <?php get_template_part("gabarit/piedpage-contact"); ?>
    </div>
    <p class="piedpage__droit-auteur"><?=$footer_droit_auteur?></p>
    </footer>
     <?php wp_footer(); ?>
</body>
</html> 