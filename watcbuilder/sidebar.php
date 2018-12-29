<?php

/**
 * DESCRIPCION DEL ARCHIVO:
 * Sidebar.php es utilizado para crear un parcial del area de widgets o sidebar de la pagina
 * Con la intencion de poder mostrarlo en todas las paginas a modo de "REUSABILIDAD" 
 * Usando la funcion de "php get_sidebar" para llamar todo el siguiente codigo
 * 
 *
 * @link https://wearetoocrazy.com
 *
 * @package Watc-builder
 * 
 * @since Watc-components 1.0
 */

?>

<?php if ( is_active_sidebar( 'sidebar-1')) : ?>
        <aside id="secondary" class="sidebar widget-area" role="complementary">
           <?php dynamic_sidebar( 'sidebar-1'); ?>
        </aside>
<?php endif; ?>