<?php
/*---------------------------------------------------------------*/
/* Theme Header Output - wp_head() */
/*---------------------------------------------------------------*/

// This sets up the layouts and styles selected from the options panel

if (!function_exists('siteoptions_wp_head')) {
	function siteoptions_wp_head() { 
		$shortname = "ka";
		$GLOBALS['main_stylesheet'] = get_option('skt_main_scheme');
		$GLOBALS['secondary_stylesheet'] = get_option('skt_secondary_scheme');
		$GLOBALS['responsive'] = get_option('skt_responsive');
	    
		//Styles
	          
			
	        if($GLOBALS['main_stylesheet'] != '')
	               echo '<link href="'. SKTTHEMES_CSS . $GLOBALS['main_stylesheet'] .'.css'.'" rel="stylesheet" type="text/css" />'."\n";
				   
			if($GLOBALS['main_stylesheet'] == '')
	               echo '<link href="'. SKTTHEMES_CSS . 'sktt-dark' .'.css'.'" rel="stylesheet" type="text/css" />'."\n"; 
				   
	          if($GLOBALS['secondary_stylesheet'] != 'default')
	               echo '<link href="'. SKTTHEMES_CSS . $GLOBALS['secondary_stylesheet'] .'.css'.'" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="'. get_stylesheet_directory_uri() . '/style.css' .'" rel="stylesheet" type="text/css" />'."\n"; 
			
			if($GLOBALS['responsive'] == 'false')
	    echo '<link href="'. get_template_directory_uri() .'/css/_mobile.css'.'" rel="stylesheet" type="text/css" media="screen" />'."\n";
		
		//Check for WooCommerce and display Stylesheet
		if (class_exists('woocommerce')){
		echo '<link href="'. get_template_directory_uri() . '/css/_woocommerce.css' .'" rel="stylesheet" type="text/css" media="screen" />'."\n";
		}
				               
	     }       
			
	}
add_action('wp_head', 'siteoptions_wp_head');


/*---------------------------------------------------------------*/
/*	 Custom Login Logo
/*---------------------------------------------------------------*/
function skthemes_custom_login_logo(){
        global $ttso;
		$loginlogo = $ttso->skt_loginlogo;
        echo '<style type="text/css">
            .login h1 a { background-image:url('.$loginlogo.') !important;background-size:inherit !important; }
        </style>';
}
add_action('login_head', 'skthemes_custom_login_logo');
    
    

/*---------------------------------------------------------------*/
/*	 Custom Login Logo URL
/*---------------------------------------------------------------*/
function skthemes_change_wp_login_url() {
   //since version 3.0
   $wordpress_version = get_bloginfo('version');
   if($wordpress_version > '3.3.4'){
    return site_url();
   }   
}
add_filter('login_headerurl', 'skthemes_change_wp_login_url');
    
function skthemes_change_wp_login_title() {

   //updated version 2.7.0
   $wordpress_version = get_bloginfo('version');
   if($wordpress_version >= '3.3.4'){
    return get_option('blogname');
   }else{
    echo get_option('blogname');
   }
}
add_filter('login_headertitle', 'skthemes_change_wp_login_title');




/*
* function to push in custom css font color and font-size etc..
* for use in skthemes_settings_css()
* @since version 2.6 development
* @param string $option_value, assigned option value from database
* @param string $css_code, for custom css code.
*/
function skthemes_push_custom_css($option_value,$css_code){

global $css_array;

	if($option_value!=''&&$option_value!='--select--'){	
	 $option_value_code = $css_code;
	 array_push($css_array,$option_value_code);	
	}


}

/*
* function to push in custom font type.
* for use in skthemes_settings_css()
* @since version 2.6 development
* @param string $option_value, option value from database
* @paran string $css_code, for custom css font code
*/
function skthemes_push_custom_font($option_value,$css_code){
global $css_array;
global $css_link_container;
$google_font_types = array(
				'Droid+Sans',
				'Cabin',
				'Cantarell',
				'Cuprum',
				'Oswald',
				'Neuton',
				'Orbitron',
				'Arvo',
				'Kreon',
				'Indie+Flower',
				'Josefin Sans'
				);
	
    if( ($option_value != 'nofont' && $option_value != '')){
	        $custom_logo_font_link = '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family='.$option_value.'" />'."\n";	
			$custom_logo_font_code = $css_code;			
			//check if font is google font, if yes, we provide font link
			if(in_array($option_value,$google_font_types)){
			
				if(!in_array($custom_logo_font_link,$css_link_container)){
				//check if already in link container, if not then we add the css link.
				array_push($css_link_container,$custom_logo_font_link);
				}
				
			}
				
			array_push($css_array,$custom_logo_font_code);
	 }

}


