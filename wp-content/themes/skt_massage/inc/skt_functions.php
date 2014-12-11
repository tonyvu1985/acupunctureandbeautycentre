<?php
// remove extra linebreaks and paragraphs

add_action('init', 'add_page_excerpt_box');
function add_page_excerpt_box() {
	add_post_type_support( 'page', 'excerpt' );
}

add_action('init', 'add_post_excerpt_box');
function add_post_excerpt_box() {
	add_post_type_support( 'post', 'excerpt' );
}

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);

//custom post type for Our Team
function my_custom_post_ourteam() {
	$labels = array(
		'name'               => __( 'Our Team' ),
		'singular_name'      => __( 'Our Team' ),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New Our Team' ),
		'edit_item'          => __( 'Edit Our Team' ),
		'new_item'           => __( 'New Our Team' ),
		'all_items'          => __( 'All Our Team' ),
		'view_item'          => __( 'View Our Team' ),
		'search_items'       => __( 'Search Our Team' ),
		'not_found'          => __( 'No Our Team found' ),
		'not_found_in_trash' => __( 'No Our Team found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Our Team'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Testimonials',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array('title', 'editor', 'thumbnail', "custom-fields", ),
		'has_archive'   => true,
	);
	register_post_type( 'ourteam', $args );	
}
add_action( 'init', 'my_custom_post_ourteam' );

//custom post type for Services
function my_custom_post_service() {
	$labels = array(
		'name'               => __( 'Services' ),
		'singular_name'      => __( 'Services' ),
		'add_new'            => __( 'Add Services' ),
		'add_new_item'       => __( 'Add New Services' ),
		'edit_item'          => __( 'Edit Services' ),
		'new_item'           => __( 'New Services' ),
		'all_items'          => __( 'All Services' ),
		'view_item'          => __( 'View Services' ),
		'search_items'       => __( 'Search Services' ),
		'not_found'          => __( 'No Services found' ),
		'not_found_in_trash' => __( 'No Services found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Services'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Services',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'has_archive'   => true,
	);
	register_post_type( 'services', $args );	
}
add_action( 'init', 'my_custom_post_service' );

//custom post type for Testimonials
function my_custom_post_testimonials() {
	$labels = array(
		'name'               => __( 'Testimonials' ),
		'singular_name'      => __( 'Testimonial' ),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View Testimonial' ),
		'search_items'       => __( 'Search Testimonials' ),
		'not_found'          => __( 'No testimonials found' ),
		'not_found_in_trash' => __( 'No testimonials found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Testimonials',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor' ),
		'has_archive'   => true,
	);
	register_post_type( 'testimonials', $args );	
}
add_action( 'init', 'my_custom_post_testimonials' );


//[clear]
function clear_func() {
	$clr = '<div class="clear"></div>';
	return $clr;
}
add_shortcode( 'clear', 'clear_func' );

//[gradient_button size="small" bg_color="#c00" color="#fff" text="Small Gradient Button" title="Small Gradient Button" url="#" position="left"]
function gradient_button_func( $atts ) {
	extract( shortcode_atts( array(
		'size' => 'small',
		'bg_color' => '#636b74',
		'color' => '#fff',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'center',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"grad-btn-{$size} btn-align-{$position}\" style=\"background-color:{$bg_color}; color:{$color}\">";
	$btn .= "{$text}</a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'gradient_button', 'gradient_button_func' );

//[simple_button size="small" bg_color="#c00" color="#fff" text="Small Gradient Button" title="Small Gradient Button" url="#" position="left"]
function simple_button_func( $atts ) {
	extract( shortcode_atts( array(
		'size' => 'small',
		'bg_color' => '#636b74',
		'color' => '#fff',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'left',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"simple-btn-{$size} btn-align-{$position}\" style=\"background-color:{$bg_color}; color:{$color}\">";
	$btn .= "{$text}</a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'simple_button', 'simple_button_func' );

//[round_button style="dark" bg_color="#00ccff" color="#fff" text="Round Button" title="Round Button" url="" position="left"]
function round_button_func( $atts ) {
	extract( shortcode_atts( array(
		'style' => 'dark',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'left',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"round-btn-{$style} round-btn btn-align-{$position}\">";
	$btn .= "<span>{$text}</span></a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'round_button', 'round_button_func' );

//[message type="info"]Your message goes here... [/message]
function msg_box_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => 'info',
		'bg_color' => '#f6f6f6',
		'color' => '#333',
		'start_color' => "#fff",
		'end_color' => "#eee",
		'border' => "#ccc",
		'align' => '',
		'width' => '100%',
	), $atts ) );
	$msg = '';

	if($type == 'success'){
		$msg  = '<div class="msg-success"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'success' style message box shortcode. To use this style use the following shortcode" : $content;
		$msg .= '</div></div>';
	}elseif($type == 'error'){
		$msg  = '<div class="msg-error"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'error' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'warning'){
		$msg  = '<div class="msg-warning"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'warning' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'info'){
		$msg  = '<div class="msg-info"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'info' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'about'){
		$msg  = '<div class="msg-about"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'about' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'custom'){
		$msg  = "<div style=\"width:{$width};\" class=\"msg-align-{$align}\"><div class=\"msg-custom\" style=\"background-color:{$end_color}; background: -moz-linear-gradient(center top , {$start_color}, {$end_color}); background: -webkit-gradient(linear, 0% 0%, 0% 100%, from({$start_color}), to({$end_color})); background: -webkit-linear-gradient(top, {$start_color}, {$end_color}); background: -ms-linear-gradient(top, {$start_color}, {$end_color}); background: -o-linear-gradient(top, {$start_color}, {$end_color}); border:1px {$border} solid; color:{$color};\">";
		$msg .= ($content == '') ? "This is a sample of the 'simple' style message box shortcode." : $content;
		$msg .= '</div></div><div class="clear"></div>';
	}elseif($type == 'simple'){
		$msg  = "<div class=\"msg-simple\" style=\"background-color:{$bg_color}; color:{$color};\">";
		$msg .= ($content == '') ? "This is a sample of the 'simple' style message box shortcode." : $content;
		$msg .= '</div>';
	}
	return $msg;
}
add_shortcode( 'message', 'msg_box_func' );

//[pullquote align="left"]Your quote text[/pullquote]
function pullquote_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'align' => '',
	), $atts ) );
	$quote = ($content == '' ) ? "<blockquote class=\"align-{$align}\">This is a pullquote. Lorem ipsum dolor sit amet, consectetur adipiscing elit sed pharetra aliquet metus.</blockquote>" : "<blockquote class=\"align-{$align}\">$content</blockquote>";

	return $quote;
}
add_shortcode( 'pullquote', 'pullquote_func' );

//	[toggle_content title="Toggle Title..."]Content goes here...[/toggle_content]
function toggle_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Click here to toggle content',
	), $atts ) );
	$tog_content = "<h3 class=\"slide_toggle\"><a href=\"#\">{$title}</a></h3>
					<div class=\"slide_toggle_content\">$content</div>";

	return $tog_content;
}
add_shortcode( 'toggle_content', 'toggle_func' );

//	[tabs][/tabs]
function tabs_func( $atts, $content = null ) {
	$tabs = '<div class="tabs-wrapper"><ul class="tabs">'.do_shortcode($content).'</ul></div>';
	return $tabs;
}
add_shortcode( 'tabs', 'tabs_func' );

//	[tab][/tab]
function tab_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Tab Title',
	), $atts ) );
	$rand = rand(100,999);
	$tab = '<li><a rel="tab'.$rand.'" href="javascript:void(0)"><span>'.$title.'</span></a><div id="tab'.$rand.'" class="tab-content">'.$content.'</div></li>';
	return $tab;
}
add_shortcode( 'tab', 'tab_func' );

