<?php 
/**
 * le modèle front-page permet d'afficher la page d'accueil
 */

?>

<?php get_header(); ?>
<h1>Pour déboggage seulement  ------------ Front-page.php --------------</h1>
  <section class="hero">
      <div class="hero__contenu">
          <h1 class="hero__titre">Club de voyage</h1>
          <p class="hero__description">Envie de dépaysement, d’aventure ou simplement de faire une pause loin du quotidien ?
            Chez <strong>Paradise</strong>, nous imaginons pour vous des voyages sur mesure, authentiques et inoubliables. Que ce soit pour un week-end en Europe, un safari en Afrique ou une escapade en amoureux sous les tropiques, notre équipe est à votre écoute pour créer le séjour qui vous ressemble.
          </p>
          <q class="hero__slogan">Des destinations de rêve, des souvenirs pour la vie.</q>
          <div class="hero__bouton">Découvrir nos destinations</div>
      </div>
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
  <section class="galerie">
      <h2 class="galerie__titre">Galerie</h2>
      <div class="galerie__images">
        <img src="images/borabora.jpg" alt="bora bora">
        <img src="images/hawai.jpg" alt="hawai">
        <img src="images/maldives.jpg" alt="maldives">
        <img src="images/bahamas.jpg" alt="bahamas">
        <img src="images/italie.jpg" alt="italie">
        <img src="images/canada.jpg" alt="canada">
        <img src="images/grece.jpg" alt="grece">
        <img src="images/thailande.jpg" alt="thailande">
        <img src="images/mexique.jpg" alt="mexique">
        <img src="images/san-fransisco.jpg" alt="san fransisco">
      </div>
  </section>
  <section class="populaire">
    <div class=" conteneur global">
    <?php 
      if(have_posts())
      {
        while(have_posts())
        {
          // affiche image "mise en avant" miniature
          the_post(); 
    ?>
      <?php // cette fonction permet d'afficher l'ensemble du contenu du post (article ou page) 
          if(in_category('galerie'))
          {
           get_template_part("gabarit/galerie");
          }
          else
          {
            get_template_part("gabarit/carte"); 
          }
      ?>
      <?php 
        } 
    
      } 
      ?>
    </div>
  </section>
  
<?php get_footer(); ?>