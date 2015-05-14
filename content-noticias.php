<?php
/* content noticias */
?>
<article class="col-md-4 content-noticias">
<<<<<<< HEAD
	<?php the_post_thumbnail('thumb-noticias'); ?>
=======
	<?php 
		if ( has_post_thumbnail()) :	
			the_post_thumbnail('thumb-noticias');
		 else : ?>
	            <div class="thumb-noticias default">
	                <a href="<?php the_permalink() ?>" rel="bookmark">
	                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/default-thumb.jpg" alt="<?php the_title(); ?>">
	                </a>
	            </div>
        	<?php endif; ?>
>>>>>>> 7a83384b58480e4d9c367100c8f1e1789d5608ac
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