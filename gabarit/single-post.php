<?php
/**
 * Template-part single-post.php
 * Permet d'afficher les info dans la page single.php
 */

$categorie_auteur = get_theme_mod('categorie_auteur', 'Moukda Phaengvixay');
$categorie_date = get_theme_mod('categorie_date', date('Y-m-d'));

?>
<div class="populaire">
    <p class="hero__info">Auteur de l'article: <?= $categorie_auteur?></p>
    <p class="hero__info">Date: <?= $categorie_date?></p>
</div>
