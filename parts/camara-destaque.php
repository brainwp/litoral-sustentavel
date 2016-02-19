<?php
/* Camara Destaques */
$page = get_page_by_path( $post->post_name . '/destaque' );
if ( $page && is_object( $page ) ) :
?>
<div class="col-md-12 camara-destaque">
	<div class="container">
		<div class="row">
			<div class="col-md-5 image">
				<?php echo get_the_post_thumbnail( $page->ID, 'large' );?>
			</div><!-- .image -->
			<div class="col-md-7 pull-right content">
				<h1 class="the-title">
					<?php echo apply_filters( 'the_title', $page->post_title );?>
				</h1><!-- .the-title -->
				<div class="the-content">
					<?php echo apply_filters( 'the_content', $page->post_content ); ?>
 				</div><!-- .the-content -->
			</div><!-- .col-md-8 pull-right content -->
			<?php if ( $field = get_post_meta( get_the_ID(), 'link-readmore', true ) ) : ?>
			<div class="col-md-12 text-center">
				<a href="<?php echo esc_url( $field ); ?>" class="btn btn-readmore-destaques">
					<?php _e( 'Veja Mais >>', 'litoralsustentavel' );?>
				</a>
			</div><!-- .col-md-12 text-center -->
			<?php endif;?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .col-md-12 camara-destaque -->
<?php endif;?>