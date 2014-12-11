<div id="right-column">
	<div id="content-wrapper">
<div id="post-content">
<div class="clear"></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();   ?>
<div id="article">

<?php if (in_category(18)) { ?>

<h1><?php the_title(); ?></h1>

<?php } 
	  else  { ?> 
	  
	  <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
		<?php } ?>
<div>
<?php 
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( array(680,510));
	}
	the_content(); 
?></div>
</div>
 
<?php endwhile; 

else: echo "<p>No Posts Found</p>";

endif; ?>

</div>
</div>
</div>
