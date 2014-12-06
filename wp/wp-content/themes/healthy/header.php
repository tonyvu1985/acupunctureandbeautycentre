<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=IE7" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="<?php bloginfo('template_directory'); ?>/css/css-reset.css" rel="stylesheet" media="screen"/>
<link href="<?php bloginfo('template_directory'); ?>/css/font-face.css" rel="stylesheet"/>
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet"/>


<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/newsletter.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/orbit.min.js"></script>
<link href="<?php bloginfo('template_directory'); ?>/css/orbit.css" rel="stylesheet"/>
<script type="text/javascript">
$(document).ready(function() {
	$('#slider').orbit({
		directionalNav: true,
		timer: false,
	});
	
	$('.list-acupunture a img').each(function() { 
		if(jQuery(this).attr('src').indexOf('nothumb') != -1) { 
			jQuery(this).css('display','none'); 
		}
	});
	
	$('a').filter(function(index) { return $(this).text() === "Moisturisers"; }).removeAttr("href");
});
</script>

<!--<script src="<?php //bloginfo('template_directory'); ?>/js/modernizr.js"></script>-->

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php //bloginfo('template_directory'); ?>/js/selectivizr.js"></script>
<![endif]-->

<?php
if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
?>
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50652025-1', 'acupunctureandbeautycentre.com.au');
  ga('send', 'pageview');

</script>
</head>
