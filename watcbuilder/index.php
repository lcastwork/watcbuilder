<?php

/**
 * ARCHIVO PRINCIPAL DEL TEMA
 * get_header** Funcion usada para llamar todo el head de la pagina desde el archivo "header.php"
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @link https://wearetoocrazy.com
 *
 * @package Watc-builder
 * 
 * @since Watc-components 1.0
 */

get_header(); ?>

<!-- **THE LOOP** funcion principal de wordprees, maneja los post -->
<div class="container " id="margen-pagina">
        <div class="row">
            <div class="col-md-8">
            <?php if ( have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- **TITULO DE POST COMO BEST PRACTICE** Convierte los titulos a links hacia su misma publicacion en los posts -->
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() )), '</a></h2>'); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
                <div class="col-md-4">
<!-- **OPTENER SIDEBAR FUNCION** Funcion usada para llamar todo el sidebar de la pagina desde el archivo ""sidebar.php" -->
                   <p><?php get_sidebar(); ?></p> 
<!-- </SIDEBAR FUNCION> -->
                
            </div>
        </div>
</div>
<!-- </THE LOOP> -->

<!-- **OPTENER FOOTER** Funcion usada para llamar todo el footer de la pagina desde el archivo ""footer.php" --> 
<?php get_footer(); ?>
<!-- </OPTENER FOOTER> -->