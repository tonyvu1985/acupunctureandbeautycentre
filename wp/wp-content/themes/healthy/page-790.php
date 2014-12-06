<?php

{
get_header();
get_template_part('site','top');
get_sidebar();
}

?>
<div id="right-column">
<div id="content-wrapper">
<div id="post-content">


<?php query_posts( 'posts_per_page=5&order=ASC&cat=18' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

 $args = array(
   'post_type' => 'attachment',
   'numberposts' => 1,
   'post_status' => null,
   'post_parent' => $post->ID
  );
?>
<h1><?php the_title(); ?></h1>

<div id="article">
	<?php 
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( is_single() ? 'large' : 'thumbnail' );
	} 
	
	the_excerpt(); ?>
	<p>	<a href="<?php the_permalink(); ?>">Read More</a>	</p>
		
</div>
<?php endwhile; wp_reset_query(); endif; ?>

</div>
</div>
</div>
<?php

//get_template_part('content','page');
get_template_part('site','bottom');
get_footer();
