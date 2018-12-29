<?php

/**
 * DESCRIPCION DEL ARCHIVO:
 * hook para el funcionamiento de los estilos
 * Asegurarse de cargar primero los de bootstrap y luego los propios
 * Usando la funcion de "php get_header" para llamar todo el siguiente codigo
 * 
 *
 * @link https://wearetoocrazy.com
 *
 * @package Watc-builder
 * 
 * @since Watc-components 1.0
 */

function enqueue_customtheme_styles() {
    wp_enqueue_script('bootstrap-js','//stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_style('bootstrap','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('customtheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','enqueue_customtheme_styles');

// FUNCION PARA NAVBAR DINAMICO
function customtheme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'customtheme')
    ));

    // AGREGA SOPORTE DINAMICO PARA EL TITULO DEL SITIO
    add_theme_support( 'tittle-tag');
}
add_action( 'after_setup_theme', 'customtheme_setup');

// Agrega los widgets de sidebar en la pagina
// Abilita el menu widgets en apariencia dentro del administrador
function customtheme_widgets() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'customtheme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in the sidebar', 'customtheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title>',
        'after_title'   => '</h2>'

    ));
}
add_action( 'widgets_init', 'customtheme_widgets');

// **Shortcode para columnas de 3** Usar [one_third]Parrafo 1[/one_third] en el editor de pagina para dividir pagina en 3 columnas
// Necesita revision o actualizar codigo, Buscar forma actual de hacer esto
function custom_shortcode( $atts , $content = null ) 
    {
        return '<div class="col-sm-4">' . $content . '</div>';
    }
add_shortcode( 'one_third', 'custom_sortcode')
?>

