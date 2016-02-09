<?php
/* Each publicações */
?>
<article class="col-md-3 each-publicacoes">
	<div class="col-md-12 image">
		<?php the_post_thumbnail( 'medium' );?>
	</div><!-- .col-md-12 image -->
	<div class="content">
		<h3 class="the-title-content"><?php the_title();?></h3><!-- .the-title -->
		<?php echo wp_trim_words( strip_shortcodes( get_the_content() ), 60, null ); ?>
	</div><!-- .col-md-12 content -->
	<a href="<?php the_permalink();?>" class="btn-readmore-publicacoes"><?php _e( 'Veja Mais', 'bt-readmore-equipe' );?> >></a>
</article><!-- .col-md-3 each-publicacoes -->