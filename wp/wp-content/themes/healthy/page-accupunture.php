<?php
/*
Template Name: Page Acupunture
*/
?>



<?php

get_header();
get_template_part('site','top');
get_sidebar(); ?>

<div id="right-column">
    <div id="content-wrapper">
        <div id="post-content">
        	<h1 style="font-weight:bold; font-size:18px">Acupuncture</h1>
            <div class="list-acupunture">
                <ul>
                    <?php query_posts('post_type=page&post_parent=342&order=ASC&orderby=menu_order');?> 
                    <?php $loop = 1;?>  
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <li>
					<?php 
						if (has_post_thumbnail( get_the_ID() ) ){
							$image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'medium');
							$image = $image[0];
							}else{
							$image = catch_that_image();
							}?>
                        <a href="<?php the_permalink();?>">
                        <!-- <img src="<?php //bloginfo('template_directory'); ?>/timthumb.php?src=<?php //echo $image ?>&amp;h=150&amp;w=200&amp;zc=1" alt="" /> -->
                        <img src="<?php echo $image; ?>" class="list-acupuncture-img"/>
                        <h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
                        </a>
                    </li>
                    <?php if($loop == 3){
                        ?>
                        <div style="clear:both;"></div>
                        <?php
                        $loop = 0;
                    } 
                     else{
                        echo"";
                     }
                        $loop++;
                    ?>
                     
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?> 
                </ul>
            </div>
        </div>
    </div>
</div>


<?php 
get_template_part('site','bottom');
get_footer();
?>


