<?php
/**
 * configuration des nouveaux panneaux du customizer
 */

function theme_31w_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('hero_section', array(
    'title' => __(' Section Héro - Accueil ', 'theme_31w'),
    'priority' => 30,
));
// configuration du champ
$wp_customize->add_setting('hero_auteur', array(
    'default' => __('Bienvenue sur mon site', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
));
//  configuration du contrôleur
$wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
));

/////////////////////////// Adresse 
// configuration du champ
$wp_customize->add_setting('hero_adresse', array(
    'default' => __('233, rue Sherbrook', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
));
//  configuration du contrôleur
$wp_customize->add_control('hero_adresse', array(
    'label' => __('Adresse', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
));

///////////////////////// Image
/*créer le champ */
$wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Image héro en arrière-plan', 'theme_31w'),
    'section' => 'hero_section',
)));
///////////////////////// Couleur du texte dans section here
///////////////////////// champ couleur
/*créer le champ */
$wp_customize->add_setting('hero_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
    'label' => __('Couleur du texte', 'theme_31w'),
    'section' => 'hero_section',
)));

////////////////////////////// Ajout du panneau du pied de page
/* créer le contrôleur*/
$wp_customize->add_section('footer_section', array(
    'title' => __(' Section pied de page ', 'theme_31w'),
    'priority' => 30,
));
}

add_action('customize_register', 'theme_31w_customize_register');