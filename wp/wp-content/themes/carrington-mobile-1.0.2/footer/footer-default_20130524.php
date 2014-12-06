<?php

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

if (is_page()) {
	global $post;
	$parent = $post->ID;
	ob_start();
	wp_list_pages('title_li=&depth=1&child_of='.$parent);
	$sub_pages = ob_get_contents();
	ob_end_clean();
} else {
	$sub_pages = '';
}

if (!empty($sub_pages)) {
	$sub_pages = '<li><strong class="title">'.__('Sub Menu', 'carrington-mobile').'</strong></li>'.$sub_pages.'<li><strong class="title">'.__('MENU', 'carrington-mobile').'</strong></li>';
}

?>

<hr />

<div class="tabbed">
	<div id="recent_tab">
		<hr />
		<h2 class="table-title" id="recent"><?php _e('Recent Posts'); ?></h2>
		<ul class="disclosure table group">
			<?php //wp_get_archives('type=postbypost&limit=10'); ?>
			<?php
			
			wp_reset_query();
			query_posts($query_string . '&orderby=date&order=DESC');
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
			<?php echo $sub_pages; wp_list_pages('title_li=&depth=1'); ?>
		</ul>
	</div>
</div>

<hr />

<p id="navigation-bottom" class="navigation">
	<?php cfct_misc('main-nav'); ?>
</p>

<hr />


<?php
cfct_form('search');
cfct_template_file('footer', 'bottom');
?>