<?php
	 $qtd_destaques = (get_option('mo_qtd_destaques'));
if ( query_posts( array ( 'category_name' => 'destaques-fixos', 'posts_per_page' => $qtd_destaques )) ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h1 class="entry-title-query"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

				<div class="entry-content">
						<?php echo excerpt( 19 ); //Imprime 19 palavras ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" class="leia-mais"><span class="mais">+</span></a>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
				
				</div><!-- .entry-content -->
				
				<div class="entry-utility">
						<?php edit_post_link( __('Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-utility -->
				
		</div><!-- #post-## -->
<div id="quebra-de-clipping"></div>

<?php endwhile; // end of the loop. ?>
