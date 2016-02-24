<?php
/**
 * Single Ações
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header( 'camara' ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'parts/acoes-header' );?>
	<?php get_template_part( 'parts/content-acoes' );?>
	<?php get_template_part( 'parts/acoes-footer' );?>
<?php endwhile;?>
<?php get_footer( 'simples' ); ?>
