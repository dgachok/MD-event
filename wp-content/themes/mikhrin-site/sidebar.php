<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mikhrin_and_Co_Site
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="sidebar js-sidebar">
	<div class="sidebar-block js-sidebar-block sidebar-block--active" data-type="1">
		<img class="sidebar-block__img" src="/wp-content/themes/mikhrin-site/images/service/1.jpg" alt="">
		<span class="sidebar-block__title">Комплексний супровід Horeca</span>
		<div class="sidebar-block__additional"></div>
	</div>
	<div class="sidebar-block js-sidebar-block" data-type="0">
		<img class="sidebar-block__img" src="/wp-content/themes/mikhrin-site/images/service/2.jpg" alt="">
		<span class="sidebar-block__title">Комплексний супровід Horeca</span>
		<div class="sidebar-block__additional"></div>
	</div>
	<div class="sidebar-block js-sidebar-block" data-type="0">
		<img class="sidebar-block__img" src="/wp-content/themes/mikhrin-site/images/service/3.jpg" alt="">
		<span class="sidebar-block__title">Комплексний супровід Horeca</span>
		<div class="sidebar-block__additional"></div>
	</div>
	<div class="sidebar-block js-sidebar-block" data-type="0">
		<img class="sidebar-block__img" src="/wp-content/themes/mikhrin-site/images/service/4.jpg" alt="">
		<span class="sidebar-block__title">Комплексний супровід Horeca</span>
		<div class="sidebar-block__additional"></div>
	</div>

</aside><!-- #secondary -->

<script>
	$( document ).ready(function() {
	});
</script>
