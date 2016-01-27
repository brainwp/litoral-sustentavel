<?php
/* Equipe destaques */
global $post;
$page = get_page_by_path( $post->post_name . '/destaques' );
?>
<section class="equipe-destaques col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 the-content">
				<?php echo apply_filters( 'the_content', $page->post_content );?>
			</div><!-- .col-md-12 the-content -->
			<?php $slider_name = $post->post_title . ' Destaques';?>
			<?php $slider = get_page_by_title( $slider_name, OBJECT, 'brasa_slider_cpt' );?>
			<?php if ( $slider && is_object( $slider ) ) : ?>
			<div class="equipe-slider">
				<?php $json = '{"dots": false,"infinite": true,"speed": 3000, "autoplay":true, "autoplaySpeed": 5000, "slidesToShow": 3}';?>
				<?php $json = esc_attr( $json );?>
				<?php echo do_shortcode( sprintf( '[brasa_slider name="%s" json="%s"]', $slider_name, $json ) );?>
			</div><!-- .col-md-12 equipe-slider -->
			<?php endif;?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .equipe-destaques col-md-12 -->