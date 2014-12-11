<?php
get_header();

get_template_part('site','top');

get_sidebar();
?>

<div id="right-column">
	<div id="content-wrapper">
<div id="post-content">
	
	<!--<h1>News/Link</h1>-->
<li style="list-style:none" id="categories">
 	<form class="blog-category" action="<?php bloginfo('url'); ?>/" method="get">
	<div>
<?php
$select = wp_dropdown_categories('show_option_none=Select category&show_count=1&orderby=name&echo=0');
$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
echo $select;
?>
	<noscript><div><input type="submit" value="View" /></div></noscript>
	</div></form>
</li>
<?//php query_posts( 'posts_per_page=10&order=desc&cat=41' ); //?>
<?php query_posts( 'posts_per_page=-1&order=desc' ); ?>
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
		<h2 class="blog_title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<div class="post-info">
			<span class="the_date"><?php the_date() ?></span><span>by</span><span class="the_author"><?php the_author() ?></span>
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