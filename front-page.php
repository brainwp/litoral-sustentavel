<?php
/* Front Page Template file */
get_header();
?>
<?php /* query noticias */ ?>

	<div id="img-cabecalho" class="container">
		<img style="background:url('<?php echo get_stylesheet_directory_uri();?>/imagens/mascara2.png') no-repeat 100%;" id="logo-home" src="<?php echo get_stylesheet_directory_uri();?>/imagens/logo.png">
		
			
			<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID );
					elseif ( get_header_image() ) : ?>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
					<?php endif; ?>
	</div>
	<?php 
		$page_data = get_page_by_title( 'O que é o projeto' );
		$the_excerpt = $page_data->post_excerpt;
	?>
	<div class="clearfix"></div>
<section id="slider-section">
    <div class="container">
		<div class="row">
			
		</div>
	</div>
	<div class="container" id="container-slider">
		<div class="row">
			<div class="col-md-8">
				<div id="oque-resumo" class="col-md-12">
					<?php echo $the_excerpt;?>
					<a href="http://rede.com.br/litoral/2015/03/09/post-de-teste/" class="bt-readmore">
						Leia Mais	
					</a>
				</div>
				<h2 class="title-section">Destaques</h2>	
				<div id="slider" class="col-md-12">
					<img id="fundo-destaque" src="<?php echo get_stylesheet_directory_uri();?>/imagens/fundo-destaque.png">
					<?php 
						echo do_shortcode('[brasa_slider name="home"]"');
					?>
				</div>
				
				
			</div>
			<div id="widgets" class="col-md-4">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</div>
		</div>
	</div>
	
</section>
<?php get_template_part('parts/query-noticias'); ?>
<?php get_footer();?>
