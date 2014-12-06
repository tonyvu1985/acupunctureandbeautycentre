<h1 id="site-name"><a rel="home" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>

	<h2 id="pages" class="table-title"><?php _e('Natural Health and Beauty, Acupunture Fairfield, Beauty Therapist Sydney'); ?></h2>
	<?php wp_nav_menu( array( 'menu' => 'mobile-menu', 'container' => 'false', 'items_wrap'      => '<ul id="%1$s" class="disclosure table group">%3$s</ul>', ) ); ?>
	<ul class="disclosure table group" style="display:none;">
		<?php wp_list_pages('exclude=915,20&title_li=&depth=1&child_of='.$parent); ?>
		<?php wp_list_pages('include=20&title_li=&depth=1&child_of='.$parent); ?>
	</ul>

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

cfct_posts();

?>