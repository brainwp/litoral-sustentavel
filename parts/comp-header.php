<div id="div_img_header">
<?php
		// Check if this is a post or page, if it has a thumbnail, and if it's a big one
		if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
				has_post_thumbnail( $post->ID ) &&
				( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
				$image[1] >= HEADER_IMAGE_WIDTH ) :
			// Houston, we have a new header image!
			echo get_the_post_thumbnail( $post->ID );
			elseif ( get_header_image() ) : 
			$redimensionada = resize('946', '266', get_header_image() );
			$mask = get_stylesheet_directory_uri().'/imagens/mask.png';
			$mask = imagecreatefrompng( $mask );
			// 
			// // Apply mask to source
			imagealphamask( $redimensionada, $mask );
			// // Output
			// header( "Content-type: image/png");
			imagepng( $redimensionada, get_stylesheet_directory() . '/imagens/temp.png' );?>
				<img id="img_header"  src="<?php echo get_stylesheet_directory_uri();?>/imagens/temp.png" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
			<?php endif;
?>
</div>
		
<div id="fundo">
	<div id="img-cabecalho" class="container">
		<a href="<?php echo get_site_url(); ?>">
			<img id="logo-home" src="<?php echo get_stylesheet_directory_uri();?>/imagens/logo.png">
		</a>
			
			
	</div>
	<?php 
		$page_data = get_page_by_title( 'O que é o projeto' );
		$the_excerpt = $page_data->post_excerpt;
	?>
	<div class="clearfix"></div>
	
</div>
<div id="fundo-content-top">
	<img  src="<?php echo get_stylesheet_directory_uri();?>/imagens/fundo-content-top.png">
</div>
<section id="query-categories">
	<div class="container">
		<div class="col-md-1"></div>
		<div class="col-md-10">