/*
*  set global css array and css link container
*  for use in skthemes_setting_css() and skthemes_push_custom_css
*  @since version 2.6 development
*/

if(!isset($css_array)){
$css_array = array();
}

if(!isset($css_link_container)){
$css_link_container = array();
}

/*---------------------------------------------------------------*/
/* Custom CSS Output */
/*---------------------------------------------------------------*/

function skthemes_settings_css(){
//modified version 2.6 development

global $css_array;
global $css_link_container;

//get all css settings
global $ttso;
//htmlspecialchars_decode and stripslashes function added in version 3.0.2 to prevent sanitize of custom css codes!
$custom_css = htmlspecialchars_decode(stripslashes($ttso->skt_custom_css),ENT_QUOTES);
$dropdown_css = $ttso->skt_dropdown;
$nav_description = $ttso->skt_nav_description;
$google_font = $ttso->skt_google_font;
$custom_google_font = $ttso->skt_custom_google_font;
$blog_image_frame = $ttso->skt_blog_image_frame;

$boxedlayout_shadow = $ttso->skt_boxedlayout_shadow;
$body_bg_color = $ttso->skt_body_bg_color;
$body_bg_image = $ttso->skt_body_bg_image;
$body_bg_image_select = $ttso->skt_select_body_bg;
$body_designer_page_background_position = $ttso->skt_designer_page_background_position;
$body_designer_page_background_repeat = $ttso->skt_designer_page_background_repeat;

//push in css if not empty from setting

    //custom css
	if(!empty($custom_css)){
     array_push($css_array,$custom_css);
	}

	
	//navigation css
	if($dropdown_css!='false'){
		$drop_css_code = '#menu-main-nav li .drop {display:none !important;}#menu-main-nav li.parent:hover {background:transparent url('.get_template_directory_uri().'/images/_global/seperator-main-nav.png) 0 50% no-repeat !important;}#menu-main-nav li {padding: 3px 31px 5px 13px;}#menu-main-nav li.parent, #menu-main-nav li.parent:hover{padding: 3px 31px 5px 13px !important;}*:first-child+html .big-banner #menu-main-nav {margin-bottom:16px;}';
		array_push($css_array,$drop_css_code);	
	}
	
	if($nav_description!= 'false'){
	$nav_css_code = '#menu-main-nav a .navi-description{display:none !important;}
	#menu-main-nav li strong {height:40px !important;}
	#menu-main-nav .drop {top: 41px;}
	#menu-main-nav {margin-top:12px;}
	*:first-child+html .big-banner #menu-main-nav {margin-bottom:16px;}
	#menu-main-nav li {background:none !important;padding-right:20px !important;}';
	  array_push($css_array,$nav_css_code);
	}	
	
		if($dropdown_css != 'false' && $nav_description != 'false'){
	$nav_com_css = '#menu-main-nav li {background:none !important;padding-right:20px !important;}#menu-main-nav li.parent:hover{background: none !important;}#menu-main-nav li.parent, #menu-main-nav li.parent:hover{background:none !important;padding-right:20px !important;}';
	     array_push($css_array,$nav_com_css);		
		}
		
	//google font css
    if( ($google_font != 'nofont' && $custom_google_font == '')){
	        $google_font_link = '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$google_font.'" />'."\n";	
			$google_font_code = 'h1, h2, h3, h4, h5 #main .comment-title, .four_o_four, .callout-wrap span, .search-title,.callout2, .comment-author-about, .logo-text {font-family:\''.$google_font.'\', Arial, sans-serif;}'."\n";
			array_push($css_link_container,$google_font_link);
			array_push($css_array,$google_font_code);
			  }
	
	if($custom_google_font != ''){
	
	        //remove space and add + sign if there is space found in user entered custom font name.
	        //the google font name in css link has a plus sign.
	        $custom_google_font_name = str_replace(" ","+",$custom_google_font); 
	
	        $google_custom_link =  '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$custom_google_font_name.'">'."\n";	
	        
	        $sanitize = array('+','-'); //some font name have plus parameter, such as Special+Elite
            // remove the plus and add space to custom font name, if there is a plus between the font name.
	        $sanitized_google_font_name = str_replace($sanitize,' ',$custom_google_font);
	        //the google font name in css item, does not have plus sign and needs a space.
	        
			$google_custom_font_code = 'h1, h2, h3, h4, h5 #main .comment-title, .four_o_four, .callout-wrap span, .search-title,.callout2, .comment-author-about, .logo-text {font-family:\''.$sanitized_google_font_name.'\', Arial, sans-serif;}'."\n";
			array_push($css_link_container,$google_custom_link);
			array_push($css_array,$google_custom_font_code);			
			 }
			 
			 
			 //blog shadow frame
			 if($blog_image_frame == 'shadow'){
	$nav_com_css = '.post_thumb {background-position: -4px -1470px !important;}';
	     array_push($css_array,$nav_com_css);		
		}

/*--------------------------------------------------------------------*/
/* Theme Designer */
/*--------------------------------------------------------------------*/

//body bg color	
	 $custom_body_bg_code = 'body,html{background-color:'.$body_bg_color.' !important;}';
	 skthemes_push_custom_css($body_bg_color,$custom_body_bg_code);

//added check in version 3.0.2, to prevent image url with null.png causing image link error in error console.
if($body_bg_image_select!='null'):
	 
	 //body bg image - user selected from pre-defined images	
	 $custom_body_image_select_code = 'body,html{background-image:url('.get_template_directory_uri().'/images/body-backgrounds/'.$body_bg_image_select.'.png) !important;background-position:'.$body_designer_page_background_position.' !important;background-repeat:'.$body_designer_page_background_repeat.' !important;}';
	 skthemes_push_custom_css($body_bg_image_select,$custom_body_image_select_code);
	 
endif;
	 
	 //body bg image - custom upload	
	 $custom_body_image_code = 'body,html{background-image:url('.$body_bg_image.') !important;background-repeat:repeat !important;background-position:'.$body_designer_page_background_position.' !important;background-repeat:'.$body_designer_page_background_repeat.' !important;}';
	 skthemes_push_custom_css($body_bg_image,$custom_body_image_code);


//boxed layout drop shadow
	 $custom_boxedlayout_shadow_code = '#tt-boxed-layout {-moz-box-shadow: 0 0 20px 0 rgba(0, 0, 0, '.$boxedlayout_shadow.');-webkit-box-shadow: 0 0 20px 0 rgba(0, 0, 0, '.$boxedlayout_shadow.');box-shadow: 0 0 20px 0 rgba(0, 0, 0, '.$boxedlayout_shadow.');}';
	 skthemes_push_custom_css($boxedlayout_shadow,$custom_boxedlayout_shadow_code);
	 

	//custom logo font color
	 $custom_logo_font_color = $ttso->skt_custom_logo_font_color;	
	 $custom_logo_font_color_code = '.logo-text{color:'.$custom_logo_font_color.'!important;}';
	 skthemes_push_custom_css($custom_logo_font_color,$custom_logo_font_color_code);


	/* main_content_background_color
	$main_content_background_color = $ttso->skt_main_content_background_color;
	$main_content_background_code = '#main{background-color:'.$main_content_background_color.'!important;}';	
	skthemes_push_custom_css($main_content_background_color,$main_content_background_code); */
	
	
	//main_navigation_color
	$main_navigation_color = $ttso->skt_main_menu_font_color;
	$main_navigation_color_code = '#menu-main-nav li strong, #menu-main-nav .navi-description, #menu-main-nav .sub-menu li a span,#menu-main-nav .sub-menu .sub-menu li a span, #menu-main-nav a:hover span, #menu-main-nav li.current_page_item a span, #menu-main-nav li.current_page_parent a span, #menu-main-nav li.current-page-ancestor a span, #menu-main-nav .drop ul li.current-menu-item a, #menu-main-nav .drop ul li.current-menu-item a span, #menu-main-nav .drop ul .drop ul li.current-menu-item a, #menu-main-nav .drop ul .drop ul li.current-menu-item a span{color:'.$main_navigation_color.'!important;}';	
	skthemes_push_custom_css($main_navigation_color,$main_navigation_color_code);
	
	
	//side_navigation_color
	$side_navigation_color = $ttso->skt_side_menu_font_color;
	$side_navigation_color_code = '#sub_nav .sub-menu li a span{color:'.$side_navigation_color.'!important;}';	
	skthemes_push_custom_css($side_navigation_color,$side_navigation_color_code);	
	

	//Headers color
	$h1_color = $ttso->skt_h1_font_color;
	$h1_color_code = 'h1{color:'.$h1_color.'!important;}';	
	skthemes_push_custom_css($h1_color,$h1_color_code);
	
	$h2_color = $ttso->skt_h2_font_color;
	$h2_color_code = 'h2{color:'.$h2_color.'!important;}';	
	skthemes_push_custom_css($h2_color,$h2_color_code);

	$h3_color = $ttso->skt_h3_font_color;
	$h3_color_code = 'h3{color:'.$h3_color.'!important;}';	
	skthemes_push_custom_css($h3_color,$h3_color_code);
	
	$h4_color = $ttso->skt_h4_font_color;
	$h4_color_code = 'h4{color:'.$h4_color.'!important;}';	
	skthemes_push_custom_css($h4_color,$h4_color_code);	
	
	$h5_color = $ttso->skt_h5_font_color;
	$h5_color_code = 'h5{color:'.$h5_color.'!important;}';	
	skthemes_push_custom_css($h5_color,$h5_color_code);
	
	$h6_color = $ttso->skt_h6_font_color;
	$h6_color_code = 'h6{color:'.$h6_color.'!important;}';	
	skthemes_push_custom_css($h6_color,$h6_color_code);
	
	
	//main_content_font_color
	$main_content_font_color = $ttso->skt_main_content_font_color;
	$main_content_font_code = '#content p, .content_full_width p, .home-banner-main p, .contact-form label{color:'.$main_content_font_color.'!important;}
	#content .colored_box p, .content_full_width .colored_box p {color: #FFF !important;}';	
	skthemes_push_custom_css($main_content_font_color,$main_content_font_code);	
	
	
	//footer_content_font_color
	$footer_content_font_color = $ttso->skt_footer_content_font_color;
	$footer_content_font_code = '#footer, #footer ul li a, #footer ul li, #footer h3{color:'.$footer_content_font_color.'!important;}';	
	skthemes_push_custom_css($footer_content_font_color,$footer_content_font_code);	

	//link_font_color
	$link_font_color = $ttso->skt_link_font_color;
	$link_font_code = 'a{color:'.$link_font_color.'!important;}';	
	skthemes_push_custom_css($link_font_color,$link_font_code);
					

	//link_hover_font_color
	$link_hover_font_color = $ttso->skt_link_hover_font_color;
	$link_hover_font_code = 'a:hover{color:'.$link_hover_font_color.'!important;}';	
	skthemes_push_custom_css($link_hover_font_color,$link_hover_font_code);

//font sizes


	//custom logo font size
	$custom_logo_font_size = $ttso->skt_custom_logo_font_size;
	$custom_logo_font_code = '.logo-text{font-size:'.$custom_logo_font_size.'!important;}';
	skthemes_push_custom_css($custom_logo_font_size,$custom_logo_font_code);
	
	
	//main content font size
	$main_content_font_size = $ttso->skt_main_content_font_size;
	$main_content_font_size_code = '#main{font-size:'.$main_content_font_size.'!important;}';
	skthemes_push_custom_css($main_content_font_size,$main_content_font_size_code);	


	//main navigation font size
	$main_menu_font_size = $ttso->skt_main_menu_font_size;
	$main_menu_font_size_code = '#menu-main-nav, #menu-main-nav li a span strong{font-size:'.$main_menu_font_size.'!important;}';
	skthemes_push_custom_css($main_menu_font_size,$main_menu_font_size_code);

	
	//side navigation font size
	$side_menu_font_size = $ttso->skt_side_menu_font_size;
	$side_menu_font_size_code = '#sub_nav{font-size:'.$side_menu_font_size.'!important;}';
	skthemes_push_custom_css($side_menu_font_size,$side_menu_font_size_code);
	

	//Header's font size
	$h1_font_size = $ttso->skt_h1_font_size;
	$h1_font_size_code = 'h1{font-size:'.$h1_font_size.'!important;}';
	skthemes_push_custom_css($h1_font_size,$h1_font_size_code);

	$h2_font_size = $ttso->skt_h2_font_size;
	$h2_font_size_code = 'h2{font-size:'.$h2_font_size.'!important;}';
	skthemes_push_custom_css($h2_font_size,$h2_font_size_code);

	$h3_font_size = $ttso->skt_h3_font_size;
	$h3_font_size_code = 'h3{font-size:'.$h3_font_size.'!important;}';
	skthemes_push_custom_css($h3_font_size,$h3_font_size_code);


	$h4_font_size = $ttso->skt_h4_font_size;
	$h4_font_size_code = 'h4{font-size:'.$h4_font_size.'!important;}';
	skthemes_push_custom_css($h4_font_size,$h4_font_size_code);
	
	
	$h5_font_size = $ttso->skt_h5_font_size;
	$h5_font_size_code = 'h5{font-size:'.$h5_font_size.'!important;}';
	skthemes_push_custom_css($h5_font_size,$h5_font_size_code);	

	$h6_font_size = $ttso->skt_h6_font_size;
	$h6_font_size_code = 'h6{font-size:'.$h6_font_size.'!important;}';
	skthemes_push_custom_css($h6_font_size,$h6_font_size_code);


	$footer_content_font_size = $ttso->skt_footer_content_font_size;
	$footer_content_font_size_code = '#footer{font-size:'.$footer_content_font_size.'!important;}';
	skthemes_push_custom_css($footer_content_font_size,$footer_content_font_size_code);


//font types	
	
	//custom logo font type
	$custom_logo_font = $ttso->skt_custom_logo_font;
	$custom_logo_font_code = '.logo-text {font-family:\''.$custom_logo_font.'\', Arial, sans-serif;}'."\n";	
	skthemes_push_custom_font($custom_logo_font,$custom_logo_font_code);	
	
	//main_content_font
	$main_content_font = $ttso->skt_main_content_font;
	$main_content_font_code = '#main{font-family:\''.$main_content_font.'\', Arial, sans-serif;}'."\n";		
	skthemes_push_custom_font($main_content_font,$main_content_font_code);	
	
	//main navigation font type
	$main_navigation_font = $ttso->skt_main_navigation_font;
	$main_navigation_font_code = '#menu-main-nav{font-family:\''.$main_navigation_font.'\', Arial, sans-serif;}'."\n";		
	skthemes_push_custom_font($main_navigation_font,$main_navigation_font_code);


	//side navigation font type
	$side_navigation_font = $ttso->skt_sidebar_menu_font;
	$side_navigation_font_code = '#sub_nav{font-family:\''.$side_navigation_font.'\', Arial, sans-serif;}'."\n";		
	skthemes_push_custom_font($side_navigation_font,$side_navigation_font_code);
	
	
	//Header's font type
	$h1_font = $ttso->skt_h1_font;
	$h1_font_code = 'h1{font-family:\''.$h1_font.'\', Arial, sans-serif;}'."\n";	
	skthemes_push_custom_font($h1_font,$h1_font_code);		
	
	$h2_font = $ttso->skt_h2_font;
	$h2_font_code = 'h2{font-family:\''.$h2_font.'\', Arial, sans-serif;}'."\n";	
	skthemes_push_custom_font($h2_font,$h2_font_code);		
	
	$h3_font = $ttso->skt_h3_font;
	$h3_font_code = 'h3{font-family:\''.$h3_font.'\', Arial, sans-serif;}'."\n";	
	skthemes_push_custom_font($h3_font,$h3_font_code);	
	
	$h4_font = $ttso->skt_h4_font;
	$h4_font_code = 'h4{font-family:\''.$h4_font.'\', Arial, sans-serif;}'."\n";	
	skthemes_push_custom_font($h4_font,$h4_font_code);		
	
	$h5_font = $ttso->skt_h5_font;
	$h5_font_code = 'h5{font-family:\''.$h5_font.'\', Arial, sans-serif;}'."\n";	
	skthemes_push_custom_font($h5_font,$h5_font_code);		
	
	$h6_font = $ttso->skt_h6_font;
	$h6_font_code = 'h6{font-family:\''.$h6_font.'\', Arial, sans-serif;}'."\n";	
	skthemes_push_custom_font($h6_font,$h6_font_code);		
	
	$footer_content_font = $ttso->skt_footer_content_font;
	$footer_content_font_code = '#footer{font-family:\''.$footer_content_font.'\', Arial, sans-serif;}'."\n";	
	skthemes_push_custom_font($footer_content_font,$footer_content_font_code);		
	
	
	
	
	
		
					  
			  
//construct items and links to print in <head>			

//if not empty css_link_container
    if(!empty($css_link_container)){
       foreach($css_link_container as $css_link){
        echo $css_link."\n";
       }
    }		
	
//if not empty $css_array, print it out in <head>	
	/*if(!empty($css_array)){
	  echo "<!--styles generated by site options-->\n";
	  echo"<style type='text/css'>\n";
	        foreach($css_array as $css_item){
	         echo $css_item."\n";	        
	        }
	  echo"</style>\n";
	}*/

}
add_action('wp_head','skthemes_settings_css',90);




