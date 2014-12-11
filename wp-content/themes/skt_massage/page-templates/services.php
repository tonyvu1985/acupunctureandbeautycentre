<?php
/** Template Name: Services */

get_header(); ?>
             <h1><?php the_title(); ?></h1>
            <div class="borde_pages"></div>

<div class="about_us">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      	<?php the_content();?>
        <?php endwhile; endif;?>
        <?php wp_reset_query(); ?>
    <div class="clear"></div><!--clear-->
</div><!--about_us-->
<div class="space40"></div>
            	<div class="page_title"><span><h2>Services</h2></span> </div>
<div class="space25"></div>
	<?php $args = array('post_type' => 'services', 'posts_per_page' => -1);
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="popular_gride">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><div class="popularService"><?php if ( has_post_thumbnail() ) {   $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );   $thumbnailSrc = $src[0]; ?>
        <img src="<?php bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $thumbnailSrc; ?>&h=185&w=185" alt=""><?php } 
        else { ?>
        <img src="<?php bloginfo('template_url');?>/images/popularservice.jpg" width="185" height="185" style="border:none;" />
        <?php } ?></div></a>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"> <div class="popureadmore"> More </div></a>
        <div class="space30"></div>
        </div><!--popular_gride --> 
        <?php endwhile; echo wp_reset_query();  ?>
<div class="clear"></div>
<?php get_footer(); ?>