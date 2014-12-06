<?php
get_header();

get_template_part('site','top');

get_sidebar();
?>

<div id="right-column">
	<div id="content-wrapper">
<div id="post-content">
	
	<h1>News/Link</h1>	
	
<?php query_posts( 'posts_per_page=5&order=ASC&cat=13' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

 $args = array(
   'post_type' => 'attachment',
   'numberposts' => 1,
   'post_status' => null,
   'post_parent' => $post->ID
  );
?> 
<div id="thumbs">
<div class="box"><a href="<?php the_permalink(); ?>"> <?php
  $attachments = get_posts( $args );
     if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
           echo '<img width="180" height="120" src="'.wp_get_attachment_url( $attachment->ID, 'full' ).'"/></a>';
          }
     }?>
     <span class="img-description"><?php the_title(); ?></span>
     <div id="post-article">
	<?php the_excerpt(); ?><br />
        <a href="<?php the_permalink(); ?>">Read More</a>
     </div>
</div>
</div>
<?php endwhile; endif; ?>

</div>
</div>
</div>

<?php
get_template_part('site','bottom');

get_footer();
?>