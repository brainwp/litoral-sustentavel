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

		<div id="" class="" role="main">
		
		    
	
			<div id="content" role="main">

				<h1 class="page-title">
					<?php
					printf( __( '%s', 'twentyten' ), '<span class="category-noticias">' . single_cat_title( '', false ) . '</span>' );?>
					
				</h1>
				<div id="area-select" class="noticias">
				<h2 class="filtro"><?php _e('Filtro'); ?></h2>
					<form>
					<select name="tag-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
					<option value='#'>Selecione o Munic&iacute;pios</option>
					<?php 
					$taxonomies = array('category');
					$args = array(
					'orderby'=>'menu',
					'hide_empty'=>true,
					'taxonomy'=>'category',
					'exclude'=>'57,10,5,6,59,68,11,62,3,4,60,58,9,5,29,26,30,32,27,37,35,36,34,31,28,33,25,66,64,8,56,63,1'
					);
					echo get_terms_dropdown($taxonomies, $args); 
					?>
					</select>
					</form>
				</div><!-- #area-select -->
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
				
				<?php if ( has_post_thumbnail()) { ?>
				<div class="thumb-noticias">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                    <?php the_post_thumbnail('thumb-noticias'); ?>
                    </a>
                </div>
                <?php } ?>
				
				<?php echo excerpt( 25 ); ?><span>...</span>
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
			  'format' => 'page/%#%',  
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



		<?php get_footer('cat'); ?>
