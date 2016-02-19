<?php
/* Equipe contato */
global $post;
?>
<?php $page = get_page_by_path( $post->post_name . '/fale-conosco' );?>
<?php if ( $page && is_object( $page ) ) : ?>
<section class="col-md-12 equipe-contato">
	<div class="container">
		<div class="row">
			<h3 class="the-title"><?php echo apply_filters( 'the_title', $page->post_title );?></h3><!-- .the-title -->
			<div class="the-content">
				<?php echo apply_filters( 'the_content', $page->post_content );?>
			</div><!-- .the-content -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .col-md-12 equipe-conteudo -->
<?php endif;?>