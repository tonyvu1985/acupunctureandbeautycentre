<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php echo ( get_option('skt_responsive') == 'false' ) ? '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">'."\n" : ''; ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo ( get_option('skt_favicon') != '' ) ? get_option('skt_favicon') : get_bloginfo('template_url').'/images/favicon.ico';?>">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="http://acupunctureandbeautycentre.com.au/wp-content/themes/skt_massage/css/style.css">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/css3-mediaqueries.js" type="text/javascript"></script>

<script type="text/javascript">
function getWidth() {
    if (self.innerWidth) {
       return self.innerWidth;
    }
    else if (document.documentElement && document.documentElement.clientHeight){
        return document.documentElement.clientWidth;
    }
    else if (document.body) {
        return document.body.clientWidth;
    }
    return 0;
}
var scrWd = getWidth();
if(scrWd<=479){
	document.write('<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid_320.css"');
}else if(scrWd>479 && scrWd<719){
	document.write('<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid_480.css"');
}else if(scrWd>719 && scrWd<989){
	document.write('<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid_720.css"');
}else{
	document.write('<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid_990.css"');
}
</script>
<![endif]-->

<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid_320.css" media="screen and (max-width: 479px)">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid_480.css" media="screen and (min-width: 480px) and (max-width: 719px)">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid_720.css" media="screen and (min-width: 720px) and (max-width: 989px)">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid_990.css" media="screen and (min-width: 990px)">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style_base.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/theme.css">

</head>
<body>
<div id="main">
    <div class="header_wrapper">
    	<div class="header">
        	<div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php 
                    if( get_option('skt_logo_text') == '') {
						 if (get_option('skt_sitelogo') != '')
                            echo '<img src="'.get_option('skt_sitelogo').'" />'; 
                        else
                            echo '<span>'.get_bloginfo('name').'</span>';
                    }else{
							echo '<span>'.get_option('skt_logo_text').'</span>';
                    }
                    ?>
            </a></div><!--logo -->

      <?php if ( is_front_page()|| is_home() ){ ?> 
        <div class="nav">
          <!-- <div class="hm active">
             <a href="<?php //bloginfo('url');?>"><img src="<?php //bloginfo('template_url');?>/images/home-icon.png" alt="" /></a>
           </div>-->
            <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => '', 'menu_class' => '') ); ?>            	
        </div><!--nav -->
        <div class="header-phone">
		   <?php echo ( get_option('skt_contact_phone') != '' ) ? '<span>'.get_option('skt_contact_phone').'</span>' : '' ; ?>
         </div>
         <div class="clear"></div>
        </div><!--header -->       
    </div><!--header_wrapper -->
    
     <div id="slider_wrap">
          <div id="slider">
              <div id="slider_inr"> 
                 <?php echo do_shortcode('[cycloneslider id="slider-3"]'); ?>
              </div><!-- #slider_inr --> 
           </div> <!-- #slider --> 
        </div> <!-- #slider_wrap -->  
    <div class="space50"></div>
   <?php } else { ?>
    <div class="nav">
       <!--<div class="hm"><a href="<?php //bloginfo('url');?>"><img src="<?php //bloginfo('template_url');?>/images/home-icon.png" alt="" /></a></div>-->
       <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => '', 'menu_class' => '') ); ?>            	
    </div><!--nav --> 
    <div class="header-phone">
		   <?php echo ( get_option('skt_contact_phone') != '' ) ? '<span>'.get_option('skt_contact_phone').'</span>' : '' ; ?>
     </div>
    <div class="clear"></div>
 </div><!--header -->       
 </div><!--header_wrapper -->

<div class="featured_img"></div>
<div class="content_wrapper inner_pages">
<?php } ?> 

<?php if(get_option('skt_crumbs') == 'true'){ if (function_exists('skt_breadcrumbs')) skt_breadcrumbs(); } ?>
