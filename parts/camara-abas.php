<?php
/* Camara Abas */
?>
<div class="col-md-12" id="camara-abas">
	<div class="container">
		<div class="row">
			<div class="col-md-4 abas-nav">
				<?php echo wp_nav_menu( array( 'menu' => get_the_title() ) );?>
			</div><!-- .col-md-4 abas-nav -->
			<div class="col-md-8 pull-right" id="abas-content">
				<div class="content animated fadeInUp">
					<?php the_content();?>
				</div><!-- .content animated fadeInUp -->
			</div><!-- #abas-content.col-md-7 pull-right -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #camara-abas.col-md-12 -->