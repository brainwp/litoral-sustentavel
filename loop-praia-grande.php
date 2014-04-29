<?php if ( query_posts( array ( 'category_name' => 'de-praia-grande', 'posts_per_page' => 4)) ) while ( have_posts() ) : the_post(); ?>
	
		<div id="municipios-querypost" <?php post_class(); ?>>

			<h1 class="entry-title-query"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

				<div class="entry-content">
						<?php echo excerpt( 19 ); //Imprime 19 palavras ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" class="leia-mais"><span class="mais">+</span></a>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
				
				</div><!-- .entry-content -->
				
				<div class="entry-utility">
						<?php edit_post_link( __('Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-utility -->
				
		</div><!-- #municipios-querypost -->

<?php endwhile; // end of the loop. ?>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>

