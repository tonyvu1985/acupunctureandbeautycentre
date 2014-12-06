<h1 id="site-name"><a rel="home" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>

	<h2 id="pages" class="table-title"><?php _e('Natural Health and Beauty, Acupunture Fiarfield, Beauty Therapist Sydney'); ?></h2>
	<ul class="disclosure table group">
		<?php wp_list_pages('title_li=&depth=1&child_of='.$parent); ?>
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