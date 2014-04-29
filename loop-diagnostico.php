<?php

if ( query_posts( array ( 'category_name' => 'diagnostico', 'posts_per_page' => 3)) ) while ( have_posts() ) : the_post(); ?>
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

<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php /*global $wp_query;  
		$total_pages = $wp_query->max_num_pages;  
		if ($total_pages > 1){  
		  $current_page = max(1, get_query_var('paged'));  
		  echo '<div class="page_nav">';  
		  echo paginate_links(array(  
			  'base' => get_pagenum_link(1) . '%_%',  
			  'format' => '/page/%#%',  
			  'current' => $current_page,  
			  'total' => $total_pages,  
			  'prev_text' => '<< Anteriores',  
			  'next_text' => 'Pr&oacute;ximos >>'  
			));  
		  echo '</div>';  
		} 
		*/?>
