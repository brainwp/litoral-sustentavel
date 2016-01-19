<?php
/**
 * Template Name: Triagem
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<?php get_template_part('parts/comp-header-simples'); ?>
	<div class="col-md-12 triagem-container">
		<div class="container">
			<div class="row">
				<h1 class="the-title"><?php the_title();?></h1><!-- .the-title -->
				<div class="col-md-12 separator-triagem"></div><!-- .col-md-12 separator-triagem -->
				<?php $args = array( 
						'post_parent' => get_the_ID(),
						'post_type' => 'page',
						'posts_per_page' => 2,
						'orderby' => 'menu_order',
						'order' => 'ASC'
					);
				?>
				<div class="col-md-12 triagem-each-container">
					<?php $query = new WP_Query( $args );?>
					<?php if ( $query->have_posts() ) : ?>
						<?php $i = 0;?>
						<?php while ( $query->have_posts() ) : ?>
							<?php $query->the_post();?>
							<?php $class = '';?>
							<?php if ( $i == 1 ) : ?>
								<?php $class = 'pull-right';?>
							<?php endif;?>
							<div class="col-md-6 each-triagem <?php echo $class;?>">
								<div class="col-md-12 the-thumb">
									<?php the_post_thumbnail( 'large' );?>
								</div><!-- .col-md-12 the-thumb -->
								<div class="col-md-12 regiao-title">
									<h3><?php the_title();?></h3>
								</div><!-- .col-md-12 regiao-title -->
								<?php $style = '';?>
								<?php if ( $color = get_post_meta( get_the_ID(), 'menu_color', true ) ) : ?>
									<?php $style = 'border-left-color:' . $color;?>
								<?php endif;?>
								<div class="col-md-12 each-triagem-menu" style="<?php echo $style;?>">
									<?php echo wp_nav_menu( array( 'menu' => get_the_title() ) );?>
								</div><!-- .col-md-12 each-triagem-menu -->
							</div><!-- .col-md-6 each-triagem -->
							<?php $i++;?>
						<?php endwhile; ?>
					<?php endif;?>
				</div><!-- .col-md-8 col-md-offset-2 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .col-md-12 triagem-container -->
	<div class="container"></div><!-- .container -->
<?php get_footer( 'simples' ); ?>
