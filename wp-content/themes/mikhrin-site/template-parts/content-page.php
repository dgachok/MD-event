<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mikhrin_and_Co_Site
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page__header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content page__content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mikhrin-and-co-site' ),
				'after'  => '</div>',
			) );
		?>
		<div class="propose">
			<div class="propose__block propose__block--active js-propose-brand" data-type="popular">
				<div class="propose__item"><img class="propose__img" src="/wp-content/themes/mikhrin-site/images/icons/img_popular.png"></div>
				<div class="propose__title">Найпопулярніші</div>
			</div>
			<div class="propose__block js-propose-brand" data-type="econom">
				<div class="propose__item"><img class="propose__img" src="/wp-content/themes/mikhrin-site/images/icons/img_econom.png"></div>
				<div class="propose__title">Економ</div>
			</div>
			<div class="propose__block js-propose-brand" data-type="standart">
				<div class="propose__item"><img class="propose__img" src="/wp-content/themes/mikhrin-site/images/icons/img_standart.png"></div>
				<div class="propose__title">Стандарт</div>
			</div>
			<div class="propose__block js-propose-brand" data-type="premium">
				<div class="propose__item"><img class="propose__img" src="/wp-content/themes/mikhrin-site/images/icons/img_premium.png"></div>
				<div class="propose__title">Преміум</div>
			</div>
		</div>
		<div class="propose-item">

			<?php
			// Loop 1 Popular
			$query1 = new WP_Query(array( 'category_name' => 'horeca_popular' ));
			if( $query1->have_posts() ){
				while( $query1->have_posts() ){

			$query1->the_post();

			?>
				<div class="propose-item__item js-propose-item" data-type="popular">
						<div class="propose-item__img">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail( $query1->post->ID ) ) {the_post_thumbnail();} else{
								?>
									<img class="wp-post-image" src="/wp-content/themes/mikhrin-site/images/service/2.jpg">
								<?php }?>
							</a>
						</div>
						<a class="propose-item__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				<?php
			}
			wp_reset_postdata();
			}
			?>

			<?php
			// Loop 2 Econom 
			$query1 = new WP_Query(array( 'category_name' => 'horeca_econom' ));
			if( $query1->have_posts() ){
				while( $query1->have_posts() ){

					$query1->the_post();

					?>
					<div class="propose-item__item js-propose-item" style="display:none;" data-type="econom">
						<div class="propose-item__img">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail( $query1->post->ID ) ) {the_post_thumbnail();} else{
									?>
									<img class="wp-post-image" src="/wp-content/themes/mikhrin-site/images/service/2.jpg">
								<?php }?>
							</a>
						</div>
						<a class="propose-item__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<?php
				}
				wp_reset_postdata();
			}
			?>

			<?php
			// Loop 3 Standart
			$query1 = new WP_Query(array( 'category_name' => 'horeca_standart' ));
			if( $query1->have_posts() ){
				while( $query1->have_posts() ){

					$query1->the_post();

					?>
					<div class="propose-item__item js-propose-item" style="display:none;" data-type="standart">
						<div class="propose-item__img">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail( $query1->post->ID ) ) {the_post_thumbnail();} else{
									?>
									<img class="wp-post-image" src="/wp-content/themes/mikhrin-site/images/service/2.jpg">
								<?php }?>
							</a>
						</div>
						<a class="propose-item__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<?php
				}
				wp_reset_postdata();
			}
			?>

			<?php
			// Loop 4 Premium
			$query1 = new WP_Query(array( 'category_name' => 'horeca_premium' ));
			if( $query1->have_posts() ){
				while( $query1->have_posts() ){

					$query1->the_post();

					?>
					<div class="propose-item__item js-propose-item" style="display:none;" data-type="premium">
						<div class="propose-item__img">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail( $query1->post->ID ) ) {the_post_thumbnail();} else{
									?>
									<img class="wp-post-image" src="/wp-content/themes/mikhrin-site/images/service/2.jpg">
								<?php }?>
							</a>
						</div>
						<a class="propose-item__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<?php
				}
				wp_reset_postdata();
			}
			?>
		</div>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'mikhrin-and-co-site' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<script>
	$( document ).ready(function() {
		propose();
	});
</script>
