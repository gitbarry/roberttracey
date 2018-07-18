<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RT_Tailors
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Vollkorn:500" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tailors' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
		<div class="row">
			<div class="col-12 col-sm-4 col-md-8 col-lg-9 block-logo">

			<!--the_custom_logo();-->
			<h1 class="logo"><a href="<?php echo get_home_url(); ?>">ROBERT TRACEY</a></h1>
			<h4 class="sub-logo"> - The Tailors - est 1959 -</h4>
<?php
			$tailors_description = get_bloginfo( 'description', 'display' );
			if ( $tailors_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $tailors_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			</div>

			<div class="col-12 col-sm-8 col-md-4 col-lg-3 block-search">
				<?php get_search_form(); ?>
			</div>
		</div><!-- .row -->



		<div>
	</header><!-- #masthead -->

<div class="main-menu_wrapper">
	<div class="container">
		<div class="row">
	<nav id="site-navigation" class="main-navigation text-center">
		<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tailors' ); ?></button> -->
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav>
		</div>
		</div>
	</div><!-- #site-navigation -->

	<div id="content" class="page-content">
