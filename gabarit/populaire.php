 <div class=" conteneur global">
      <h2 class="conteneur__titre">Galerie</h2>
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