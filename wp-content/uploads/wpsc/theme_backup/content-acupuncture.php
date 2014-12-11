<div id="right-column">
<div id="content-wrapper">
<div id="post-content">
	
	<h1>Acupuncture</h1>	
	
<?php //query_posts( 'posts_per_page=9&order=ASC&cat=3' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

 /*$args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post->ID
  );
?> <div id="thumbs1"><div class="box1"><a href="<?php the_permalink(); ?>"> <?php
  $attachments = get_posts( $args );
     if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
           echo '<img width="180" height="120" src="'.wp_get_attachment_url( $attachment->ID, 'full' ).'"/></a>';
          }
     }</div></div>*/?>
     <!--<span class="img-description"><?php the_title(); ?></span>-->
     <?php the_content(); ?>
<?php endwhile; endif; wp_reset_query(); ?>

</div>
</div>
</div>