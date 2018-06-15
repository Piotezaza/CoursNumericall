<?php
/**
 * Proper way to enqueue scripts and styles.
 */
function wpdocs_theme_name_scripts() 
{
    // Inclure les styles du template 


    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed:400,700|Roboto+Slab:400,700' );
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/styles.css?v=' . uniqid() );
    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/*
    Configuration des options et des capacités du thème
*/ 
function marble_setup()
{
    /*
        Déclarer les menus du thème avec register_nav_menu()
        Plus tard dans le thème pour afficher les menus on utilisera wp_nav_menu()
    */
    register_nav_menus( array (
        'main_menu' => 'Menu principal',
        'footer_menu' => 'Menu du pied de page'
    ));


}
add_action( 'after_setup_theme', 'marble_setup');


/*
    Changer le rendu du texte [...] de l'excerpt (résumé de l'article)

    @param string $more le texte par défaut de l'excerpt "more"
    @return string une nouvelle chaîne HTML pour l'excerpt "more"
*/
function marble_excerpt($more)
{
    global $post;
    return '<p><a class="more-link" href="' . get_permalink($post->ID) . '">Lire la suite</a></p>';
}
add_filter( 'excerpt_more', 'marble_excerpt' );