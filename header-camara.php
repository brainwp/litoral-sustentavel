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
			<div class="col-md-12 pull-left">
				<nav id="main-navigation" class="navbar navbar-default" role="navigation">
			
					<div class="navbar-header ">
						<button type="button" class="navbar-toggle" data-toggle="esconder" data-target=".navbar-main-navigation">
						<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php /*

						<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

						*/ ?>
					</div>
					<div class=" pull-right icons">
						<?php $link = (!empty($options['facebook']))? $options['facebook'] : '#'; ?>
				    	<a class="genericon genericon-facebook-alt" href="<?php echo $link; ?>"></a>
				    		<?php $link = (!empty($options['twitter']))? $options['twitter'] : '#'; ?>
				    	<a class="genericon genericon-twitter" href="<?php echo $link; ?>"></a>
						<?php $link = (!empty($options['youtube']))? $options['youtube'] : '#'; ?>
				    	<a class="genericon genericon-youtube" href="<?php echo $link; ?>"></a>
				    	<a id="search-toggle" class="genericon genericon-search" href="#" data-open="false"></a>
				    	<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				    	<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="search-input" placeholder="<?php _e('Pressione enter','litoral-sustentavel');?>" />
				    	</form>

				    </div><!-- .col-md-4 pull-right -->

					<div class="navbar-main-navigation esconder">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'depth'          => 0,
									'container'      => false,
									'menu_class'     => 'nav navbar-nav',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>
						
					</div><!-- .navbar-collapse -->
				</nav><!-- #main-menu -->
		    </div><!-- .col-md-8 pull-left -->
		    
		</div><!-- .row -->
	</div><!-- .container -->
</nav><!-- #primary-menu .col-md-12 -->
<div id="">
	<div id="img-cabecalho" class="container header-camara">
		<div class="col-md-2 pull-left">
			<a href="<?php echo get_site_url(); ?>">
				<img src="<?php echo get_stylesheet_directory_uri();?>/imagens/logo-login.png" align="center">
			</a>
		</div>
		<div class="col-md-10 pull-left the-title">
			<?php if ( get_post_type( get_the_ID() ) == 'acoes' ) : ?>
				<?php if ( $option = get_option( 'acoes_cfg' ) ) : ?>
					<h1><?php echo apply_filters( 'the_title', $option[ 'title' ] ); ?></h1>
				<?php else : ?>
					<h1><?php _e( 'Agenda de Desenvolvimento Sustentável', 'litoralsustentavel' );?></h1>
				<?php endif;?>
			<?php else : ?>
				<h1><?php the_title();?></h1>
			<?php endif;?>
			<?php if ( $field = get_post_meta( get_the_ID(), 'sub_title', true ) ) : ?>
				<span><?php echo apply_filters( 'the_title', $field );?></span>
			<?php endif;?>
		</div><!-- .col-md-9 pull-left the-title -->
	</div>
	
	<div class="clearfix"></div>
	
</div>
<?php if ( has_post_thumbnail() && is_page_template( 'page-camara.php' ) ) : ?>
	<div class="col-md-12 header-camara-thumb-container">
		<?php the_post_thumbnail( 'full', array( 'class' => 'header-camara-thumb' ) );?>
	</div><!-- .col-md-12 header-camara-thumb-container -->
<?php endif;?>
