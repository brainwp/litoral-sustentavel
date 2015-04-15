<?php
/* Query Noticias */
$page = isset($_GET['query_noticias']) ? $_GET['query_noticias'] : 1;
?>
<section id="query-noticias">
	<div class="container">
		<div class="row">
			<h2 class="title-section title-section-homequery">
				<?php _e('Notícias','litoral-sustentavel'); ?>
			</h2>
			
			
			<?php
			// WP_Query arguments
			$args = array (
				'post_type'              => 'post',
				'posts_per_page'         => 6,
				'cat'                    => '-59,-86,-88,-89,-58,-9,-8,-56,-62,-10,-63,-95',
				'paged'                  => $page,
				'post_status'            => 'publish',
			);
				$count=1;
			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ):
				while ( $query->have_posts() ): $query->the_post();
			        get_template_part('content','noticias');
					if ($count%3==0){
					?>
						<div class="clearfix"></div>
						<?php
					}
					$count++;
			    endwhile;
		    endif;

		    // Restore original Post Data
		    wp_reset_postdata();
			?>
			<div id="pagination-noticias" class="">
				<?php echo paginate_links(
				array(
					'total' => $query->max_num_pages,
					'format' => '?query_noticias=%#%#goto-query-noticias',
					'prev_text' => '<',
					'next_text' => '>',
					'current'   => $page,
					'mid_size'  => 1,
					)
				); ?>
			</div><!-- .col-md-8 col-md-offset-2 -->

		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #query-noticias -->