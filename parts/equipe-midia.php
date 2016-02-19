<?php
/* Equipe midia */
global $post;
?>
<section class="col-md-12 equipe-midia">
	<div class="container">
		<div class="row">
			<?php $page = get_page_by_path( $post->post_name . '/video' );?>
			<?php if ( $page && is_object( $page ) ) : ?>
				<div class="equipe-video">
					<?php echo apply_filters( 'the_content', $page->post_content );?>
				</div><!-- .equipe-video -->
			<?php endif;?>
			<?php $page = get_page_by_path( $post->post_name . '/galeria' );?>
			<?php if ( $page && is_object( $page ) ) : ?>
				<h2 class="the-title"><?php echo apply_filters( 'the_title', $page->post_title );?></h2><!-- .the-title -->
				<?php echo apply_filters( 'the_content', $page->post_content );?>
			<?php endif;?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .col-md-12 equipe-conteudo -->