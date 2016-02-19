<?php
/* Each agenda post */
?>
<article class="col-md-3 each-agenda-post animated bounceIn">
	<?php $style = '';?>
	<?php if ( $terms = get_the_terms( get_the_ID(), 'temas' ) ) : ?>
		<?php if ( $color = get_field( 'color', $terms[0] ) ) : ?>
			<?php $style = sprintf( 'border-left:7px solid %s;', $color );?>
		<?php endif;?>
	<?php endif;?>
	<a href="<?php the_permalink();?>" style="<?php echo esc_attr( $style );?>">
		<div class="the-thumb">
			<?php the_post_thumbnail( 'medium' );?>
		</div><!-- .the-thumb -->
		<div class="post-infos">
			<h3 class="the-title">
				<?php the_title();?>
			</h3><!-- .the-title -->
			<?php if ( $terms = get_the_terms( get_the_ID(), 'eixos' ) ) : ?>
				<?php if ( $icon = get_field( 'thumbnail', $terms[0] ) ) : ?>
					<img src="<?php echo $icon['sizes']['thumbnail'];?>" alt="<?php echo esc_attr( $terms[0]->name );?>" />
				<?php endif;?>
			<?php endif;?>
		</div><!-- .post-infos -->
		<div class="col-md-12 tax-info">
			<?php if ( $terms = get_the_terms( get_the_ID(), 'eixos' ) ) : ?>
				<?php echo apply_filters( 'the_title', $terms[0]->name );?>
			<?php endif;?>
			<?php if ( $terms = get_the_terms( get_the_ID(), 'temas' ) ) : ?>
				• <?php echo apply_filters( 'the_title', $terms[0]->name );?>
			<?php endif;?>
		</div><!-- .col-md-12 tax-info -->
	</a>
</article><!-- .col-md-3 each-agenda-post -->