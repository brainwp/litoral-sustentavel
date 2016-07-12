<?php
/* OPTIONS ODIN */
require_once get_stylesheet_directory() . '/inc/options.php';
//mascara da imagem da home
require_once get_stylesheet_directory() . '/inc/mask-image.php';

if ( ! function_exists( 'custom_taxonomy_agenda' ) ) {

// Register Custom Taxonomy
function custom_taxonomy_agenda() {

	$labels = array(
		'name'                       => _x( 'Eixos', 'Taxonomy General Name', 'litoralsustentavel' ),
		'singular_name'              => _x( 'Eixo', 'Taxonomy Singular Name', 'litoralsustentavel' ),
		'menu_name'                  => __( 'Eixos', 'litoralsustentavel' ),
		'all_items'                  => __( 'Todos eixos', 'litoralsustentavel' ),
		'parent_item'                => __( 'Item parente', 'litoralsustentavel' ),
		'parent_item_colon'          => __( 'Item parente:', 'litoralsustentavel' ),
		'new_item_name'              => __( 'Novo nome de eixo', 'litoralsustentavel' ),
		'add_new_item'               => __( 'Adicionar novo eixo', 'litoralsustentavel' ),
		'edit_item'                  => __( 'Editar Eixo', 'litoralsustentavel' ),
		'update_item'                => __( 'Atualizar Eixo', 'litoralsustentavel' ),
		'view_item'                  => __( 'Ver Eixo', 'litoralsustentavel' ),
		'separate_items_with_commas' => __( 'Eixos separados por virgula', 'litoralsustentavel' ),
		'add_or_remove_items'        => __( 'Editar ou remover Eixos', 'litoralsustentavel' ),
		'choose_from_most_used'      => __( 'Escolha pelos mais usados', 'litoralsustentavel' ),
		'popular_items'              => __( 'Itens populares', 'litoralsustentavel' ),
		'search_items'               => __( 'Buscar itens', 'litoralsustentavel' ),
		'not_found'                  => __( 'Não encontrado', 'litoralsustentavel' ),
		'no_terms'                   => __( 'Sem itens', 'litoralsustentavel' ),
		'items_list'                 => __( 'Lista de eixos', 'litoralsustentavel' ),
		'items_list_navigation'      => __( 'Navegação da lista de itens', 'litoralsustentavel' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'eixos', array( 'acoes' ), $args );
	/*
	$labels = array(
		'name'                       => _x( 'Temas', 'Taxonomy General Name', 'litoralsustentavel' ),
		'singular_name'              => _x( 'Tema', 'Taxonomy Singular Name', 'litoralsustentavel' ),
		'menu_name'                  => __( 'Temas', 'litoralsustentavel' ),
		'all_items'                  => __( 'Todos temas', 'litoralsustentavel' ),
		'parent_item'                => __( 'Tema parente', 'litoralsustentavel' ),
		'parent_item_colon'          => __( 'Tema parente:', 'litoralsustentavel' ),
		'new_item_name'              => __( 'Novo nome do tema', 'litoralsustentavel' ),
		'add_new_item'               => __( 'Adicionar novo tema', 'litoralsustentavel' ),
		'edit_item'                  => __( 'Editar tema', 'litoralsustentavel' ),
		'update_item'                => __( 'Atualizar tema', 'litoralsustentavel' ),
		'view_item'                  => __( 'Editar tema', 'litoralsustentavel' ),
		'separate_items_with_commas' => __( 'Temas separados por virgula', 'litoralsustentavel' ),
		'add_or_remove_items'        => __( 'Editar ou remover temas', 'litoralsustentavel' ),
		'choose_from_most_used'      => __( 'Escolha pelos mais usados', 'litoralsustentavel' ),
		'popular_items'              => __( 'Itens populares', 'litoralsustentavel' ),
		'search_items'               => __( 'Buscar itens', 'litoralsustentavel' ),
		'not_found'                  => __( 'Não encontrado', 'litoralsustentavel' ),
		'no_terms'                   => __( 'Sem itens', 'litoralsustentavel' ),
		'items_list'                 => __( 'Lista de Temas', 'litoralsustentavel' ),
		'items_list_navigation'      => __( 'Navegação da lista de itens', 'litoralsustentavel' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'temas', array( 'acoes' ), $args );
	*/

	$labels = array(
		'name'                  => _x( 'Ações', 'Post Type General Name', 'litoralsustentavel' ),
		'singular_name'         => _x( 'Ação', 'Post Type Singular Name', 'litoralsustentavel' ),
		'menu_name'             => __( 'Ações da Agenda', 'litoralsustentavel' ),
		'name_admin_bar'        => __( 'Ações da Agenda', 'litoralsustentavel' ),
		'archives'              => __( 'Arquivo de Ações', 'litoralsustentavel' ),
		'parent_item_colon'     => __( 'Ação parente:', 'litoralsustentavel' ),
		'all_items'             => __( 'Todas as ações', 'litoralsustentavel' ),
		'add_new_item'          => __( 'Adicionar nova Ação', 'litoralsustentavel' ),
		'add_new'               => __( 'Adicionar nova', 'litoralsustentavel' ),
		'new_item'              => __( 'Nova ação', 'litoralsustentavel' ),
		'edit_item'             => __( 'Editar ação', 'litoralsustentavel' ),
		'update_item'           => __( 'Atualizar ação', 'litoralsustentavel' ),
		'view_item'             => __( 'Ver ação', 'litoralsustentavel' ),
		'search_items'          => __( 'Buscar ação', 'litoralsustentavel' ),
		'not_found'             => __( 'Não encontrado', 'litoralsustentavel' ),
		'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'litoralsustentavel' ),
		'featured_image'        => __( 'Imagem destacada', 'litoralsustentavel' ),
		'set_featured_image'    => __( 'Setar imagem destacada', 'litoralsustentavel' ),
		'remove_featured_image' => __( 'Remover imagem destacada', 'litoralsustentavel' ),
		'use_featured_image'    => __( 'Usar como imagem destacada', 'litoralsustentavel' ),
		'insert_into_item'      => __( 'Inserir na ação', 'litoralsustentavel' ),
		'uploaded_to_this_item' => __( 'Enviar para essa ação', 'litoralsustentavel' ),
		'items_list'            => __( 'Lista de ações', 'litoralsustentavel' ),
		'items_list_navigation' => __( 'Navegação da lista de ações', 'litoralsustentavel' ),
		'filter_items_list'     => __( 'Filtrar lista de ações', 'litoralsustentavel' ),
	);
	$args = array(
		'label'                 => __( 'Ação', 'litoralsustentavel' ),
		'description'           => __( 'Ações da', 'litoralsustentavel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'            => array( 'temas', 'eixos' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'acoes', $args );

}
add_action( 'init', 'custom_taxonomy_agenda', 0 );

}

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
	add_image_size( 'thumb-destaques',  600, 270, true);
	add_image_size( 'thumb-single', 1023, 320, true );
	add_image_size( 'slider-4-colunas', 287, 130, true );
	add_image_size( 'slider-3-colunas', 510, 230, true );
	add_image_size( 'slider-2-colunas', 700, 316, true );
	
	
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
   	wp_localize_script( 'custom-js', 'ajax',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) 
        ) 
    );
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
	
  if(get_field('destaque-home', $brasa_slider_id) == 1){
		$categoria_html ="";
    	$the_post = get_post($brasa_slider_item_id);
		$category = get_the_category($brasa_slider_item_id); 
		$ultimo = end($category);

		foreach ($category as $categoria){
			$categoria_html .= '<h3><a href="'.get_category_link($categoria->term_id ).'"> '.$categoria->cat_name;
			if ($categoria != $ultimo){
				$categoria_html .=", ";
			}
			$categoria_html .='</a></h3>';
		}
		
		$permalink = get_permalink( $brasa_slider_item_id);
		if ($str){
			$str .= "<div class='excerpt-slider destaque'><a href=".$permalink." class='bt-readmore'><h2>".$the_post->post_title."</h2></a></div>";
			return $str;
		}	
	}
 	else if (get_field('slider-home', $brasa_slider_id) == 1){

	//aqui vc retorna o resumo
		$categoria_html ="";
    	$the_post = get_post($brasa_slider_item_id);
		$category = get_the_category($brasa_slider_item_id); 
		$ultimo = end($category);
		$content = $the_post->post_content;
		if (has_excerpt( $brasa_slider_item_id )) {
			$excerpt=$the_post->post_excerpt ;
		}
		else{
			$excerpt = wp_trim_words( $content, 15, $more = null );
		}

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
	else{
		return $str;
	}
}

add_filter('brasa_slider_loop_after_image','slider_resumo');
function adiciona_css_slider($classes, $id){
	$tamanho = get_post_meta( $id, 'brasa_slider_size', true );

	return $classes." ".$tamanho;
}

add_filter('brasa_slider_css_classes','adiciona_css_slider', 10, 2 );

// function size($size){
// 	if (condition) {
// 		# code...
// 	}
// 	$size="thumb-destaques";
// 	return $size;
// }
// add_filter('brasa_slider_img_size','size');


function enqueue_bootstrap(){

	wp_enqueue_script( 'odin-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true );
	wp_localize_script( 'odin-main', 'odin', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

// Main jQuery.
	wp_enqueue_script( 'odin-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true );

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


/**
 * ACF and fields.
 */
require_once get_stylesheet_directory() . '/inc/acf/acf.php';
require_once get_stylesheet_directory() . '/fields.php';

function slider_resumo_equipe($str){
  	global $brasa_slider_id, $brasa_slider_item_id;
	
    
  if( ! is_page_template( 'page-equipe.php' ) && strpos( get_the_title( $brasa_slider_id ), 'Destaques' ) == false ){
		return $str;
	}
		//aqui vc retorna o resumo
    	$the_post = get_post($brasa_slider_item_id);
		$category = get_the_category($brasa_slider_item_id); 
		$content = $the_post->post_content;
		$excerpt = wp_trim_words( $content, 60, $more = null );
		$permalink = get_permalink( $brasa_slider_item_id);
		if ($str){
			$str .= "<div class='excerpt-slider'><h2>".$the_post->post_title."</h2><span>".$excerpt."</span><div class='bottom'></div></div><a href=".$permalink." class='btn-readmore-publicacoes'><span>Veja Mais ></span>></a>";
			return $str;
		}
}
add_filter('brasa_slider_loop_after_image','slider_resumo_equipe', 99999);


/* AJAX abas */
add_action( 'wp_ajax_abas_camara', 'abas_camara_ajax' );
add_action( 'wp_ajax_nopriv_abas_camara', 'abas_camara_ajax' );
function abas_camara_ajax() {
	if ( ! isset( $_POST['url'] ) ) {
		return;
	}
	$page = get_page_by_path( str_replace( get_home_url(), '', $_POST['url'] ), OBJECT, 'page' );
	if ( $page && is_object( $page ) ) {
		echo '<div class="content animated fadeInUp">';
		printf( '<h3 class="page-the-title">%s</h3>', apply_filters( 'the_title', $page->post_title ) );
		echo apply_filters( 'the_content', $page->post_content );
		echo '</div>';
	}
	wp_die();
}

add_action( 'wp_ajax_agenda', 'agenda_ajax' );
add_action( 'wp_ajax_nopriv_agenda', 'agenda_ajax' );

function agenda_ajax() {
	if ( ! isset( $_POST [ 'page' ] ) ) {
		return;
	}

	$args = array( 
		'posts_per_page' => 16,
		'post_type' => 'acoes',
		'tax_query' => array(),
		'paged' => $_POST[ 'page' ]
	);

	if ( isset( $_POST[ 'eixos']  ) ) {
		$args[ 'tax_query' ][] = array(
			'taxonomy' => 'eixos',
			'field'    => 'term_id',
			'terms'    => $_POST[ 'eixos'],
		); 
	}
	if ( ! isset( $_POST[ 'eixos' ] ) ) {
		unset( $args[ 'tax_query' ] );	
	}

	if ( isset( $_POST[ 'key' ] ) ) {
		$args[ 's' ] = $_POST[ 'key' ];
	}
	$query = new WP_Query( $args );
	header( 'max-pages: ' . $query->max_num_pages );
	header( 'num_posts: ' . $query->found_posts );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			if ( ! get_the_terms( get_the_ID(), 'eixos' ) ) {
				continue;
			} 
			if ( ! has_post_thumbnail() ) {
				continue;
			}
			get_template_part( 'parts/content-agenda-posts' );
		} 
	}
	else {
		_e( '<h1>Ooops! Não existem ações com estas características, desculpe!</h1>', 'litoralsustentavel' );
	}

	wp_die();
}
function brasa_get_page_by_template( $template ) {
	$pages = get_pages(	array(
  	  	'meta_key' => '_wp_page_template',
    	'meta_value' => $template
	) );
	if ( is_array( $pages ) && isset( $pages[0] ) ) {
		return $pages[0]->ID;
	}
	return false;
}
function brasa_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = sprintf( '%s, %s, %s', $r, $g, $b );
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}


// ACF Sliders
// ACF Sliders
// ACF Sliders
// ACF Sliders
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_sliders',
		'title' => 'Sliders',
		'fields' => array (
			array (
				'key' => 'field_5756bf01218e9',
				'label' => 'Slider da home',
				'name' => 'slider-home',
				'type' => 'true_false',
				'instructions' => 'Selecione essa caixa para utilizar esse slider na home',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_5713bb39seopd',
				'label' => 'Destaque principal da home',
				'name' => 'destaque-home',
				'type' => 'true_false',
				'instructions' => 'Selecione essa caixa para utilizar esse slider como principal da home',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_57577611218ea',
				'label' => 'Ordem',
				'name' => 'ordem',
				'type' => 'number',
				'instructions' => 'Ordem do slider na home (precisa selecionar o campo "slider da home")',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5760d09d92bcd',
				'label' => 'Link',
				'name' => 'link',
				'type' => 'text',
				'instructions' => 'Escrever o endereço completo do link (com http:// ou https:// para o título do slider.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'brasa_slider_cpt',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
// ACF Sliders
// ACF Sliders
// ACF Sliders