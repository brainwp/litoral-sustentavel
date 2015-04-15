<?php
/* content noticias */
?>
<article class="col-md-4 content-noticias">
	<?php the_post_thumbnail('thumb-noticias'); ?>
	<?php $category = get_the_category(); ?>
	<a class="permalink" href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
	<a href="<?php echo get_category_link($category[0]->term_id);?>" class="category">
		<h3><?php echo $category[0]->cat_name; ?></h3>
	</a>
	<div class="content"><?php the_excerpt();?></div><!-- .content -->
	<a href="<?php the_permalink();?>" class="bt-readmore">
		<?php _e('Leia Mais','litoral-sustentavel');?>
	</a>
</article><!-- .col-md-4 content-noticias -->