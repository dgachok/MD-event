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
	<a href="<?php echo get_home_url().'/services-horeca/'?>" class="sidebar-block js-sidebar-block sidebar-block--active js-horeca" data-type="1">
			<img class="sidebar-block__img" src="/wp-content/themes/mikhrin-site/images/service/1.jpg" alt="">
			<span class="sidebar-block__title">Комплексний супровід Horeca</span>
			<div class="sidebar-block__additional"></div>
	</a>
	<a href="<?php echo get_home_url().'/services-private/'?>" class="sidebar-block js-sidebar-block js-private" data-type="0">
			<img class="sidebar-block__img" src="/wp-content/themes/mikhrin-site/images/service/2.jpg" alt="">
			<span class="sidebar-block__title">Приватні та корпоративні заходи</span>
			<div class="sidebar-block__additional"></div>
	</a>
	<a href="<?php echo get_home_url().'/services-business/'?>" class="sidebar-block js-sidebar-block js-business" data-type="0">
			<img class="sidebar-block__img" src="/wp-content/themes/mikhrin-site/images/service/3.jpg" alt="">
			<span class="sidebar-block__title">Заходи ділового формату</span>
			<div class="sidebar-block__additional"></div>
	</a>
	<a href="<?php echo get_home_url().'/services-add/'?>" class="sidebar-block js-sidebar-block js-add" data-type="0">
			<img class="sidebar-block__img" src="/wp-content/themes/mikhrin-site/images/service/4.jpg" alt="">
			<span class="sidebar-block__title">Додаткові<br /> послуги</span>
			<div class="sidebar-block__additional"></div>
	</a>

</aside><!-- #secondary -->

<script>
	$( document ).ready(function() {
        addActiveItem();

        function addActiveItem() {
            var sidebar = '.js-sidebar-block',
                content = '.js-content',
                $sidebar = $(sidebar),
                $content = $(content),
                data = $content.attr("data-type"),
                attr = (data.length) ? data : "horeca",
                el = ".js-"+ attr,
                $el = $(el);

            $sidebar.removeClass("sidebar-block--active");
            $el.addClass("sidebar-block--active");
        }
	});
</script>
