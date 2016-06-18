<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mikhrin_and_Co_Site
 */

get_header(); ?>
		<div class="row service_block">
			<div class="col-md-3 service ">
				<img src="/wp-content/themes/mikhrin-site/images/service/1.jpg" class="service__image">
				<span class="service__label">Комплексний супровід Horeca</span>
			</div>
			<div class="col-md-3 service">
				<img src="/wp-content/themes/mikhrin-site/images/service/2.jpg" class="service__image">
				<span class="service__label">Комплексний супровід Horeca</span>
			</div>
			<div class="col-md-3 service">
				<img src="/wp-content/themes/mikhrin-site/images/service/3.jpg" class="service__image">
				<span class="service__label">Комплексний супровід Horeca</span>
			</div>
			<div class="col-md-3 service">
				<img src="/wp-content/themes/mikhrin-site/images/service/4.jpg" class="service__image">
				<span class="service__label">Комплексний супровід Horeca</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="trust">
			Нам довіряють:
		</div>
		<div class="brand">
			<img class="brand__item" src="/wp-content/themes/mikhrin-site/images/brand/cocacola.png" alt="coca-cola">
			<img class="brand__item" src="/wp-content/themes/mikhrin-site/images/brand/uni.png" alt="unilever">
			<img class="brand__item" src="/wp-content/themes/mikhrin-site/images/brand/moz.png" alt="mondelez">
			<img class="brand__item" src="/wp-content/themes/mikhrin-site/images/brand/nest.png" alt="nestle">
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #page -->

<?php
get_sidebar();
get_footer();
