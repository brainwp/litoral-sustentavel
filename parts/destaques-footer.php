<?php 
/* dois destaques no footer */
$options = get_option('footer_cfg' );
?>
<section id="destaques-footer">
	<div class="container">
		<div class="row">
			<div class="padding">
				<article class="col-md-6 ">
					<h2><?php echo $options['footer_destaque_1_title'];?></h2>
					<div class="content"><?php echo $options['footer_destaque_1_text']; ?></div><!-- .content -->
					<?php if($link = $options['footer_destaque_1_link']): ?>
					    <a href="<?php echo $link; ?>" class="bt-readmore">
					    	<?php _e('Leia Mais','litoral-sustentavel');?>
					    </a>
					<?php endif;?>
				</article><!-- .col-md-6 pull-left -->
				<article class="col-md-6 ">
					<h2><?php echo $options['footer_destaque_2_title'];?></h2>
					<div class="content"><?php echo $options['footer_destaque_2_text']; ?></div><!-- .content -->
					<?php if($link = $options['footer_destaque_2_link']): ?>
					    <a href="<?php echo $link; ?>" class="bt-readmore">
					    	<?php _e('Leia Mais','litoral-sustentavel');?>
					    </a>
					<?php endif;?>
				</article><!-- .col-md-6 pull-right -->
			</div><!-- .padding -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #destaques-footer -->