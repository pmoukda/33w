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
    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur?>" width="21" height="21">
    
    <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=<?= $couleur?>
" width="21" height="21">
    
    <img src="https://s2.svgbox.net/social.svg?ic=tiktok&color=<?= $couleur?>
" width="21" height="21">
    
    <a class="sociaux" href="https://github.com/pmoukda">
    <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur?>" width="21" height="21">
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
        top: 12px;
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
function vagues($couleur_haut){ ?>
<style>
    .style-vague{
        position: relative;
        top: 12px;
        background-color: <?= $couleur_haut?>;
    }
</style>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path 
            fill="<?= $couleur_haut ?>" 
            fill-opacity="1" d="M0,160L26.7,170.7C53.3,181,107,203,160,213.3C213.3,224,267,224,320,218.7C373.3,213,427,203,480,192C533.3,181,587,171,640,176C693.3,181,747,203,800,202.7C853.3,203,907,181,960,176C1013.3,171,1067,181,1120,192C1173.3,203,1227,213,1280,213.3C1333.3,213,1387,203,1413,197.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
        </path>
    </svg>
<?php 
}

function extraire_list_categories($nom_categorie)
{
    //$parent_category_id = get_term_by("slug", $nom_categorie, "category");
    $parent_category = get_category_by_slug($nom_categorie);
    $tableau = array(
        'parent' => $parent_category->term_id,
        'hide_empty' => true
    );
    $list_categories = get_categories($tableau);
    echo "<ul class='list_categories'>";
    foreach ($list_categories as $categorie) {

        echo "<li data-id='" . $categorie->term_id . "'>" . $categorie->name . "</li>";
    }
    echo "</ul>";
}

function filtre_categorie($nom){
   $list_categories = get_the_category();
    // print_r($list_categories);
     echo "<p class='conteneur__lien'>";
    foreach ($list_categories as $categorie) {
        if ($categorie->name != $nom && $categorie->name != "Destination")
        echo "<a href=" . home_url() . "/category/destination/" . $categorie->name . ">" . $categorie->name . "</a>";
    }
    echo "</p>";
    
}
?>