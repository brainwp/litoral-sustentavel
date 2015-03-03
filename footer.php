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
?>
	</div><!-- #main -->
</div><!-- #wrapper -->
	<div style="clear:both;"> </div>
	<div id="footer" role="contentinfo">
		<div id="footer-cont"></div><!-- #footer-content -->
		<div id="rodape" class="container">
		<div id="colophon">
		
		<div id="footer-widget-area" role="complementary">
					<!-- ----------------- Mapa DO SITE ----------------- -->
					<div id="coluna-sitemap">
					<?php wp_nav_menu( array( 'theme_location' => 'sitemap-1' ) ); ?>
				  </div>
				  <div id="coluna-sitemap" class="ultima">
				 <?php wp_nav_menu( array( 'theme_location' => 'sitemap-2' ) ); ?>
				  </div>
				   <div id="coluna-sitemap">
				 <?php wp_nav_menu( array( 'theme_location' => 'sitemap-3' ) ); ?>
				  </div>
				   <div id="coluna-sitemap">
				 <?php wp_nav_menu( array( 'theme_location' => 'sitemap-4' ) ); ?>
				  </div>
				<div id="coluna-sitemap">				  
				 <?php wp_nav_menu( array( 'theme_location' => 'sitemap-5' ) ); ?>
				  </div>
		</div><!-- footer-widget-area -->

<?php // get_sidebar( 'footer' ); ?>

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->
			<div id="rodape-description">
				<p><?php echo stripslashes (get_option('mo_footer_end')); ?></p>
				<p><?php echo stripslashes (get_option('mo_footer_mail')); ?></p>
			</div>
			
		</div><!-- #colophon -->
		</div><!-- fecha rodape -->
	</div><!-- fecha footer -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
