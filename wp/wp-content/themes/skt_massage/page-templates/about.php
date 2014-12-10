<?php
/** Template Name: About Us */

get_header(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="borde_pages"></div>
 
<div class="about_us">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      	<?php the_content();?>
        <?php endwhile; endif;?>
        <?php wp_reset_query(); ?>
    <div class="clear"></div><!--clear-->
</div><!--about_us-->
<div class="space40"></div>
            	<div class="page_title"><span><h2>Our Team</h2></span> </div>
<div class="space25"></div>
<?php
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
    $temp = $wp_query;  $wp_query = null;
    $args = array( 'post_type' => 'ourteam', 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 9, 'paged' => $paged);
    $wp_query = new WP_Query();
    $wp_query->query( $args );
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<div class="ourteam">
	<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
<?php
	echo '<div class="ourteamcon">';
	echo '<h5>';
	the_title();
	echo '</h5>';
//	echo the_meta();
	echo '<div class="space10"></div>';
	echo get_excerpt(350);
	echo '</div><!--.ourteamcon-->';
?>
</div><!--ourteam -->
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<div class="clear"></div>
<?php get_footer(); ?>