//[accordion][/accordion]
function accordion_func( $atts, $content = null ) {
	$acc = '<div class="accordion-wrapper">'.do_shortcode($content).'<div class="clear"></div></div>';
	return $acc;
}
add_shortcode( 'accordion', 'accordion_func' );

//[accordion_content][/accordion_content]
function accordion_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Accordion Title',
	), $atts ) );
	$content = wpautop(trim($content));
	$acn = '<h3 class="accordion-toggle"><a href="#">'.$title.'</a></h3>
			<div class="accordion-container">
				<div class="content-block">'.$content.'</div>
			</div>';
	return $acn;
}
add_shortcode( 'accordion_content', 'accordion_content_func' );

//[column_content]Your content here...[/column_content]
function column_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => '',
	), $atts ) );
	$colPos = strpos($type, '_last');
	if($colPos === false){
		$cnt = '<div class="'.$type.'">'.$content.'</div>';
	}else{
		$type = substr($type,0,$colPos);
		$cnt = '<div class="'.$type.' last_column">'.$content.'</div>';
	}
	return $cnt;
}
add_shortcode( 'column_content', 'column_content_func' );


//[photogallery show=4 cols=4 cat=11]
function photogallery_func( $atts ) {
	extract( shortcode_atts( array(
		'show' => -1,
		'cols' => 4,
		'cat' => '',
	), $atts ) );

	if( $cat == '' ){
		$galCat = get_categories( array('taxonomy' => 'gallery_category') );
		foreach($galCat as $gc){
			$cats[] = $gc->slug;
		}
		$cat = implode(',',$cats);
	} //if( $cat == '' )

	$galCatAr = explode(',',$cat);
	$galImg = '';

	foreach($galCatAr as $catslug){
		if( $catslug != '' ){
			$galCat = get_term_by('slug', $catslug, 'gallery_category');
		}
	
		query_posts( array('post_type' => 'photogallery', 'posts_per_page'=> $show, 'gallery_category'=> $catslug) );
		$n = 0;
		$galImg .= '<div class="thumbgallery">';
		while ( have_posts() ) : the_post();
			if ( has_post_thumbnail()) {
				$n++;
				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
				$galImg .= '<a href="' . $image_url[0] . '" title="' . get_the_title() . '" ><img src="'.get_bloginfo('template_url').'/timthumb.php?src='.$image_url[0].'&h=130&w=130" alt="'.get_the_title().'"></a>';
				$galImg .= ($n%$cols == 0) ? '<div class="clear"></div>' : '';
			}
		endwhile; // end of the loop.
		wp_reset_query();
		$galImg .= '<div class="clear"></div>';
		$galImg .= '</div>';
	} //foreach($galCatAr as $catslug)

	return $galImg;
}
add_shortcode( 'photogallery', 'photogallery_func' );


