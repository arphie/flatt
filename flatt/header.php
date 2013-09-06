<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Flatt UI Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- begin add bootstrap -->

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/favicon.png">

<!-- Bootstrap core CSS -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css" rel="stylesheet">

<!-- Custom CSS -->
<!--
<link href="<?php echo get_template_directory_uri(); ?>/css/base.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/flat-ui.css" rel="stylesheet">
-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
<![endif]-->

<!-- end add bootstrap -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="container theme-showcase">
	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">				
				<div class="navbar navbar-inverse">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">FLATT</a>
						</div>
						<div class="navbar-collapse collapse">
							<?php wp_nav_menu(
										array(
											'menu' => 'main-menu',
											//'container_class' => 'nav-collapse collapse',
											'menu_class' => 'nav navbar-nav',
											'fallback_cb' => '',
											'menu_id' => 'main-menu',
											'walker' => new Bs_Walker_Nav_Menu()
											)
										); ?>
						</div><!--/.nav-collapse -->
					</div><!--/.container -->
				</div><!--/.navbar -->
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content row">