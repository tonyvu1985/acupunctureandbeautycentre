<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */
get_header();  ?>
	<?php while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="borde_pages"></div>
        <?php the_post_thumbnail(array(360,360), array('class'=>'alignleft') );  ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<div class="clear"></div>
<?php get_footer(); ?>