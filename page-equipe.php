<?php
/**
 * Template Name: Equipe de Monitoramento
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header( 'equipe' ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'parts/equipe-destaques' );?>
	<?php get_template_part( 'parts/equipe-conteudo' );?>
<?php endwhile;?>
<?php get_footer( 'simples' ); ?>
