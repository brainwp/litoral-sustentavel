<?php
/* Template Name: Biblioteca */

get_header(); ?>
<?php get_template_part('parts/comp-header'); ?>

		<div id="container-home">		

					<div id="content" class="biblioteca">
					<h1 class="entry-title"><?php the_title(); ?></h1>						
				<?php // The loop ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<?php the_content(); ?>
												</div><!-- .entry-content -->
						<div class="entry-utility">
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-utility -->
					</div><!-- #post-## -->
				<?php endwhile; // end of the loop. ?>
				</div><!-- #content -->
				
				<div id="primeira-linha">
				<div id="query-post1">
				<h1 class="title-query"><span class="query-destaques">Mapas</span></h1>
					<?php show_post('mapas-resumo');  // Shows the content of "Mapas" page. ?>
				</div>				
					<div id="query-post">
					<h1 class="title-query"><span class="query-destaques">Banco de Leis</span></h1>
					<?php show_post('leis-resumo');  // Shows the content of "Banco de Leis" page. ?>
					</div>
					<div id="query-post">
					<a class="query-newsletter" href="<?php echo home_url( '/category/diagnostico' ); ?>"><h1 class="title-query-link">Diagn&oacute;sticos</h1></a>
					<?php
					//Adiciona o query de Newsletter
					 get_template_part( 'loop-diagnostico');
					?>
					</div>
					
			</div><!-- #primeira-linha -->
				
			<!-- <div id="flickr-linha">
				<div id="content" class="biblioteca">
						<h1 class="title-query"><span class="query-destaques">Fotos do Flickr</h1>
						<?php
						echo do_shortcode('[slickr-flickr type="gallery" size="original"]');
						?>
				</div>
			</div>#flickr-linha -->

		</div><!-- #content-home  -->

		<?php get_footer('cat'); ?>
