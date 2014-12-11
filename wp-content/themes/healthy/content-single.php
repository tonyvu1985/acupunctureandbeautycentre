<div id="right-column">
	<div id="content-wrapper">
<div id="post-content">
<div class="clear"></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();   ?>
	<div id="article">

	<?php if (in_category(18)) { ?>

<h1 style="font-weight:bold; font-size:18px"><?php the_title(); ?></h1>
 
	<?php } 
		  else  { ?> 
		  
		  <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
			<?php } ?>
			<span class="back-to-previous"><a href="/blog">Back</a></span>
			<div class="post-info">
				<span class="the_date"><?php the_date() ?></span><span> by</span><span class="the_author"> <?php the_author() ?></span>
			</div>
	<div>
			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( array(680,510));
			}
			the_content(); 
		?>
		<div class="keywords">Keywords: <?php the_category(' , '); ?></div>
		<?/* php comments_template( );  */?>
	</div>
	</div>
 
<?php endwhile; 

else: echo "<p>No Posts Found</p>";

endif; ?>

</div>
</div>
</div>
