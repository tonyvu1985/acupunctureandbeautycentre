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

    <div class="content<?php echo ($blog_cont_class != '') ? ' '.$blog_cont_class : '_fw';?>" >
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
            <?php comments_template( '', true ); ?>
        <?php endwhile; ?>
    </div><!-- #content -->

    <?php if($blog_cont_class != '') : ?>
        <?php get_sidebar('blog'); ?> 
    <?php endif; ?>
 
    <div class="clear"></div>

<?php get_footer(); ?>