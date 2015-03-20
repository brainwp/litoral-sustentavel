<?php
/*
Template name: Municipios
 */

get_header(); ?>
<?php get_template_part('parts/comp-header'); ?>

		<div class="">
			<div id=""  role="main">

		<div id="resumo">	
					<?php

					get_template_part( 'loop', 'page' );
					?>
        </div><!-- #resumo -->
			
		<div id="primeira-linha">		
		 <!-- Inicio Loop -->
        <?php
		$args = array( 'post_type' => 'page', 'posts_per_page' => 13, 'orderby' => 'menu_order', 'order'=> 'ASC', 'post__in' => array (573,791,577,789,773,785,782,779,579,776,581,770,575));
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();        
        $slug_do_post = basename(get_permalink());
        $slug_home = get_bloginfo ( 'home' );?> 
		<div class="cada-municipio col-md-4">
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <div id="thumb-municipio">
        <a href="<?php the_permalink() ?>" rel="bookmark">
		<?php if ( has_post_thumbnail()) the_post_thumbnail('thumb-municipios'); ?>
        </a>
        </div>
        <?php echo excerpt( 25 ); ?>
        <div id="icones-municipios">
        <div id="cada-icone">
		<a href="<?php echo $slug_home . '/category/noticias/de-' . $slug_do_post; ?>" class="icone-noticia"><span class="icone-txt">Noticias</span></a>
		</div>
		 <div id="cada-icone">
		<a href="<?php echo $slug_home . '/cat_agenda/' . $slug_do_post; ?>" class="icone-agenda"><span class="icone-txt">Agenda</span></a>
		</div>
		 <div id="cada-icone">
		<a href="<?php echo $slug_home . '/municipios/' . $slug_do_post; ?>" class="icone-diagnostico"><span class="icone-txt-diagnostico">Diagnostico</span></a>
		</div>
		 <div id="cada-icone">
		<a href="<?php echo $slug_home . '/mapas/mapa-de-' . $slug_do_post; ?>" class="icone-mapa"><span class="icone-txt-mapa">Mapa</span></a>
		</div>

        </div>
        </div><!-- #cada-municipio -->

		<?php endwhile;	?>

	    <!-- Fim Loop -->
        </div><!-- #primeira-linha -->

			</div><!-- #content -->
		</div><!-- #container -->



		<div class="clearfix"></div>
		

		<?php get_footer('cat'); ?>
