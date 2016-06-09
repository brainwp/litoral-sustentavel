<?php
/* Front Page Template file */
get_header();
$option_home = get_option('home_cfg');
?>

<?php 


	if ($option_home['modal_na_home'] != ""){?>
		<div id="fundo-modal" 
		id="fundo-modal"></div>
		<div id="reveal-modal-id" class="reveal-modal open" data-reveal="" >
			<?php echo $option_home['modal_na_home']?>
			<a style="position: absolute;
			  top: 30px;
			  right: 30px;
			  font-size: 25px;"class="close-reveal-modal">
				×
			</a>
		</div>
<?php }
?>
<div id="div_img_header">
// <?php
// 		// Check if this is a post or page, if it has a thumbnail, and if it's a big one
// 		if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
// 				has_post_thumbnail( $post->ID ) &&
// 				( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
// 				$image[1] >= HEADER_IMAGE_WIDTH ) :
// 			// Houston, we have a new header image!
// 			echo get_the_post_thumbnail( $post->ID );
// 		elseif ( get_header_image() ) : 
// 		$redimensionada = resize('946', '266', get_header_image() );
	    
// 		$mask = get_stylesheet_directory_uri().'/imagens/mask.png';
// 		$mask = imagecreatefrompng( $mask );
// 		// 
// 		// // Apply mask to source
// 		imagealphamask( $redimensionada, $mask );
// 		// // Output
// 		// header( "Content-type: image/png");
// 		imagepng( $redimensionada, get_stylesheet_directory() . '/imagens/temp.png' );?>
			<img id="img_header"  src="<?php echo get_stylesheet_directory_uri();?>/imagens/temp.png" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
		<?php
		 // endif; 
?>
</div> 
		
<div id="fundo">
	<div id="img-cabecalho" class="container">
		<a href="<?php get_site_url(); ?>">
			<img id="logo-home" src="<?php echo get_stylesheet_directory_uri();?>/imagens/logo.png">
		</a>
			
			
	</div>
	
	<div class="clearfix"></div>	
	<section id="slider-section">
    	<div class="container">
			<div class="row">
			
			</div>
		</div>
		<div class="container" id="container-slider">
			<div class="row">
				<div class="col-md-7">
					<h2 class="title-section">Destaques</h2>	
					<div id="slider" class="col-md-12">
						<img id="fundo-destaque" src="<?php echo get_stylesheet_directory_uri();?>/imagens/fundo-destaque.png">
						<?php 
							echo do_shortcode('[brasa_slider name="home"]');
						?>
					</div>
				
				
				</div>
				<div class="col-md-1"></div>
				<div id="widgets" class="col-md-4">
					<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php /* query noticias */ ?>
<div id="fundo-content-top">
	<img  src="<?php echo get_stylesheet_directory_uri();?>/imagens/fundo-content-top.png">
</div>
<?php 
	get_template_part('parts/sliders-home'); 
	// get_template_part('parts/query-noticias'); 
?>
<div id="fundo-content-bottom">
	<img id="fundo-content-bottom" src="<?php echo get_stylesheet_directory_uri();?>/imagens/fundo-content-bottom.png">
</div>

<?php get_footer();?>
