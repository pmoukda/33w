<h2 class="conteneur__titre">Galerie</h2>
<div class=" conteneur global ">
<?php
// séparer la section gallerie du section populaire pour pouvoir ajouter un titre pour les destination
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
    ?>
    <?php 
  } 
} 
?>
</div> 

<h2 class="conteneur__titre">Destinations populaires</h2>
<div class=" conteneur global ">
<?php
if(have_posts())
{
  while(have_posts())
  {
    // affiche image "mise en avant" miniature
    the_post();
    ?>
    <?php // cette fonction permet d'afficher l'ensemble du contenu du post (article ou page) 
    if(in_category('populaire'))
    {
      get_template_part("gabarit/carte"); 
    }
    ?>
    <?php 
  } 
} 
?>
</div>
