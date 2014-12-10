<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */

get_header(); 
$blog_cont_class = blog_content_class();
?>
 
    	 <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
 
<div class="clear"></div>

<?php get_footer(); ?>