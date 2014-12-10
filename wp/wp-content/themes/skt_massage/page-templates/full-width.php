<?php
/**
 * Template Name: Full Width
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

		<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
            <?php //comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>

<div class="clear"></div>
<?php get_footer(); ?>