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
?> <div id="thumbs"><div class="box"><a href="<?php the_permalink(); ?>"> <?php
  $attachments = get_posts( $args );
     if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
           echo '<img width="180" height="120" src="'.wp_get_attachment_url( $attachment->ID, 'medium' ).'"/></a>';
          }
     }?>
     <span class="img-description"><?php the_title(); ?></span></div></div>
<?php endwhile; 

else: echo "<p>No Posts Found</p>";

endif; ?>

</div>
</div>
</div>