//[photoalbum]
function photoalbum_func() {

	$albumAr = get_categories( array('taxonomy' => 'gallery_category') );
	$galImg .= '<div class="photo_album">';
	foreach($albumAr as $album){
		query_posts( array('post_type' => 'photogallery', 'posts_per_page'=> 1, 'gallery_category'=> $album->slug, 'orderby' => 'rand') );
		$galImg .= '<div class="album_categories">';
		while ( have_posts() ) : the_post();
			if ( has_post_thumbnail()) {
				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
				$galImg .= '<a href="'.get_term_link( $album->slug, 'gallery_category' ).'" title="' .$album->name . '" ><img src="'.get_bloginfo('template_url').'/timthumb.php?src='.$image_url[0].'&h=192&w=180" alt="'.$album->name.'"></a>';
			}
		endwhile; // end of the loop.
		wp_reset_query();
		$galImg .= '<h3><a href="'.get_term_link( $album->slug, 'gallery_category' ).'">'.$album->name.'</a></h3><h5>'.$album->count.' photos in album</h5><p>'.$album->description.'</p>';
		$galImg .= '</div>';
	}
	$galImg .= '<div style="clear:both;"></div>';
	$galImg .= '</div>';

	return $galImg;
}
add_shortcode( 'photoalbum', 'photoalbum_func' );


//[hr]
function hrule_func() {
	$hrule = '<div class="clear hrule"></div>';
	return $hrule;
}
add_shortcode( 'hr', 'hrule_func' );


//[hr_top]
function hr_top_func() {
	$hr_top = '<div class="clear linktotop"><a title="Top of Page" href="#top">Back to Top</a></div><div class="clear hrule"></div>';
	return $hr_top;
}
add_shortcode( 'hr_top', 'hr_top_func' );

