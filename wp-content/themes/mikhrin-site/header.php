<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mikhrin_and_Co_Site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<div style="width:100%;">
				<img src="/wp-content/themes/mikhrin-site/images/carousel/1.jpg">
			</div>
		</div>

		<div class="item">
			<div style="width:100%;">
				<img src="/wp-content/themes/mikhrin-site/images/carousel/2.jpg">
			</div>

		</div>

		<div class="item">
			<div style="width:100%;">
				<img src="/wp-content/themes/mikhrin-site/images/carousel/3.jpg" alt="Flower">
			</div>

		</div>

		<div class="item">
			<div style="width:100%;">
				<img src="/wp-content/themes/mikhrin-site/images/carousel/4.jpg" alt="Flower">
			</div>

		</div>
	</div>
</div>
<div class="container">
		<div class="row header">
			<div class="col-md-4 header__text"><strong>Event-агенство Mdr&Co</strong> Послуги вищого рівня! Організація усіх видів святкувань! Надійно!
				<div class="social">
					<div class="social__border-top social__border-top--right"></div>
					<div class="social__border-top social__border-top--left"></div>
					<span class="social__title">Ми в соцмережах:</span>
					<a class="social__icon social__icon--vk"><img src="/wp-content/themes/mikhrin-site/images/icons/vk.png"></a>
					<a class="social__icon social__icon--facebook"><img src="/wp-content/themes/mikhrin-site/images/icons/facebook.png"></a>
					<a class="social__icon social__icon--twitter"><img src="/wp-content/themes/mikhrin-site/images/icons/twitter.png"></a>
					<div class="clear"></div>
				</div>
			</div>
			<div class="col-md-4 header__logo"><img src="/wp-content/themes/mikhrin-site/images/logo.jpg"></div>
			<div class="col-md-4 header__contact">+38(095)82-03-168<br/> +38(095)82-03-168<br/> +38(095)82-03-168</div>
		</div>
		<div class="menu">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Меню</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="#">Про Kam&Co</a>
							</li>
							<li>
								<a href="#">Новини</a>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="#">
									Послуги
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Фото</a>
							</li>
							<li>
								<a href="#">Клієнти</a>
							</li>
							<li>
								<a href="#">Партнери</a>
							</li>
							<li>
								<a href="#">Контакти</a>
							</li>

						</ul>
					</div>
				</div>
			</nav>
		</div>
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'mikhrin-and-co-site' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mikhrin-and-co-site' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">