<?php
get_header();

get_template_part('site','top');

get_sidebar();
?>

<div id="right-column">
	<div id="content-wrapper">
<div id="post-content">
	
<?php query_posts( 'posts_per_page=10&order=desc&cat=41' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

 $args = array(
   'post_type' => 'attachment',
   'numberposts' => 1,
   'post_status' => null,
   'post_parent' => $post->ID
  );
?> 
<div id="thumbs">
<div class="box1">
	<div id="post-article">
		<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<div class="post-info">
			<span class="the_date"><?php the_date() ?></span><span class="the_author"><?php the_author() ?></span>
		</div>
		<?php the_excerpt('custom_excerpt_length'); ?>
        <!--<a href="<?//php the_permalink(); //?>">Read More</a>-->
     </div>
</div>
</div>
<?php endwhile; endif; ?>
<div style="clear:both;margin:32px auto;width:320px;display:block;"><?php wp_pagenavi() ?></div>
</div>
</div>
</div>

<?php
get_template_part('site','bottom');

get_footer();
?>