/*---------------------------------------------------------------*/
/* Add Favicon
/*---------------------------------------------------------------*/

function sktt_favicon() {
	$GLOBALS['favicon'] = get_option('skt_favicon');
	          if($GLOBALS['favicon'] != '')
	        echo '<link rel="shortcut icon" href="'.  $GLOBALS['favicon'] .'"/>'."\n";
	    }

add_action('wp_head', 'sktt_favicon');




/*-----------------------------------------------------------------------------------
Add drag-to-share to footer (if_enabled) // moved codes to javascript.php
----------------------------------------------------------------------------------- */




/*---------------------------------------------------------------*/
/* Add analytics code to footer */
/*---------------------------------------------------------------*/

function sktt_analytics(){
	
	$GLOBALS['google'] = get_option('skt_google_analytics');
	          if($GLOBALS['google'] != '')
		echo stripslashes($GLOBALS['google']) . "\n";
}
add_action('wp_footer','sktt_analytics');



/*---------------------------------------------------------------*/
/* Hide Meta Boxes (if_enabled) */
/*---------------------------------------------------------------*/
function sktt_metaboxes(){
	$GLOBALS['hide_metaboxes'] = get_option('skt_hidemetabox');
	          if($GLOBALS['hide_metaboxes'] == "true"){
				  
				  
/* pages */
remove_meta_box('commentstatusdiv','page','normal'); // Comments
remove_meta_box('commentsdiv','page','normal'); // Comments
remove_meta_box('trackbacksdiv','page','normal'); // Trackbacks
remove_meta_box('postcustom','page','normal'); // Custom Fields
remove_meta_box('authordiv','page','normal'); // Author
//remove_meta_box('slugdiv','page','normal'); // Slug

/* posts */
remove_meta_box('commentsdiv','post','normal'); // Comments
remove_meta_box('postcustom','post','normal'); // Custom Fields
//remove_meta_box('slugdiv','post','normal'); // Slug

		
}
}
add_action('admin_menu','sktt_metaboxes',90);
function sktt_css_hide_slug_metabox(){
	$GLOBALS['hide_metaboxes'] = get_option('skt_hidemetabox');
	          if($GLOBALS['hide_metaboxes'] == "true"){
	echo"<style>#slugdiv, #slugdiv-hide, label[for='slugdiv-hide']{display:none!important;}</style>";
	}          
}
add_action('admin_head','sktt_css_hide_slug_metabox');


/*
* function to auto update WordPress (allow people to post comments on new articles) setting, under WordPress admin settings/discussion.
* 
* checks for user setting in site option.
* @since version 2.6 development
*
*/
function skthemes_disable_comments(){
if(is_admin()):
global $ttso;
$show_posts_comments = '';
$show_posts_comments = $ttso->skt_post_comments;

	if($show_posts_comments !='false'){
	update_option('default_comment_status','open');
	}else{
	update_option('default_comment_status','closed');
	}
endif;	
}
add_action('init','skthemes_disable_comments');
?>