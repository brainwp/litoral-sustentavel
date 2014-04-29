<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
		
			<div id="content" role="main">

				<h1 class="page-title">
					<?php
					printf( __( '%s', 'twentyten' ), '<span class="category-noticias">' . single_cat_title( '', false ) . '</span>' );?>
					
				</h1>
						<div id="primeira-linha">		
						 <!-- Inicio Loop -->
						<?php $category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>'; ?>
        <?php while ( have_posts() ) : the_post();	?>       
        <div id="cada-post">
			<div id="categoria-archive-titulo"> <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>
				<div class="entry-meta">
					<?php twentyten_posted_on(); ?>
				</div><!-- .entry-meta -->
				<div id="conteudo-post">
				<?php echo excerpt( 40 ); ?>
				</div>
				<div id="leia-mais-categoria">
				<a href="<?php the_permalink() ?>">Leia mais</a>
				</div>
        </div><!-- #cada-dia -->

		<?php endwhile;	?>

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

<?php get_footer(); ?>
