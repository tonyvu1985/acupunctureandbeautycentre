<?php
/* Template Name: Blog Posts */
get_header(); 

$blog_cont_class = blog_content_class();
?>
	<?php if($blog_cont_class != '') : ?>
    	<section id="primary" class="site-content <?php echo $blog_cont_class;?>">
	<?php endif; ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
        <?php //comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>
        <?php wp_reset_query(); ?>

        <?php 
        $excludeVar = ( exclude_blog_cat() != '' ) ? '&cat='.exclude_blog_cat() : '';
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        query_posts('post_type=post'.$excludeVar.'&paged='.$paged);
        while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile; // end of the loop. 
		if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif;
        wp_reset_query();
        ?>
     <?php if($blog_cont_class != '') : ?></section><!-- #primary --><?php get_sidebar(); ?><?php endif; ?>
    <div class="clear"></div>
<?php get_footer(); ?>