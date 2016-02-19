<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header(); ?>
<?php get_template_part('parts/comp-header'); ?>

		<div class="">
				<div id="content-page" class="" role="main">
					<div id="post-0" class="post error404 not-found">
						<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
						<div class="entry-content">
							<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</div><!-- #post-0 -->

			</div><!-- #content-page -->
			<div class="col-md-1"></div>

		</div><!-- #container -->

<?php get_footer('cat'); ?>
