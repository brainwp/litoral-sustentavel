<?php
/* Query Noticias */
?>
<section id="query-noticias">
	<div class="container">
		<div class="row">
			<h2 class="title-section"><?php _e('Notícias','litoral-sustentavel'); ?></h2>
			<?php
			// WP_Query arguments
			$args = array (
				'post_type'              => 'post',
				'posts_per_page'         => 6,
				);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ):
				while ( $query->have_posts() ): $query->the_post();
			        get_template_part('content','noticias');
			    endwhile;
		    endif;

		    // Restore original Post Data
		    wp_reset_postdata();
			?>
			<div id="pagination-noticias" class="col-md-6 col-md-offset-4">
				<?php echo paginate_links(
				array(
					'total' => $query->max_num_pages,
					'prev_text' => '<',
					'next_text' => '>',
					)
				); ?>
			</div><!-- .col-md-8 col-md-offset-2 -->

		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #query-noticias -->