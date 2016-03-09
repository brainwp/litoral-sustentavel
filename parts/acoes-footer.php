<?php
/* acoes-footer */
$query = false;
$term_name = false;
if ( $terms = get_the_terms( get_the_ID(), 'eixos' ) ) : 
	$term_name = apply_filters( 'the_title', $terms[0]->name );
	$args = array( 
		'post_type' => 'acoes',
		'posts_per_page' => 4,
		'tax_query' => array(
			array(
				'taxonomy' => 'eixos',
				'field'    => 'term_id',
				'terms'    => $terms[0]->term_id,
			),
		)	
	);
	$query = new WP_Query( $args );
endif;
?>
<?php if ( $term_name && $query->have_posts() ) : ?>
<section class="col-md-12 acoes-footer">
	<div class="container">
		<div class="row">
			<h2><?php printf( __( 'Outras Ações em %s', 'litoralsustentavel' ), $term_name );?></h2><!-- .the-title -->
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php get_template_part( 'parts/content-agenda-posts' );?>
			<?php endwhile;?>
			<?php wp_reset_postdata();?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .col-md-12 acoes-content -->
<?php endif;?>