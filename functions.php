<?php
/* OPTIONS ODIN */
require_once get_stylesheet_directory() . '/inc/options.php';
//mascara da imagem da home
require_once get_stylesheet_directory() . '/inc/mask-image.php';


// Redefine o tamanho do Cabeçalho
define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 946 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 266 ) );

// post thumbnail support
	if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
	if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'thumb-municipios', 280, 130, true );
	add_image_size( 'thumb-noticias', 255, 130, true );
	add_image_size( 'thumb-apresentacoes', 255, 195, true );
	add_image_size( 'thumb-boletins', 255, 255, true );
	add_image_size( 'thumb-destaques', 710, 260, true );
	add_image_size( 'thumb-single', 1023, 320, true );
	
	
}


// Remove a barra de atualização do Admin
 add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );

//Adiciona as Minhas Opções
// require_once (get_stylesheet_directory() . '/options/admin_options.php');

// Codigo da Agenda

//Adiciona o CustomPostType Agenda
require_once (get_stylesheet_directory() . '/requires-agenda.php');



// Muda o limite do the_excerpt no child theme do TwentyTen
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return nl2br($excerpt);
    }
	
// Inserir Filtragem de Taxonomias

function get_terms_dropdown($taxonomies, $args){
    $myterms = get_terms($taxonomies, $args);
    $output ="";
    foreach($myterms as $term){
        $root_url = get_bloginfo('url');
        $term_taxonomy=$term->taxonomy;
        $term_slug=$term->slug;
        $term_name =$term->name;
        $link = $root_url.'/'.$term_taxonomy.'/'.$term_slug;
        $output .="<option value='".$link."'>".$term_name."</option>";
    }
    $output .="";
return $output;
}

// Inserindo novos Menus para o Rodapé

	add_action( 'init', 'register_my_menus' );
		 
		function register_my_menus() {
		register_nav_menus(
		array(
		'sitemap-1' => __( 'Site Map Coluna 1' ),
		'sitemap-2' => __( 'Site Map Coluna 2' ),
		'sitemap-3' => __( 'Site Map Coluna 3' ),
		'sitemap-4' => __( 'Site Map Coluna 4' ),
		'sitemap-5' => __( 'Site Map Coluna 5' )			
		)
		);
		}

		
// Personalizando o wp-login.php
	
function meu_logo_login()
{
    echo '<style  type="text/css"> h1 a {  background-image:url('.get_bloginfo('stylesheet_directory').'/imagens/logo-login.png)  !important;  height: 150px !important; width: 182px !important;
    margin-top: -50px !important;  margin-left: 75px !important; background-size: 182px 150px !important; } </style>';
}
add_action('login_head',  'meu_logo_login');
	
// Para mudar o rodapé do wp-admin
function alt_admin_footer ()
{
    echo '<span id="footer-thankyou">Desenvolvido pela <a href="http://www.brasa.art.br" target="_blank">Brasa</a> e pela <a href="http://www.ethymos.com.br" target="_blank">Ethymos</a> com o maravilhoso <a href="http://br.wordpress.org" target="_blank">WordPress</a></span>';
}
add_filter('admin_footer_text', 'alt_admin_footer');

// Remove seções desnecessárias do Painel
function del_secoes_painel(){
  global$wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'del_secoes_painel');

  // Adiciona uma função para filtrar conteudo dos loops

function show_post($path) {
  $post = get_page_by_path($path);
  $content = apply_filters('the_content', $post->post_content);
  echo $content;
}

function admin_scripts() {
  wp_enqueue_style( 'odin-admin-css', get_stylesheet_directory_uri() . '/css/odin-admin.css' );
  wp_enqueue_script( 'odin-admin-js',  get_stylesheet_directory_uri() . '/js/odin-admin.js', array( 'jquery' ), '1.0', true );
}
add_action( 'admin_enqueue_scripts', 'admin_scripts' );
function scripts(){
    wp_enqueue_script( 'custom-js',  get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'fitvids',  get_stylesheet_directory_uri() . '/assets/js/libs/jquery.fitvids.js', array( 'jquery' ), '1.0', true );

    wp_enqueue_style( 'source-sans', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,200,200italic,300,300italic,900italic,900,700italic,700,600italic,600' );
}
add_action('init','scripts');
///adiciona resumo ás páginas
add_post_type_support('page','excerpt');
///esconde a barra de admin quando logado

///brasa slider resum
function slider_resumo($str){
  	global $brasa_slider_id, $brasa_slider_item_id;
	
    
  if(get_the_title($brasa_slider_id) != 'Home'){
	return $str;
	}
 else{

	//aqui vc retorna o resumo
		$categoria_html ="";
    	$the_post = get_post($brasa_slider_item_id);
		$category = get_the_category($brasa_slider_item_id); 
		$ultimo = end($category);
		$content = $the_post->post_content;
		$excerpt = wp_trim_words( $content, 60, $more = null );

		foreach ($category as $categoria){
			$categoria_html .= '<h3><a href="'.get_category_link($categoria->term_id ).'"> '.$categoria->cat_name;
			if ($categoria != $ultimo){
				$categoria_html .=", ";
			}
			$categoria_html .='</a></h3>';
		}
		
		$permalink = get_permalink( $brasa_slider_item_id);
		if ($str){
			$str .= "<div class='excerpt-slider'><h2>".$the_post->post_title."</h2>".$categoria_html."<p>".$excerpt."</p></div><a href=".$permalink." class='bt-readmore'>Leia Mais</a>";
			return $str;
		}
		
	}
}
add_filter('brasa_slider_loop_after_image','slider_resumo');

function size($size){
	$size="thumb-destaques";
	return $size;
}
add_filter('brasa_slider_img_size','size');


function enqueue_bootstrap(){
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/libs/bootstrap.min.js', array(), null, true );
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap', 1 );

require_once get_stylesheet_directory() . '/inc/class-bootstrap-nav.php';

/* Class Brasa Social Feed */

require_once get_stylesheet_directory() . '/inc/youtube-api-class.php';
global $brasa_social_feed;
$option_soc = get_option('social_cfg');

$brasa_social_feed = new Brasa_Social_Feed(
	array(
		'youtube_auth'     => 'AIzaSyC5UL0Us0mOCh2wx_kkCi6JjEQ0niM_YiM',
		'youtube_playlist' => $option_soc['youtube_playlist'],
	)
);

wp_enqueue_script( 'odin-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true );
wp_localize_script( 'odin-main', 'odin', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

// Main jQuery.
wp_enqueue_script( 'odin-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true );


/**
 * ACF and fields.
 */
require_once get_stylesheet_directory() . '/inc/acf/acf.php';