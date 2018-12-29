<?php

/**
 * DESCRIPCION DEL ARCHIVO:
 * single.php Es utilizado para mostrar los contenidos individuales del post
 * Un ejemplo es cuando se entra a una publicacion, mostrara solo la publicacion como pagina
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
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
            
<!-- **OPTENER CONTENT-SINGLE** Funcion utilizada para llamar el contenido de content-single.php como best practice -->
                    <?php get_template_part('template-parts/content', 'single'); ?>
<!-- </OPTENER CONTENT-SINGLE> -->

<!-- **COMENTARIOS EN POSTS** Funcion utilizada para mostrar los comentarios en posts -->
                    <?php 
                        if ( comments_open() || get_comments_number() ) 
                        {
                            comments_template();
                        }
                    ?>
<!-- </COMENTARIOS EN POSTS> -->
                <?php endwhile; ?>
            <?php endif; ?>

<!-- **NAVEGACION DE POSTS** Funcion para mostrar la navegacion "next,previous" en las publicaciones -->
    <?php 
        if ( is_singular( 'post') ) {
        the_post_navigation( array(
            'next_text' => 'Next',
            'prev_text' => 'Previous'
            ));
        }
    ?>
<!-- </NAVEGACION DE POSTS> -->
    </div>

<!-- **OPTENER SIDEBAR FUNCION** Funcion usada para llamar todo el sidebar de la pagina desde el archivo ""sidebar.php" -->
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
<!-- </SIDEBAR FUNCION> -->
    
    </div>
 </div>
<!-- </THE LOOP> -->

<!-- **OPTENER FOOTER** Funcion usada para llamar todo el footer de la pagina desde el archivo ""footer.php" --> 
<?php get_footer(); ?>
<!-- </OPTENER FOOTER> -->