<?php
/* Filtros da Agenda de Desenvolvimento */
?>
<div class="col-md-12 agenda-filtros">
	<div class="container">
		<div class="row">
			<div class="col-md-12 filter eixos">
				<span class="help col-md-2 pull-left">
					<?php _e( 'Eixos', 'litoralsustentavel' );?>
				</span>
				<div class="col-md-10 pull-right eixos-buttons">
					<?php $terms = get_terms( 'eixos', array( 'hide_empty' => 1 ) );?>
					<?php foreach ( $terms as $term ) : ?>
						<?php if ( $icon = get_field( 'thumbnail', $term ) ) : ?>
							<span class="eixo-btn each-agenda-filter-btn" data-term-id="<?php echo esc_attr( $term->term_id );?>">
								<img src="<?php echo $icon['sizes']['thumbnail'];?>" alt="<?php echo esc_attr( $term->name );?>" />
								<?php echo apply_filters( 'the_title', $term->name );?>
							</span>
						<?php endif;?>
					<?php endforeach;?>
				</div><!-- .col-md-10 eixos-buttons -->
			</div><!-- .col-md-12 filter eixos -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .col-md-12 agenda-filtros -->