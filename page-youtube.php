<?php
/**
 * Template Name: Youtube
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<?php get_template_part('parts/comp-header'); ?>

		<div class="">
			<div id="content-page" class="" role="main">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div id="linha3" class="linha">
				<div class="interno">
				</div><!--fecha interno-->
				</div><!-- fecha linha3-->
				<div class="limpa"></div>
				<div class="entry-content">
					<div id="youtube-video" class="col-md-12">
									<p style="text-align:center">
										<iframe width="560" height="315" frameborder="0" allowfullscreen></iframe>
									</p>
								</div><!-- #youtube-video.col-md-12 -->
								<div id="youtube-feed"></div><!-- #youtube-feed -->
								<div class="col-md-12 clear" style="height:1px"></div><!-- .col-md-12 clear -->
								<div class="col-md-12 text-center">
									<a href="#" id="youtube-feed-btn" class="btn btn-primary" data-loading="<?php _e('Carregando..','odin');?>">
										<?php _e('Carregar +','odin');?>
									</a>
								</div><!-- .col-md-12 text-center -->
				</div><!-- .entry-content -->
			</div><!-- #post-## -->
				
				
				
			</div><!-- #content-page -->
			<div class="col-md-1"></div>

		</div><!-- #container -->

<?php get_footer('cat'); ?>
