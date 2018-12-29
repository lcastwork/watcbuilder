<?php

/**
 * Template Name: Pagina Centrada
 * DESCRIPCION DEL ARCHIVO:
 * Page-slim.php es utilizado como template para contenido centrado 
 * Con la intencion de poder mostrar paginas sin contenido fullwidth
 * 
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
        <div class="col-md-6 offset-3">
            <?php if ( have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- </THE LOOP> -->

<!-- **OPTENER FOOTER** Funcion usada para llamar todo el footer de la pagina desde el archivo ""footer.php" --> 
<?php get_footer(); ?>
<!-- </OPTENER FOOTER> -->