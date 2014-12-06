<?php
/*
Template Name: Page Chinese
*/
?>



<?php

get_header();
get_template_part('site','top');
get_sidebar(); ?>

<div id="right-column">
    <div id="content-wrapper">
        <div id="post-content">
        	<h1>Chinese Medicine</h1>
            <div class="list-acupunture">
                <ul>
                    <?php query_posts('post_type=page&post_parent=110&order=ASC&orderby=menu_order');?>   
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <li>
                        <a href="<?php the_permalink();?>">
                        <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo catch_that_image() ?>&amp;h=150&amp;w=200&amp;zc=1" alt="" />
                        <h3><?php the_title(); ?></h3>
                        </a>
                    </li>
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


