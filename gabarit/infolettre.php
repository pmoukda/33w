<?php
/**
 * Template-part infolettre.php
 * affiche le formulaire de l'infolettre
 * 
 */
?>
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