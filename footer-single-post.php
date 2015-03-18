<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
$options = get_option('footer_cfg');
?>

<div class="clearfix"></div>
</section>
<div id="fundo-content-bottom">
	<img id="fundo-content-bottom" src="<?php echo get_stylesheet_directory_uri();?>/imagens/fundo-content-bottom.png">
</div>
<section id="query-noticias">
	<div class="container">
		<div class="row">
			
	<?php /* Posts Relacionados */
	
	$orig_post = $post;
	global $post;
	$categories = get_the_category($post->ID);
	if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	$args=array(
	'category__in' => $category_ids,
	'post__not_in' => array($post->ID),
	'posts_per_page'=> 3, // Numero de posts relacionados para serem mostrados
	'caller_get_posts'=>1
	);
	$count=1;
	$my_query = new wp_query( $args );
	if( $my_query->have_posts() ) {
	echo '<div id="related_posts"><h2>Posts Relacionados</h2><ul>';
	while( $my_query->have_posts() ) {?>
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
		<?php if ($count%3==0){
		?>
			<div class="clearfix"></div>
			<?php
		}
		$count++;
	}
	echo '</ul></div>';
	}
	}
	$post = $orig_post;
	wp_reset_query(); ?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #query-noticias -->
	<div style="clear:both;"> </div>
	<footer id="footer" class="col-md-12">
		<div class="container">
			<div class="row">
				<div id="footer-widget-area" role="complementary" class="col-md-8">
					<h2 class="sitemap"><?php _e('Mapa do site','litoral-sustentavel'); ?></h2><!-- .sitemap -->
					<div class="coluna-sitemap first">
						<?php wp_nav_menu( array( 'theme_location' => 'sitemap-1' ) ); ?>
					</div>
					<div class="coluna-sitemap">
						<?php wp_nav_menu( array( 'theme_location' => 'sitemap-2' ) ); ?>
					</div>
					<div class="coluna-sitemap">
						<?php wp_nav_menu( array( 'theme_location' => 'sitemap-3' ) ); ?>
					</div>
					<div class="coluna-sitemap">
						<?php wp_nav_menu( array( 'theme_location' => 'sitemap-4' ) ); ?>
					</div>
					<div class="coluna-sitemap">				 
						<?php wp_nav_menu( array( 'theme_location' => 'sitemap-5' ) ); ?>
					</div>
				</div><!-- footer-widget-area -->
				<div class="col-md-4 pull-right apoio">
					<div class="logo-footer col-md-12">
						<h2 class="sitemap"><?php _e('Realização','litoral-sustentavel'); ?></h2><!-- .sitemap -->
						<?php $link = (!empty($options['footer_realizacao_link']))? $options['footer_realizacao_link'] : '#footer'; ?>
						<a href="<?php echo $link; ?>">
							<?php echo wp_get_attachment_image($options['footer_realizacao'],'full');?>
						</a>
					</div><!-- .col-md-12 -->
					<div class="col-md-9 pull-left">
						<h2 class="sitemap"><?php _e('Convênio','litoral-sustentavel'); ?></h2><!-- .sitemap -->
						<?php $link = (!empty($options['footer_convenio_link']))? $options['footer_convenio_link'] : '#footer'; ?>
						<a href="<?php echo $link; ?>">
							<?php echo wp_get_attachment_image($options['footer_convenio'],'full');?>
						</a>
					</div><!-- .col-md-10 -->
					<div class="col-md-3">
						<h2 class="sitemap"><?php _e('Apoio','litoral-sustentavel'); ?></h2><!-- .sitemap -->
						<?php $link = (!empty($options['footer_convenio_link']))? $options['footer_convenio_link'] : '#footer'; ?>
						<a href="<?php echo $link; ?>">
							<?php echo wp_get_attachment_image($options['footer_apoio'],'full');?>
						</a>
					</div><!-- .col-md-3 -->
				</div><!-- .col-md-4 pull-right apoio -->
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- fecha footer -->
	<footer id="creditos-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 padding">
					<div class="col-md-8">
						<h2 class="name"><?php echo $options['footer_name']; ?></h2><!-- .name -->
						<p><?php echo $options['footer_infos'];?></p>
						<p><?php echo $options['footer_tel']; ?></p>
					</div><!-- .col-md-8 -->
					<div class="col-md-4 pull-right copyright">
						<p><?php _e('Alguns direitos reservados','litoral-sustentavel'); ?></p>
						<img src="<?php echo get_stylesheet_directory_uri();?>/imagens/cc.jpg">
						<a href="http://brasa.art.br">
							<img src="<?php echo get_stylesheet_directory_uri();?>/imagens/brasa.jpg">
						</a>
					</div><!-- .copyright -->
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #creditos-footer -->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
