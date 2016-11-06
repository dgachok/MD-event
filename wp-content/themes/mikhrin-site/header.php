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
	<!-- Wrapper for slides -->
	<div class="carousel-inner carousel--height" role="listbox">
		<div class="item active">
			<div class="width__full">
				<img src="/wp-content/themes/mikhrin-site/images/carousel/1.jpg">
			</div>
		</div>

		<div class="item">
			<div class="width__full">
				<img src="/wp-content/themes/mikhrin-site/images/carousel/2.jpg">
			</div>
		</div>

		<div class="item">
			<div class="width__full">
				<img src="/wp-content/themes/mikhrin-site/images/carousel/3.jpg" alt="Flower">
			</div>
		</div>

		<div class="item">
			<div class="width__full">
				<img src="/wp-content/themes/mikhrin-site/images/carousel/4.jpg" alt="Flower">
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row header">
		<div class="col-md-4 header__text"><strong>Event-агенство<br> MD Event</strong> Послуги вищого рівня! Організація усіх видів святкувань! Надійно!
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
		<div class="col-md-4 header__logo"><a href="<?php echo get_home_url()?>"><img src="/wp-content/themes/mikhrin-site/images/logo.jpg"></a></div>
		<div class="col-md-4 header__contact">+38(096)81-84-925<br>+38(093)008-38-03
				<span class="icon__telephon">
					<img src="/wp-content/themes/mikhrin-site/images/icons/telephon.png">
				</span>
		</div>
	</div>
	<div class="menu">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Меню</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav js-menu">
						<li data-menu="about">
							<a href="<?php echo get_home_url().'/about/'?>">Про MD Event</a>
						</li>
						<li data-menu="news">
							<a href="<?php echo get_home_url().'/news/'?>">Новини</a>
						</li>
						<li data-menu="services" class="dropdown">
							<a class="dropdown-toggle" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="#">
								Послуги
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo get_home_url().'/services-horeca/'?>">Комплексний супровід Horeca</a>
								</li>
								<li>
									<a href="<?php echo get_home_url().'/services-private/'?>">Приватні та корпоративні заходи</a>
								</li>
								<li>
									<a href="<?php echo get_home_url().'/services-business/'?>">Заходи ділового формату</a>
								</li>
								<li>
									<a href="<?php echo get_home_url().'/services-add/'?>">Додаткові послуги</a>
								</li>
							</ul>
						</li>
						<li data-menu="photos">
							<a href="<?php echo get_home_url().'/photos/'?>">Фото</a>
						</li>
						<li data-menu="customers">
							<a href="<?php echo get_home_url().'/customers/'?>">Клієнти</a>
						</li>
						<li data-menu="partners">
							<a href="<?php echo get_home_url().'/partners/'?>">Партнери</a>
						</li>
						<li data-menu="contacts">
							<a href="<?php echo get_home_url().'/contacts/'?>">Контакти</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</div>