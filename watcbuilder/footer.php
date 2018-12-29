<?php

/**
 * DESCRIPCION DEL ARCHIVO:
 * Footer.php es utilizado para crear un parcial del footer de la pagina
 * Con la intencion de poder mostrarlo en todas las paginas a modo de "REUSABILIDAD" 
 * Usando la funcion de "php get_footer" para llamar todo el siguiente codigo
 * 
 *
 * @link https://wearetoocrazy.com
 *
 * @package Watc-builder
 * 
 * @since Watc-components 1.0
 */

wp_footer();?>

<!-- Footer -->
<footer id="site-footer">
    <div class="container">
       <span class="site-tittle">
            <a href="<?php echo esc_url( home_url ('/')); ?>" rel="home">
                <?php bloginfo('name'); ?>
            </a>
        </span>
            <a href="<?php echo esc_url(__( 'https://wearetoocrazy.com', 'watcbuilder' ) ); ?>">
                <?php printf( __( 'Por %s', 'watcbuilder'), 'Wearetoocrazy.com' ); ?>
            </a>
    </div>
</footer>
<!-- Footer -->
</body>
</html>