<?php
/** * Template Name: Home */
get_header(); ?>

<div class="content_wrapper">

	<div class="homeGride1">
        <?php query_posts('page_id=6'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <strong><?php the_title();?></strong>
            <div class="space10 clear"></div>
            <?php echo get_the_excerpt(200); ?>
        <?php endwhile; wp_reset_query(); endif; ?>
    </div><!--homeGride1 -->
    
    <div class="homeGride2">
    	 <?php query_posts('page_id=51'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <strong><?php the_title();?></strong>
            <div class="space10 clear"></div>
            <?php echo get_excerpt(200); ?>
        <?php endwhile; wp_reset_query(); endif; ?>
    </div><!--homeGride2 -->
    
    <div class="homeGride3">
    	 <?php query_posts('page_id=53'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <strong><?php the_title();?></strong>
            <div class="space10 clear"></div>
            <?php echo get_excerpt(200); ?>
        <?php endwhile; wp_reset_query(); endif; ?>
    </div><!--homeGride3 -->
    
    <div class="homeGride4">
    	 <?php query_posts('page_id=55'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <strong><?php the_title();?></strong>
            <div class="space10 clear"></div>
            <?php echo get_excerpt(200); ?>
        <?php endwhile; wp_reset_query(); endif; ?>
    </div><!--homeGride4 -->

<div class="clear"></div>   
<div class="border-saprater"></div>

<div class="home_content">
        <?php query_posts('page_id=2127'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="thumimage"><?php the_post_thumbnail(array(337,337)); ?></div>
    <div class="space45"></div>
	    <h2 class="center"><?php the_title(); ?></h2>
    	<div class="space30"></div>
            <div class="welcome-con">
            <?php the_content(); ?>
            <a href="<?php echo get_page_link(6); ?>"> <div class="hmreadmore" >More </div></a>
            </div>
	<?php endwhile; wp_reset_query(); endif; ?>
<div class="clear"></div>
</div><!--home_content -->
</div><!--content_wrapper -->

<div class="featured_offers"> 
    <div class="featured_content">
        <div class="offer">
            <?php dynamic_sidebar('featured-offer'); ?> 
        </div><!--offer -->
    </div><!--featured_content --> 
</div><!--featured_offers -->

<div class="most_popular_services">
	<div class="most_popular">
    <h4>Most Popular</h4>
	<div class="borderh4"></div>
			<?php //$args = array('post_type' => 'services', 'posts_per_page' =>1);
			//$loop = new WP_Query( $args );
			//while ( $loop->have_posts() ) : $loop->the_post(); ?>
     <?php query_posts('post_id=2073'); ?>
    <?php if (have_posts()) : ; ?>

            <?php echo get_excerpt(100); ?>
            <div class="clear space10"></div>
            <div class="view-menu"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">View Menu</a></div>
            <?php echo wp_reset_query(); endif; ?>
    </div><!--most_popular -->


		    <?php $args = array('post_type' => 'page', 'posts_per_page' => 3, 'order' =>'rand');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			 <div class="popular_gride">
             <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><div class="popularService"><?php if ( has_post_thumbnail() ) {   $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );   $thumbnailSrc = $src[0]; ?>
            <img src="<?php bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $thumbnailSrc; ?>&h=185&w=185" alt=""><?php } 
            else { ?>
            <img src="<?php bloginfo('template_url');?>/images/popularservice.jpg" width="185" height="185" style="border:none;" />
            <?php } ?>       	 </div></a>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"> <div class="popureadmore"> More </div></a>
            </div><!--popular_gride --> 
			<?php endwhile; echo wp_reset_query();  ?>	   
</div><!--most_popular_services -->
<div class="clear"></div>  
<div class="latest_post">
    <div class="border-saprater"></div> 
    <div class="space5"></div>
    <div class="latest_post_title">
    	<?php dynamic_sidebar('latest_post_title'); ?> 
    </div><!--latest_post_title -->
    
		<?php query_posts('showposts=3');  if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="latest_post_content_date_img">
        <div class="post_thum"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(array(226,226)); ?></a></div>
        <div class="date"><span><?php echo the_time('d'); ?></span>/<?php echo the_time('m'); ?></div>
	    <h6><?php the_title(); ?></h6>
        <div class="space10"></div>
        <?php echo get_excerpt(125); ?>
        <div class="view-menu"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read More</a></div>
        </div>
        <?php endwhile; else : endif; ?>
        <?php wp_reset_query(); ?>
</div><!--latest_post -->

<div class="clear"></div>

<?php get_footer(); ?>
