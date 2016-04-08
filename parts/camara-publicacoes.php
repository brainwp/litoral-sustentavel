<?php
/* Camara Destaques */
if ( $field = get_post_meta( get_the_ID(), 'featured_cat', true ) ) :
?>
<div class="col-md-12 camara-publicacoes">
	<div class="container">
		<div class="row">
			<h3 class="the-title">
				<?php _e( 'Últimas Publicações', 'litoralsustentavel' );?>
			</h3><!-- .the-title -->
			<?php $args = array(
			'post_type' => 'post',
			'posts_per_page' => 8,
			'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => $field,
					),
				),
			);?>
			<?php $query = new WP_Query( $args );?>
			<?php if ( $query->have_posts() ) while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php get_template_part( '/parts/content-publicacoes' );?>
			<?php endwhile;?>
			<div class="col-md-12 text-center">
				<a href="<?php echo get_category_link( $field );?>" class="readmore-archive">
					<?php _e( 'Ver todas publicações', 'litoralsustentavel' );?>
				</a>
			</div><!-- .col-md-12 text-center -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .col-md-12 camara-publicacoes -->
<?php endif;?>