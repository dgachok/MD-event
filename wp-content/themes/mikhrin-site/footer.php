<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mikhrin_and_Co_Site
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div class="container">
			<ul class="footer__menu js-menu">
				<li data-menu="about"><a href="<?php echo get_home_url().'/about/'?>">Про MD Event</a></li>
				<li data-menu="news"><a href="<?php echo get_home_url().'/news/'?>">Новини</a></li>
				<li data-menu="services"><a href="<?php echo get_home_url().'/services-horeca/'?>">Послуги</a></li>
				<li data-menu="photos"><a href="<?php echo get_home_url().'/photos/'?>">Фото</a></li>
				<li data-menu="customers"><a href="<?php echo get_home_url().'/customers/'?>">Клієнти</a></li>
				<li data-menu="partners"><a href="<?php echo get_home_url().'/partners/'?>">Партнери</a></li>
				<li data-menu="contacts"><a href="<?php echo get_home_url().'/contacts/'?>">Контакти</a></li>
			</ul>
			<div class="brand_block">
				<div class="brand_block__brand_item"><img src="/wp-content/themes/mikhrin-site/images/footer/footer_group.png"></div>
				<div class="brand_block__brand_item"><img src="/wp-content/themes/mikhrin-site/images/footer/footer_logo.png"></div>
				<div class="brand_block__brand_item"><img src="/wp-content/themes/mikhrin-site/images/footer/footer_diz.png"></div>
			</div>
		</div>
	</footer>

</body>
</html>
