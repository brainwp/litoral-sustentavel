	<?php
	 $qtd_noticias = (get_option('mo_qtd_noticias'));
			if ( query_posts( array ( 'cat' => '-59,-86,-88,-89,-58,-9,-8,-56,-62,-10,-63,-95','post_status' => 'publish', 'posts_per_page' => $qtd_noticias )) ) while ( have_posts() ) : the_post(); 
	?>
		<div id="query-post-duas-colunas">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-meta">
			<?php 
			$category = get_the_category(); 
			if($category[0]){
			echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
			}
			?>
			</div>
			<h1 class="entry-title-query"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
				<div class="entry-content">
						<?php echo excerpt( 20 ); //Imprime 15 palavras ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" class="leia-mais"><span class="mais">+</span></a>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
				
				</div><!-- .entry-content -->
				
				<div class="entry-utility">
						<?php edit_post_link( __('Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-utility -->
				
		</div><!-- #post-## -->
		</div><!-- #query-post -->

<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); // reset query ?>
