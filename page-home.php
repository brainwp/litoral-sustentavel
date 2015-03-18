<?php
/* Template Name: Inicial */

get_header(); ?>
<?php get_template_part('parts/comp-header'); ?>

		<div id="container-home">
			<div id="primeira-linha">			
					<div id="content" class="home">	
					<?php

					get_template_part( 'loop', 'page' );
					?>
								
					</div><!-- #content -->
					
					<div id="mapa-home">
					<!-- <iframe width="639" height="369" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.arcgis.com/home/webmap/templates/OnePane/basicviewer/embed.html?webmap=de013e166566405aa5807b3e89151654&amp;gcsextent=-47.3379,-25.0516,-44.498,-22.9769&amp;displayslider=true&amp;displaylegend=true"></iframe><br />
					<a href="http://www.arcgis.com/home/webmap/viewer.html?webmap=de013e166566405aa5807b3e89151654&amp;extent=-47.3379,-25.0516,-44.498,-22.9769" class="tela-cheia" target="_blank">Tela Cheia</a> -->
					<iframe width="639" height="369" src="http://www.youtube.com/embed/KDVpi3NKCm0" frameborder="0" allowfullscreen></iframe>
					</div>
				
				</div><!-- #primeira-linha -->
					<div id="ph-box">
					<?php if(function_exists("insert_post_highlights")) insert_post_highlights(); ?>
					</div>
				<div id="segunda-linha">
				<div id="query-post1">
					<a class="query-agenda" href="<?php echo home_url( '/eventos' ); ?>"><h1 class="title-query-link">Eventos</h1></a>
					
					<?php 
					//Adiciona o Loop CPT Agenda
					get_template_part( 'loop-agenda-home');
					?>
					
				</div><!-- #query-post1 -->				
					<div id="query-post-noticias">
					<a class="query-noticias-home" href="<?php echo home_url( '/category/noticias' ); ?>"><h1 class="title-query-link">Not&iacutecias</h1></a>
					<?php
					//Adiciona o query de Noticias
					 get_template_part( 'loop-noticias-home');
					?>
					</div>
				</div><!-- #segunda-linha -->
						
		</div><!-- #content-home  -->

		<?php get_footer('cat'); ?>

