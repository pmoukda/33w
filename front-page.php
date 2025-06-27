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
</section>
    <section class="infolettre">
    <h2 class="infolettre__titre">Abonnez-vous à notre infolettre pour recevoir des exclusivités!</h2>
    <form action="" class="infolettre__formulaire">
      <fieldset class="infolettre__fieldset">
        <legend class="infolettre__legend">Nom</legend>
        <label for="Nom">
        <input class="infolettre__input" type="text" id="nom" name="nom" placeholder="Votre nom">
        </label>
        </fieldset>
      <fieldset class="infolettre__fieldset">
        <legend class="infolettre__legend">Prénom</legend>
          <label for="prenom">
          <input class="infolettre__input" type="text" id="prenom" name="prenom" placeholder="Votre prénom">
          </label>
      </fieldset>
      <fieldset class="infolettre__fieldset">
        <legend class="infolettre__legend">Courriel</legend>
        <label for="courriel">
        <input class="infolettre__input" type="text" id="courriel" name="courriel" placeholder="Votre courriel">
        </label>
      </fieldset>
      <fieldset class="infolettre__fieldset">
        <legend class="infolettre__legend">Téléphone</legend>
        <label for="telephone">
        <input class="infolettre__input" type="text" id="telephone" name="telephone" placeholder="Votre téléphone">
        </label>
      </fieldset>
      <input class="infolettre__bouton hero__bouton" type="submit" value="S'inscrire">
    </form>
  </section>

  <!-- section populaire -->
  <section class="populaire"> 
    <?php get_template_part("gabarit/populaire"); ?>
  </section>
<?php get_footer(); ?>