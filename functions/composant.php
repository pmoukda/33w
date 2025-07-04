<?php
/**
* Gabarits sous forme de fonctions. Chacune peut être paramétré
*/

?>
<?php function icone_sociaux($couleur)
{
    // pour enlever le # de la position 0 , onextrait à partir de la position 1
    $couleur = substr($couleur,1)
    ?>
    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur?>" width="32" height="32">
    
    <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=<?= $couleur?>
" width="32" height="32">
    
    <img src="https://s2.svgbox.net/social.svg?ic=tiktok&color=<?= $couleur?>
" width="32" height="32">
    
    <a class="sociaux" href="https://github.com/pmoukda">
    <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur?>" width="32" height="32">
    </a> 
    <?php 
}

/**
* générateur de vague pour séparer deux sections
*/

function vague($couleur_haut, $couleur_bas){ ?>
<style>
    .style-vague{
        position: relative;
        top: 7px;
        background-color: <?= $couleur_haut?>;
    }
</style>
    <svg class="style-vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path 
            fill="<?= $couleur_bas ?>" 
            fill-opacity="1"
            d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
<?php 
}
?>