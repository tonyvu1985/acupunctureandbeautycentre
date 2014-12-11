<?php
/**
 * Template Name: Contact
 *
 * Description: SKT Master loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */

get_header(); ?>

    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'contact' ); ?>
            <?php //comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->

<?php get_footer(); ?>