<?php
/* Filtros da Agenda de Desenvolvimento */
?>
<div class="col-md-12 agenda-filtros">
	<div class="container">
		<div class="row">
			<div class="col-md-7 pull-left">
				<div class="col-md-12 filter eixos">
					<span class="help col-md-2 pull-left">
						<?php _e( 'Eixos', 'litoralsustentavel' );?>
					</span>
					<div class="col-md-10 pull-right eixos-buttons">
						<?php $terms = get_terms( 'eixos', array( 'hide_empty' => 1 ) );?>
						<?php foreach ( $terms as $term ) : ?>
							<?php if ( $icon = get_field( 'thumbnail', $term ) ) : ?>
								<span class="eixo-btn each-agenda-filter-btn" data-term-id="<?php echo esc_attr( $term->term_id );?>" data-taxonomy="eixos">
									<img src="<?php echo $icon['sizes']['thumbnail'];?>" alt="<?php echo esc_attr( $term->name );?>" />
									<?php echo apply_filters( 'the_title', $term->name );?>
								</span>
							<?php endif;?>
						<?php endforeach;?>
					</div><!-- .col-md-10 eixos-buttons -->
				</div><!-- .col-md-12 filter eixos -->
				<div class="col-md-12 filter temas">
					<span class="help col-md-2 pull-left">
						<?php _e( 'Temas', 'litoralsustentavel' );?>
					</span>
					<div class="col-md-10 pull-right temas-buttons">
						<?php $terms = get_terms( 'temas', array( 'hide_empty' => 1 ) );?>
						<?php foreach ( $terms as $term ) : ?>
							<?php if ( $color = get_field( 'color', $term ) ) : ?>
								<span class="temas-btn each-agenda-filter-btn" data-term-id="<?php echo esc_attr( $term->term_id );?>" data-taxonomy="temas" style="border-left-color:<?php echo esc_attr( $color );?>">
									<?php echo apply_filters( 'the_title', $term->name );?>
								</span>
							<?php endif;?>
						<?php endforeach;?>
					</div><!-- .col-md-10 eixos-buttons -->
				</div><!-- .col-md-12 filter eixos -->
				<div class="col-md-12 filter temas busca">
					<span class="help col-md-2 pull-left">
						<?php _e( 'Palavras chaves', 'litoralsustentavel' );?>
					</span>
					<div class="col-md-10 pull-right temas-buttons ">
						<input type="text" id="agenda-search-key" class="col-md-10">
						<span class="col-md-1 pull-right search-btn-icon genericon genericon-search"></span>
					</div><!-- .col-md-10 eixos-buttons -->
				</div><!-- .col-md-12 filter eixos -->
			</div><!-- .col-md-10 pull-left -->
			<div class="col-md-5 pull-right howto">
				<?php the_content();?>
			</div><!-- .col-md-2 pull-right howto -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .col-md-12 agenda-filtros -->
<div class="col-md-12 agenda-posts" data-page="1">
	<div class="container">
		<div class="row">
			<div class="all-posts"></div><!-- .all-posts -->
			<div class="col-md-12 text-center">
				<a href="#" class="btn btn-primary btn-large load-more-agenda">
					<?php _e( 'Carregar +', 'litoralsustentavel' );?>
				</a>
			</div><!-- .col-md-12 text-center -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .col-md-12 agenda-posts -->