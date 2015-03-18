<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header('single-post'); ?>
<div class="col-md-1"></div>
<div id="thumb-single" class="col-md-10">
	<?php echo get_the_post_thumbnail( $post->ID, 'thumb-single', $attr ); ?> 
</div>
<div class="clearfix"></div>
	
<div class="col-md-1"></div>

		<div id="" class="col-md-7">
			<div id="content" class="single">

			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single-post' );
			?>
							
			</div><!-- #content -->
			
		</div><!-- #container -->

<?php get_sidebar('single-post'); ?>
<?php get_footer('single-post'); ?>
