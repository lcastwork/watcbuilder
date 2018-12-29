<?php

/**
 * Template Name: Home Page 
 * DESCRIPCION DEL ARCHIVO:
 * Page-home.php es utilizada para crear un home estatico en este ejemplo se copia el codigo de page-slim.php
 * Con la intencion de poder mostrar una pagina de inicio estatica 
 * 
 *
 * @link https://wearetoocrazy.com
 *
 * @package Watc-builder
 * 
 * @since Watc-components 1.0
 */

get_header(); ?>

<div class="jumbotron text-center">
    <div class="container">
        <h1>Bienvenidos a nuestro custom theme</h1>
    </div>
</div>

<!-- **THE LOOP** funcion principal de wordprees, maneja los post -->
<div class="container">
    <div class="row">
        <?php if ( have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!-- <h1 class="text-center"><?php the_title(); ?></h1> MOSTRAR TITULOS EN LA PAGINA--> 
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<!-- </THE LOOP> -->

<!-- **OPTENER FOOTER** Funcion usada para llamar todo el footer de la pagina desde el archivo ""footer.php" --> 
<?php get_footer(); ?>
<!-- </OPTENER FOOTER> -->