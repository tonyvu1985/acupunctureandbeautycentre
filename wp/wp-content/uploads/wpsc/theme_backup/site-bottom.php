            <div id="bottom">
            	<div class="bottom-left">
                	<a href="<?php bloginfo('url'); ?>/product-of-the-month"><img src="<?php bloginfo('template_directory'); ?>/images/product-of-the-month.jpg" alt="" /></a>
                </div>
                <div class="bottom-center">
<?php query_posts('posts_per_page=1&post_type=post&cat=13&order=DESC') ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    ?>

              	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php
 $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post->ID
  );

$attachments = get_posts( $args );
if ( $attachments ) {
foreach ( $attachments as $attachment ) {
echo '<img width="147" height="99" src="'.wp_get_attachment_url( $attachment->ID, 'full' ).'"/>';
}
}
?> <p><?php the_excerpt(); ?></p>
<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
<?php
endwhile;
endif;
wp_reset_query();
?>			<!--<h1><a href="">Cosmetical Facial Acupuncture</a></h1>
                    <img src="<?php bloginfo('template_directory'); ?>/images/cosmetic-facial.jpg" alt="" />
                    <p>15% off your 1st Treatment Look Younger Naturally!
						Wrinkles, Lines, Pigmentation, Age Sports or Sagging Skin...</p>
                    <a href="#" class="read-more">Read more</a>-->
                </div>
                <div class="bottom-right">
                	<a href="<?php bloginfo('url'); ?>/whats-on-special"><img src="<?php bloginfo('template_directory'); ?>/images/whats-on-special.jpg" alt="" /></a>
                </div>
            </div><!--end bottom-->
    	</div><!--end wrap-->