//[dropcap]L[/dropcap]
function dropcap_func( $atts, $content = null ) {
	$dcap = '<span class="dropcap">'.$content.'</span>';
	return $dcap;
}
add_shortcode( 'dropcap', 'dropcap_func' );


//[unordered_list style="list-1"]LIST ITESMS[/unordered_list]
function unorderedlist_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => 'list-1',
	), $atts ) );
	$content = wpautop(trim($content));
	$ulist = '<ul class="'.$style.'">'.$content.'</ul>';
	return $ulist;
}
add_shortcode( 'unordered_list', 'unorderedlist_func' );

//[testimonials show=-1]
function testimonials_func( $atts ) {
	extract( shortcode_atts( array(
		'show' => -1,
	), $atts ) );

	$tmn = '<div class="testimonials-wrapper">';
	query_posts( array('post_type' => 'testimonials', 'posts_per_page'=> $show) );
	while ( have_posts() ) : the_post();
		$tmn .= '<blockquote>'.get_the_content().'<cite>-'.get_the_title().'</cite></blockquote>';
	endwhile; // end of the loop.
	wp_reset_query();
	$tmn .= '</div>';
	$tmn = wpautop(trim($tmn));
	return $tmn;
}
add_shortcode( 'testimonials', 'testimonials_func' );


// breadcrumb function
function skt_breadcrumbs() {
	/* === OPTIONS === */
	$text['home']     = ( get_option('skt_breadcrumbs_home_text') != '' ) ? get_option('skt_breadcrumbs_home_text') : 'Home'; // text for the 'Home' link
	$text['category'] = 'Archive by Category "%s"'; // text for a category page
	$text['search']   = 'Search Results for "%s" Query'; // text for a search results page
	$text['tag']      = 'Posts Tagged "%s"'; // text for a tag page
	$text['author']   = 'Articles Posted by %s'; // text for an author page
	$text['404']      = 'Error 404'; // text for the 404 page

	$show_current   = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show
	$show_on_home   = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
	$show_title     = 1; // 1 - show the title for the links, 0 - don't show
	$delimiter      = ' &raquo; '; // delimiter between crumbs
	$before         = '<span class="current">'; // tag before the current crumb
	$after          = '</span>'; // tag after the current crumb
	/* === END OF OPTIONS === */

	global $post;
	$home_link    = home_url('/');
	$link_before  = '<span typeof="v:Breadcrumb">';
	$link_after   = '</span>';
	$link_attr    = ' rel="v:url" property="v:title"';
	$link         = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
	$parent_id    = $parent_id_2 = $post->post_parent;
	$frontpage_id = get_option('page_on_front');

	if (is_home() || is_front_page()) {

		if ($show_on_home == 1) echo '<div class="breadcrumbs"><a href="' . $home_link . '">' . $text['home'] . '</a></div>';

	} else {

		echo '<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">';
		if ($show_home_link == 1) {
			echo sprintf($link, $home_link, $text['home']);
			if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;
		}

		if ( is_category() ) {
			$this_cat = get_category(get_query_var('cat'), false);
			if ($this_cat->parent != 0) {
				$cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
				if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
				$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
				$cats = str_replace('</a>', '</a>' . $link_after, $cats);
				if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
				echo $cats;
			}
			if ($show_current == 1) echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;

		} elseif ( is_search() ) {
			echo $before . sprintf($text['search'], get_search_query()) . $after;

		} elseif ( is_day() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
			echo $before . get_the_time('d') . $after;

		} elseif ( is_month() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo $before . get_the_time('F') . $after;

		} elseif ( is_year() ) {
			echo $before . get_the_time('Y') . $after;

		} elseif ( is_single() && !is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
				if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, $delimiter);
				if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
				$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
				$cats = str_replace('</a>', '</a>' . $link_after, $cats);
				if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
				echo $cats;
				if ($show_current == 1) echo $before . get_the_title() . $after;
			}

		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;

		} elseif ( is_attachment() ) {
			$parent = get_post($parent_id);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, $delimiter);
			$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
			$cats = str_replace('</a>', '</a>' . $link_after, $cats);
			if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
			echo $cats;
			printf($link, get_permalink($parent), $parent->post_title);
			if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

		} elseif ( is_page() && !$parent_id ) {
			if ($show_current == 1) echo $before . get_the_title() . $after;

		} elseif ( is_page() && $parent_id ) {
			if ($parent_id != $frontpage_id) {
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					if ($parent_id != $frontpage_id) {
						$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
					}
					$parent_id = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				for ($i = 0; $i < count($breadcrumbs); $i++) {
					echo $breadcrumbs[$i];
					if ($i != count($breadcrumbs)-1) echo $delimiter;
				}
			}
			if ($show_current == 1) {
				if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;
				echo $before . get_the_title() . $after;
			}

		} elseif ( is_tag() ) {
			echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;

		} elseif ( is_author() ) {
	 		global $author;
			$userdata = get_userdata($author);
			echo $before . sprintf($text['author'], $userdata->display_name) . $after;

		} elseif ( is_404() ) {
			echo $before . $text['404'] . $after;
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '<div style="clear:both;"></div>';
		echo '</div><!-- .breadcrumbs -->';

	}
} // end skt_breadcrumbs()


