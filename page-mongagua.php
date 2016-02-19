<?php
/*
Template name: Mongagua
 */

get_header(); ?>
<?php get_template_part('parts/comp-header'); ?>

		<div id="container">
		
			<div id="primeira-linha">
				
					<div id="noticias-municipios-query">
				<h1 class="query-destaques"><?php the_title(); ?></h1>
				<?php // The loop ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
				<?php

				?>
				
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<?php the_content(); ?>
												</div><!-- .entry-content -->
						<div class="entry-utility">
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-utility -->
					</div><!-- #post-## -->
				<?php endwhile; // end of the loop. ?>
			
			</div>
			
			<div id="query-post">
		 <?php $attachment_page = get_attachment_link($id); ?> 				<h1 class="title-query"><span class="query-destaques">Fotos</span></h1> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

			 $args = array(
			   'post_type' => 'attachment',
			   'numberposts' => 3,
			   'post_status' => null,
			   'post_parent' => $post->ID,
			   'orderby' => 'menu_order'
			  );

			  $attachments = get_posts( $args );
				 if ( $attachments ) {
					foreach ( $attachments as $attachment ) {
					  $attachment_page = get_attachment_link( $attachment->ID );
						echo '<div class="imagens-post">';
						echo wp_get_attachment_link( $attachment->ID, 'thumb-municipios', $attachment_page, false, false );
						echo '</div>';
					  }
				 }

			 endwhile; endif; ?>


			</div>
				
			</div><!-- #primeira-linha -->

			<div id="segunda-linha">			
					<div id="noticias-municipios-query">
					<a class="query-noticias" href="<?php echo home_url( '/category/noticias/de-mongagua' ); ?>"><h1 class="title-query-link">Not&iacute;cias</h1></a>
					<?php
					//Adiciona o query de Noticias de caraguatatuba
					 get_template_part('loop-mongagua');
					?>
					</div>
					
			<div id="query-links">
					<?php wp_list_bookmarks( 					
					$args = array(
					'orderby'          => 'name',
					'limit'            => -1,
					'category_name'    => 'mongagua',
					'hide_invisible'   => 1,
					'show_updated'     => 0,
					'echo'             => 1,
					'categorize'       => 0,
					'title_li'         => 'Links',
					'title_before'     => '<h1 class="title-query-bookmarks">',
					'title_after'      => '</h1><div class="entry-meta-bookmarks">Indica&ccedil;&otilde;es de a&ccedil;&otilde;es e projetos interessantes para o munic&iacute;pio e regi&atilde;o</div>',
					'class'            => 'linkcat',
					)); ?>
					</div>
					
				</div><!-- #segunda-linha -->

		</div><!-- #container -->
		<?php get_footer('cat'); ?>

