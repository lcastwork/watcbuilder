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

?>

<!-- **POST COMO BEST PRACTICE** Muestra el id del post en la consola para target con css -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 
<!-- </POST COMO BEST PRACTICE> -->

<h1><?php the_title(); ?></h1>
<p><?php the_date(); ?></p>
<?php the_content(); ?>

<!-- **PAGINACION PARA POSTS** Muestra los numeros de las paginas para las publicaciones individuales -->
<?php 
wp_link_pages( array(
'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages: ', 'customtheme') . '</span>',
'after'       => '</div>',
'link_before' => '<span',
'link_after'  => '</span>',
'pagelink'    => '<span class="screen-reader-text">' . __( 'Page ', 'customtheme' ) . '</span>%',
'separator'   => '<span class="screen-reader-text">, </span>'
));
?>
<!-- </PAGINACION PARA POSTS> -->

</div>