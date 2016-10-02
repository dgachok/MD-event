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
    <header class="entry-header page__header js-menu-services">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content page__content js-content" data-type="add">
        <?php
        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mikhrin-and-co-site' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->
    
    <?php
    // Loop 1 Post Add
    $query1 = new WP_Query(array( 'category_name' => 'services-add' ));
    if( $query1->have_posts() ){
    while( $query1->have_posts() ){

    $query1->the_post();

    ?>
    <div class="post-add">
        <div class="post-add__img">
            <?php if ( has_post_thumbnail( $query1->post->ID ) ) {the_post_thumbnail();} else{
                ?>
                <img class="wp-post-image" src="/wp-content/themes/mikhrin-site/images/service/2.jpg">
            <?php }?>
        </div>
        <div class="post-add__main">
            <a href="<?php the_permalink(); ?>" class="post-add__title"><?php the_title(); ?></a>
            <span class="post-add__desc"><?php the_excerpt(); ?></span>
            <div class="post-add-buttons">
                <div class="post-add-buttons__price">
                    <?php $values = get_post_custom_values("price", $query1->post->ID);
                    if (isset($values[0]) && $values[0]!='') {
                        echo ($values[0]."грн");
                    }else{
                        echo ('Ціна договірна');
                    }?>
                </div>
                <a href="<?php the_permalink(); ?>" class="post-add-buttons__more">Детальніше</a>
            </div>
        </div>
    </div>
        <?php
    }
        wp_reset_postdata();
    }
    ?>

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
