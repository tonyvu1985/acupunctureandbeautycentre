<div id="right-column">
	<div id="content-wrapper">
<div id="post-content">
<div class="clear"></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();   ?>

 <?php

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
			<h1 class="blog_title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
			<div class="post-info">
				<span class="the_date"><?php the_date() ?></span><span>by</span><span class="the_author"><?php the_author() ?></span>
			</div>
			<?php the_excerpt('custom_excerpt_length'); ?>
			<!--<a href="<?//php the_permalink(); //?>">Read More</a>-->
		 </div>
				 <span class="img-description">	
		 <a href="<?php the_permalink(); ?>"> <?php
		  $attachments = get_posts( $args );
			 if ( $attachments ) {
				foreach ( $attachments as $attachment ) {
				   echo '<img width="180" height="120" src="'.wp_get_attachment_url( $attachment->ID, 'medium' ).'"/></a>';
				  }
			 }?>
		 </span>
	 </div>
</div>	
<?php endwhile; 

else: echo "<p>No Posts Found</p>";

endif; ?>

</div>
</div>
</div>
