<?php

/**
 * DESCRIPCION DEL ARCHIVO:
 * Header.php es utilizado para crear un parcial del header de la pagina
 * Con la intencion de poder mostrarlo en todas las paginas a modo de "REUSABILIDAD" 
 * Usando la funcion de "php get_header" para llamar todo el siguiente codigo
 * 
 *
 * @link https://wearetoocrazy.com
 *
 * @package Watc-builder
 * 
 * @since Watc-components 1.0
 */

?>

<!DOCTYPE html>
<!-- **HEAD COMO BEST PRACTICE** Modelo sugerido por wordpress.org como "best practice" -->
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>

<!-- **NOTA** Tambien puedes usar los estilos mediante CDN -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
</head>
<!-- </HEAD COMO BEST PRACTICE> -->

<!-- **BODY CLASS BEST PRACTICE** Añade identificadores a las paginas, ver en consola del navegador 
Usar identificadores para hacer target con css y modificar la visual de cada pagina por separado
mediante su identificador-->
<body <?php body_class(); ?> >
<!-- </BODY CLASS BEST PRACTICE> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo esc_url(home_url( '/') ); ?>"><?php bloginfo( 'name' )?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/home/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/about-us/">About Us <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/blog/">Blog <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/faq/">FAQ <span class="sr-only">(current)</span></a>
        </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Drop Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2 </a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
       
        <!-- MENU INTERACTIVO (NECESITA FIX) <?php 
        wp_nav_menu( array (
            'theme_location' => 'primary',
            'menu_class'     => 'primary-menu',
            'container'      => false,
            'items_wrap'     => '%3$s'
        ));
        ?> -->
        
   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



