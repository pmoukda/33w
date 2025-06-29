<?php
/**
 * Le modèle footer.php permet d'afficher le pied de page
 * 
 */
?>
 <footer class="piedpage">
    <nav class="piedpage__nav">
     <?php get_template_part("gabarit/piedpage-nav"); ?>
    </nav>
    <div class="piedpage__recherche">
      <?php get_search_form();?>
    </div>
    <div class="piedpage__contact">
      <?php get_template_part("gabarit/piedpage-contact"); ?>
    </div>
      <p class="piedpage__droit-auteur"> Moukda Phaengvixay &copy 2025. Tous droits réservés</p>
    </footer>
    <script src="script/checkbox.js"></script>
     <?php wp_footer(); ?>
</body>
</html> 