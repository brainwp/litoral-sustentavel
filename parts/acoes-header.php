<?php
/* Acoes header */
$style = '';
$color = '#FFF';
if ( $terms = get_the_terms( get_the_ID(), 'eixos' ) ) : 
	if ( $color = get_field( 'color', $terms[0] ) ) :
		$style = sprintf( 'background-color:%s;', $color );
	endif;
endif;
?>
<div class="col-md-12 acoes-header" style="<?php echo esc_attr( $style );?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="col-md-12">
				<div class="col-md-4 pull-left tax-eixos">
					<?php if ( $terms = get_the_terms( get_the_ID(), 'eixos' ) ) : ?>
						<?php if ( $icon = get_field( 'thumbnail', $terms[0] ) ) : ?>
							<img src="<?php echo $icon['sizes']['thumbnail'];?>" alt="<?php echo esc_attr( $terms[0]->name );?>" />
							<span><?php echo $terms[0]->name;?></span>
						<?php endif;?>
					<?php endif;?>
				</div><!-- .col-md-4 pull-left tax-eixos -->
				<?php if ( $page = brasa_get_page_by_template( 'page-agenda-desenvolvimento.php' ) ) : ?>
					<a href="<?php echo get_permalink( $page );?>" class="col-md-5 pull-right search-btn">
						<?php $style = 'color:' . $color . ' !important;';?>
						<span class="pull-left search-btn-icon genericon genericon-search" style="<?php echo esc_attr( $style );?>"></span>
						<span class="text"><?php _e( 'Faça uma nova pesquisa', 'litoralsustentavel');?></span>
					</a>
				<?php endif;?>
			</div><!-- .col-md-8 col-md-offset-2 -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .col-md-12 acoes-header -->
