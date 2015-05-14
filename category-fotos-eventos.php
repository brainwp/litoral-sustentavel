<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<?php get_template_part('parts/comp-header'); ?>

		<div id="container">
	
			<div id="content" role="main">

				<h1 class="page-title">
					<?php
					printf( __( '%s', 'twentyten' ), '<br /><span class="category-name">' . single_cat_title( '', false ) . '</span>' );?>
				</h1>
						<div id="primeira-linha">		
						 <!-- Inicio Loop -->
						<?php $category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>'; ?>
        <?php while ( have_posts() ) : the_post();	?>
        
        <?php
				// Seleciona os ATTACHMENTs do post e adiciona em $attachments //
                $args = array(
                'post_type'   => 'attachment',
                'numberposts' => 3,
                'post_parent' => $post->ID,
                'orderby' => 'menu_order',
                'order' => 'ASC'
                );
        
                $imgs = get_posts( $args );
        ?>
        
        <div class="cada-evento col-md-12">
       
	 <div class=" col-md-3">

			<div id="fotos-archive-titulo"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>        
        </div><!-- cada-evento-div -->
        <?php
				// Imprime os ATTACHMENTs do $attachments //
                if ( $imgs )
                {
                    foreach ( $imgs as $img )
                    {
                    // Imprimi todas as imagens do post com a div class img_post //
                    echo '<div class=" fotos-eventos col-md-3">';
					?>
					<a  href="<?php the_permalink() ?>">      
		          <?php 
                    echo wp_get_attachment_image( $img->ID, array(280,280));
					?></a>
					<?php
                    echo '</div>';
                    }
                }
        ?>
        </div><!-- .cada-evento -->
        
        <?php		
            // Fecha o loop //
            endwhile;
        ?>



	    <!-- Fim Loop -->
		</div><!-- primeira-linha -->
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php global $wp_query;  
		$total_pages = $wp_query->max_num_pages;  
		if ($total_pages > 1){  
		  $current_page = max(1, get_query_var('paged'));  
		  echo '<div class="page_nav">';  
		  echo paginate_links(array(  
			  'base' => get_pagenum_link(1) . '%_%',  
			  'format' => '/page/%#%',  
			  'current' => $current_page,  
			  'total' => $total_pages,  
			  'prev_text' => '<< Anteriores',  
			  'next_text' => 'Pr&oacute;ximos >>'  
			));  
		  echo '</div>';  
		} 
		?>
			</div><!-- #content -->
		</div><!-- #container -->

		<div class="clearfix"></div>
		


		<?php get_footer('cat'); ?>
