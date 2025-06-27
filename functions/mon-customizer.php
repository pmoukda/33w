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
$wp_customize->add_setting('hero_auteur', array(
    'default' => __('Bienvenue sur mon site', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
));
}

add_action('customize_register', 'theme_31w_customize_register');