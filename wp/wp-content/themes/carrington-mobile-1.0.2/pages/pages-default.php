<?php

/*
Template Name: Default
*/

// This file is part of the Carrington Mobile Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>


<?php
if(get_the_ID() == '342'){
?>
<ul class="disclosure table group">
		<?php query_posts('post_type=page&post_parent=342&order=ASC&orderby=menu_order');?>   
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <li>
                        <a href="<?php the_permalink();?>"><?php the_title(); ?>
                        </a>
                    </li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?> 
</ul>
<?php
}else if(get_the_ID() == '110'){
?>
<ul class="disclosure table group">
		<?php query_posts('post_type=page&post_parent=110&order=ASC&orderby=menu_order');?>   
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <li>
                        <a href="<?php the_permalink();?>"><?php the_title(); ?>
                        </a>
                    </li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?> 
</ul>
<?php
}else if(get_the_ID() == '12'){
?>
<ul class="disclosure table group">
		<?php query_posts('post_type=page&post_parent=12&order=ASC&orderby=menu_order');?>   
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <li>
                        <a href="<?php the_permalink();?>"><?php the_title(); ?>
                        </a>
                    </li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?> 
</ul>
<?php
}else if(get_the_ID() == '14'){
?>
<ul class="disclosure table group">
		<?php query_posts('post_type=page&post_parent=14&order=ASC&orderby=menu_order');?>   
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <li>
                        <a href="<?php the_permalink();?>"><?php the_title(); ?>
                        </a>
                    </li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?> 
</ul>
<?php
}else{
?>
<div id="content" class="group">
<?php
cfct_loop();

comments_template();
?>
</div><!--#content-->
<?php
}
?>


<?php 

get_footer();

?>