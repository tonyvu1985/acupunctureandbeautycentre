<h1 id="site-name"><a rel="home" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
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

<div id="content" class="group">
<?php

cfct_loop();

comments_template();

?>

</div><!--#content-->
	<div id="recent_tab">
		<hr />
		
		<ul class="disclosure table group">
			<?php //wp_get_archives('type=postbypost&limit=10'); ?>
			<?php
			
			wp_reset_query();
			query_posts( 'posts_per_page=3&order=ASC&cat=18' );
			if(have_posts()) {
				$li = array();
				while(have_posts()){
					the_post();
					
					$li[] = '<li><a href="'.get_permalink().'">'.get_the_title().' <em style="color: #666; font-size: 10px; white-space: nowrap; ">'.get_the_time('F jS, Y').'</em></a> </li>';
				}
				$li = array_reverse($li);
				echo join('',$li);
			};
			?>
			
		</ul>
	</div>
	<div id="pages_tab">
		<hr />
		<h2 class="table-title" id="pages"><?php _e(''); ?></h2>
		<ul class="disclosure table group">
			<?php //echo $sub_pages; wp_list_pages('title_li=&depth=1'); ?>
		</ul>
	</div>
</div>

<hr />

<p id="navigation-bottom" class="navigation">
	<?php //cfct_misc('main-nav'); ?>
</p>

<hr />

<?php 

//get_footer();

?>