// contact request form
function contact_request_form(){
	?>
	<style type="text/css">
    .errormsg{color:#e00; border:1px #e00 solid;}
    .successmsg{color:#090; border:1px #090 solid; padding:5px 10px;}
    </style>
    <?php 
    if( isset($_POST['bt_submit']) && $_POST['bt_submit'] == 'Submit'){
    
        $fname 		= trim($_POST['cont_fname']);
        $lname 		= trim($_POST['cont_lname']);
        $email 		= trim($_POST['cont_email']);
        $phone 		= trim($_POST['cont_phone']);
        $message 	= trim($_POST['cont_message']);
    
        $error = array();
    
        if($fname == '')
            $error['fname'] = "Enter first name";
        if($lname == '')
            $error['lname'] = "Enter last name";
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            $error['email'] = "Email is not valid. Please correct";
        if($message == '')
            $error['message'] = "Type some text in message";
        if( $_POST['cont_captchaVerify'] != md5($_POST['cont_captcha']) )
            $error['captcha'] = "Invalid Captcha. Please Correct";
    
        if( count($error) > 0){
            echo '<ul class="errormsg">';
            foreach($error as $err){
                echo '<li>'.$err.'</li>';
            }
            echo '</ul>';
        }else{
            $message = "Following request has been received \n\n";
            $message .= "Name : $fname $lname \n" ;
            $message .= "Email : $email \n" ;
            $message .= "Contact No. : $phone \n" ;
            $message .= "Message : $message \n" ;
        
            $to = ( get_option('skt_contact_recipient_email') != '' ) ? '<strong>'.get_option('skt_contact_recipient_email').'</strong><br />' : get_bloginfo('admin_email') ;
			$emArr = explode(',',$to);
            $subject = "Contact request from website - ".get_bloginfo('name') ;
        
            $headers .= "From:$fname<$email>\r\n";
            
			foreach($emArr as $em){
	            $check = @mail($em,$subject,$message,$headers);
        	}

            if ($check){
                echo "<script type=\"text/javascript\">window.location='".get_permalink()."?sent=1'</script>";
            }
        }
    } //  if($_POST['bt_submit']) closed here
    
    if( $_REQUEST['sent'] == 1 )
        echo '<p class="successmsg">Thank you. Your message has been received.</p>';
    ?>
    
    <form onSubmit="return checkContact();" name="contact" class="contact_request_form" action="" method="post" >
        <p>
            <input type="text" autocomplete="off" onfocus="if(this.value=='First Name')this.value='';if(this.value=='First Name')this.value='';" onblur="if(this.value=='')this.value='First Name';" class="namefield" value="<?php echo ($fname != '') ? $fname : 'First Name' ;?>" id="cont_fname" name="cont_fname" />
            <input type="text"  autocomplete="off" onfocus="if(this.value=='Last Name')this.value='';if(this.value=='Last Name')this.value='';" onblur="if(this.value=='')this.value='Last Name';" class="namefield" value="<?php echo ($lname != '') ? $lname : 'Last Name';?>" id="cont_lname" name="cont_lname" />
        </p>
        <p>
            <input type="text" autocomplete="off" onfocus="if(this.value=='Your Email')this.value='';if(this.value=='Your Email')this.value='';" onblur="if(this.value=='')this.value='Your Email';" class="emailfield" value="<?php echo ($email != '') ? $email : 'Your Email';?>" id="cont_email" name="cont_email" />
            <input type="text"  autocomplete="off" onfocus="if(this.value=='Your Contact Number')this.value='';if(this.value=='Your Contact Number')this.value='';" onblur="if(this.value=='')this.value='Your Contact Number';"  class="phonefield" value="<?php echo ($phone != '') ? $phone : 'Your Contact Number';?>" id="cont_phone" maxlength="14" name="cont_phone" />
        </p>
        <p>
            <textarea type="text" onfocus="if(this.innerHTML=='Message')this.innerHTML='';if(this.innerHTML=='Message')this.innerHTML='';" onblur="if(this.innerHTML=='')this.innerHTML='Message';" class="msgarea" id="cont_message" name="cont_message"><?php echo ($message != '') ? $message : 'Message'; ?></textarea>
        </p>
        <p>
            <?php
                $length = 5;
                $randomNum = rand(100, 999);
                $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
                $string = "";
                for ($p = 0; $p < $length; $p++){
                    $string .= $characters[mt_rand(0, strlen($characters))];
                }
                $pwd = $string.$randomNum;

				$upDirArr = wp_upload_dir();
				$uploadDir = $upDirArr['basedir'];
				$imgDir = $upDirArr['baseurl'];

                $im = @imagecreate(110, 25)
                or die("Cannot Initialize new GD image stream");
                $background_color = @imagecolorallocate($im, 150, 150, 150);
                $text_color = @imagecolorallocate($im, 245, 245, 245);
                @imagestring($im, 5, 15, 5, $pwd, $text_color);
                @imagepng($im, $uploadDir.'/rand.jpg');
                @imagedestroy($im);
            ?>
            <img class="captchaimg" src="<?php echo $imgDir;?>/rand.jpg" />
            <input type="text" autocomplete="off" onfocus="if(this.value=='Type catpcha code')this.value='';if(this.value=='Type catpcha code')this.value='';" onblur="if(this.value=='')this.value='Type catpcha code';" class="captchafield" value="Type catpcha code" id="cont_captcha" name="cont_captcha">
            <input type="hidden" value="<?php echo md5($pwd);?>" name="cont_captchaVerify" id="cont_captchaVerify">
        </p>    
        <p>
            <input type="submit" name="bt_submit" value="Submit" class="submitBtnContact" />
        </p>
    </form>
    
    <?php
}//contact_request_form()


// exclude blog category function
function exclude_blog_cat(){
	$excAr = array();
	global $wpdb; // you may not need this part. Try with and without it
	$sqlExc = mysql_query("SELECT option_name, option_value FROM `".$wpdb->prefix."options` WHERE `option_name` like 'skt_blog_exclude_cat_%' AND `option_value`='true'");
	while( $rowExc = mysql_fetch_array($sqlExc) ){
		$catIdAr = explode('skt_blog_exclude_cat_',$rowExc['option_name']);
		$excAr[] = '-'.$catIdAr[1];
	}
	$exclude = implode(',',$excAr);
	
	return $exclude;
}


function new_excerpt_length() {
	$explength = get_option('skt_blog_excerpt_length');
    return $explength;
}
add_filter('excerpt_length', 'new_excerpt_length');


function new_excerpt_more() {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


function show_post_thumb(){
	$imgOut = '';
	$postThumb 	= get_option('skt_post_thumb');
	$thumbAlign	= 'align'.strtolower( get_option('skt_post_thumb_align') );
	$thumbWd	= get_option('skt_post_thumb_width');
	$thumbHt	= get_option('skt_post_thumb_height');
	$timthumb	= get_option('skt_post_timthumb');
	if ( has_post_thumbnail() && $postThumb == 'true') {
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		$imgOut .= '<a href="'.get_permalink().'" title="'.the_title_attribute('echo=0').'" >';
		if($timthumb == 'true'){
			$imgOut .= '<img class="'.$thumbAlign.'" src="'.get_bloginfo('template_url').'/timthumb.php?src='.$large_image_url[0].'&h='.$thumbHt.'&w='.$thumbWd.'&q=80&zc=3" />';
		}else{
			$imgOut .= get_the_post_thumbnail($post->ID, array($thumbWd,$thumbHt), array('class' => $thumbAlign) );
		}
		$imgOut .= '</a>'; 
	}
	return $imgOut;
}


// blog sidebar class function
function blog_sidebar_class(){
	//global $wp_query;
	//$template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
	//if($template_name == 'page-templates/blog-posts.php'){
	
		$blogSidebar = get_option('skt_blog_sidebar_position');
		if($blogSidebar == 'Left'){
			$blogSidebar = 'sidebar_left';
		}elseif($blogSidebar == 'Right'){
			$blogSidebar = 'sidebar_right';
		}else{
			$blogSidebar = '';
		}
		$attrSbar = $blogSidebar; //($blogSidebar != '' ) ? ' style="float:'.$blogSidebar.';" ' : '';
	//}
	return $attrSbar;
}


// blog content class function
function blog_content_class(){
	$blogSidebar = get_option('skt_blog_sidebar_position');
	if($blogSidebar == 'Left'){
		$contentClass = 'content_right';
	}elseif($blogSidebar == 'Right'){
		$contentClass = 'content_left';
	}else{
		$contentClass = '';
	}
	
	return $contentClass;
}


// remove all post formats and set standard only
add_action('after_setup_theme', 'remove_post_formats', 11);
function remove_post_formats() {
    remove_theme_support('post-formats');
    add_theme_support( 'post-formats', array( 'Standard' ) );
}

// print guestbook comment function
function guestbook_comment_list( $postid = '' ){
	$postid = ( $postid == '' ) ? get_the_ID() : $postid;
	$postType = get_post_type( $postid );
	$cmnt = get_comments(  array( 'post_type' => $postType, 'post_id' => $postid, 'status' => 'approve', 'number' => '5' )  ); 
	
	foreach($cmnt as $comment){
		$author		= $comment->comment_author;
		$date		= $comment->comment_date;
		$comment	= $comment->comment_content;
		$commentId	= $comment->comment_ID;
		echo '<p id="guestcomment'.$commentId.'"><em>'.$author.' ~ '.$date.'</em><br>'.$comment.'</p><br />';
	}
}


// add custom script js to footer
function add_skt_script_footer(){ ?>
	<!--<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/lightbox/jquery.js"></script>-->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/lightbox/jquery.lightbox-0.5.js"></script>
	<script type="text/javascript">
	var s = jQuery.noConflict();
	s(function() {
		s( ".thumbgallery" ).each(function( index ) {
			s(this).addClass("gallery"+index);
			s(".gallery"+index+" a").lightBox();
		});
		
	});
	</script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/lightbox/jquery.lightbox-0.5.css">

    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/skt_script.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.cycle.all.min.js"></script>
    
    <!-- code syntax highlighter script // -->
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/codehighlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/codehighlighter/scripts/shBrushPhp.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/codehighlighter/styles/shCoreDefault.css"/>
    <script type="text/javascript">SyntaxHighlighter.all();</script>
    <!-- // code syntax highlighter script -->
<?php
	if ( get_option('skt_google_analytics') != '' ) { echo stripslashes(get_option('skt_google_analytics')); }

} 
add_action('wp_footer', 'add_skt_script_footer');
// END custom script js to footer

//[code type=php]
function highlight_code_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => 'php',
	), $atts ) );

	$hlCode = '<pre class="brush: php;">' . str_replace( array('<pre>','</pre>'), array('&lt;pre&gt;','&lt;/pre&gt;'), $content ) . '</pre>';;

	return $hlCode;
}
add_shortcode( 'code', 'highlight_code_func' );

function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt;
  return $excerpt;
}

?>