<?php
/* Query Noticias */
?>
<section id="query-noticias">
	<div class="container">
		<div class="row">
			<?php
			// WP_Query arguments
			$args = array (
				'post_type'       => 'brasa_slider_cpt',
				'meta_key'  => 'ordem',		
 				'orderby'   => 'meta_value_num',
				'order'      => 'ASC',

				'posts_per_page'  => 99999,
				'meta_query' => array(
					array(
						'key'     => 'slider-home',
						'value'   => 1,
					),
				),


				);
				
			// The Query
			$query = new WP_Query( $args );
			// The Loop
			if ( $query->have_posts() ):
				while ( $query->have_posts() ): $query->the_post();
					?>
					<div class="sliders-home row">
					<h2 class="title-section title-section-homequery">
						<?php $nome=get_the_title( );echo $nome;?>
					</h2>
					<?php 
					    echo do_shortcode('[brasa_slider name="'.$nome.'"]' );
			        ?>
					</div>
			        <?php
			    endwhile;
		    endif;
		    // Restore original Post Data
		    wp_reset_postdata();
			?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #query-noticias -->
