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


    ////////////////////// Description
    // configuration du champ
    $wp_customize->add_setting('hero_description', array(
        'default' => __('Bienvenue sur mon site', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    //  configuration du contrôleur
    $wp_customize->add_control('hero_description', array(
        'label' => __('Description', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    
    
    /////////////////////////// Adresse 
    // configuration du champ
    $wp_customize->add_setting('hero_adresse', array(
        'default' => __('233, rue Sherbrook, Montréal, Qc', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    //  configuration du contrôleur
    $wp_customize->add_control('hero_adresse', array(
        'label' => __('Adresse', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
////////////////////////////// Nombres images
    /*créer le champ */
     $wp_customize->add_setting('nombre_images_carrousel', array(
        'default' => __(3, 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    //  configuration du contrôleur
    $wp_customize->add_control('nombre_images_carrousel', array(
        'label' => __('nombre images', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 5,
        ),
    ));
   
    
   // Boucle pour traverser le nombre d'images 
  $max_slides = 10;

    for ($i = 0; $i < $max_slides; $i++) {
        $setting_id = "hero_background_$i";

        $wp_customize->add_setting($setting_id, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting_id, array(
            'label'    => __("Image arrière-plan #$i", 'theme_31w'),
            'section'  => 'hero_section',
            'settings' => $setting_id,
        )));
    }

    
    ///////////////////////// Couleur du texte dans section hero
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

    


    ////////////////////////////// Ajout du panneau du pied de page ////////////////////////////////////////////////////////////////////////
    /* créer le contrôleur*/
    $wp_customize->add_section('footer_section', array(
        'title' => __(' Section pied de page ', 'theme_31w'),
        'priority' => 30,
    ));

    ///////image dans le piedpage
    $wp_customize->add_setting('footer_background_0', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_background_0', array(
        'label' => __('Footer Background Image', 'theme_31w'),
        'section' => 'footer_section',
    )));


    ////////////////////////////// Adresse
    /*créer le champ */
     $wp_customize->add_setting('footer_adresse', array(
        'default' => __('233, rue Sherbrook, Montréal, Qc', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    //  configuration du contrôleur
    $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));


    ////////////////////////////// Téléphone
    /*créer le champ */
  $wp_customize->add_setting('footer_telephone', array(
        'default' => __('514-573-2356', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    //  configuration du contrôleur
    $wp_customize->add_control('footer_telephone', array(
        'label' => __('Téléphone', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));


    ///////////////////// Courriel
  $wp_customize->add_setting('footer_courriel', array(
        'default' => __('paradis@voyage.com', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    //  configuration du contrôleur
    $wp_customize->add_control('footer_courriel', array(
        'label' => __('Courriel', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    ///////////////////// droit Auteur
  $wp_customize->add_setting('footer_droit_auteur', array(
        'default' => __('Moukda Phaengvixay &copy 2025. Tous droits réservés', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    //  configuration du contrôleur
    $wp_customize->add_control('footer_droit_auteur', array(
        'label' => __('Droit auteur', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));




     ////////////////////////////// Ajout du panneau dans single page
    /* créer le contrôleur*/
    $wp_customize->add_section('categorie_section', array(
        'title' => __(' Section categorie', 'theme_31w'),
        'priority' => 30,
    ));


    ////////////////////////////// Auteur
    /*créer le champ */
     $wp_customize->add_setting('categorie_auteur', array(
        'default' => __('Moukda Phaengvixay', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    //  configuration du contrôleur
    $wp_customize->add_control('categorie_auteur', array(
        'label' => __('Auteur', 'theme_31w'),
        'section' => 'categorie_section',
        'type' => 'text',
    ));

    ////////////////////////////// date
    /*créer le champ */
     $wp_customize->add_setting('categorie_date', array(
        'default' => __('2025-08-21', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    //  configuration du contrôleur
    $wp_customize->add_control('categorie_date', array(
        'label' => __('Date', 'theme_31w'),
        'section' => 'categorie_section',
        'type' => 'date',
    ));


}

add_action('customize_register', 'theme_31w_customize_register');
