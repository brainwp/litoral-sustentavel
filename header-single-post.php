<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
$options = get_option('social_cfg');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_directory') ?>/estilo.css" />

 <!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Candal|Open+Sans:300italic,400italic,700italic,800italic,400,800,300,700|Passion+One' rel='stylesheet' type='text/css'>
 <!-- Google Fonts END -->
 <!-- jQuery (required) -->
 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" type="text/css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	if ( function_exists('mp3j_addscripts') ) {
		mp3j_addscripts();
	}
?>
 
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
 <!-- Google Analytics BEGIN -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33027144-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
 <!-- Google Analytics END -->
</head>

<body <?php body_class(); ?>>
<nav id="primary-menu" class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-9 pull-left">
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'depth' => 2 ) ); ?>
		    </div><!-- .col-md-6 pull-left -->
		    <div class="col-md-3 pull-right icons">
		    	<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		    		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="search-input" placeholder="<?php _e('Pressione enter','litoral-sustentavel');?>" />
		    	</form>
		    	<a id="search-toggle" class="genericon genericon-search" href="#" data-open="false"></a>
				<?php $link = (!empty($options['facebook']))? $options['facebook'] : '#'; ?>
		    	<a class="genericon genericon-facebook-alt" href="<?php echo $link; ?>"></a>
		    	<?php $link = (!empty($options['twitter']))? $options['twitter'] : '#'; ?>
		    	<a class="genericon genericon-twitter" href="<?php echo $link; ?>"></a>
				<?php $link = (!empty($options['youtube']))? $options['youtube'] : '#'; ?>
		    	<a class="genericon genericon-youtube" href="<?php echo $link; ?>"></a>
		    </div><!-- .col-md-5 pull-right -->
		</div><!-- .row -->
	</div><!-- .container -->
</nav><!-- #primary-menu -->
<div id="">
	<div id="img-cabecalho" class="container">
		<div class="col-md-1"></div>
		<div id="logo-single" class="col-md-6">
			<a href="<?php echo get_site_url(); ?>">
				<img id="logo-home" src="<?php echo get_stylesheet_directory_uri();?>/imagens/logo.png">
			</a>
		</div>
	
			<div id="oque-resumo" class="col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri();?>/imagens/fundo-content-top.png">

			</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="clearfix"></div>
	
</div>
<section id="section-single" class="container">
