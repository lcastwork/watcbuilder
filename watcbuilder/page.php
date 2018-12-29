<?php

/**
 * DESCRIPCION DEL ARCHIVO:
 * Page.php es utilizado como template para las paginas creadas en el administrador de wordpress
 * Con la intencion de poder mostrar paginas de diferentes maneras 
 * Wordpress mostrara el index para todas las paginas si este archivo no existe
 * Al crear este archivo las paginas creadas se muestran en blanco si este archivo esta vacio ya que wordpress 
 * ...NO usara mas el index.php para mostrar las nuevas paginas
 * @link https://wearetoocrazy.com
 *
 * @package Watc-builder
 * 
 * @since Watc-components 1.0
 */

get_header(); ?>

<!-- **THE LOOP** funcion principal de wordprees, maneja los post -->
<div class="container" id="margen-pagina" >
    <?php if ( have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<!-- </THE LOOP> -->

<!-- **OPTENER FOOTER** Funcion usada para llamar todo el footer de la pagina desde el archivo ""footer.php" --> 
<?php get_footer(); ?>
<!-- </OPTENER FOOTER> -->