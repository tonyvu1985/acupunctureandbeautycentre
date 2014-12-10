<?php 
header("Content-type: text/css");

include('../../../../wp-load.php');

$baseFont 		= array('Arial','Comic Sans MS','FreeSans','Georgia','Lucida Sans Unicode','Palatino Linotype','Symbol','Tahoma','Trebuchet MS','Verdana');
$genFontFamily = get_option('skt_general_font'); 
if( !in_array($genFontFamily, $baseFont, true) && $genFontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$genFontFamily).");\n";
	$genFontFamily = "'$genFontFamily', sans-serif";
}
$genFontSize		= get_option('skt_general_font_size');
$genFontColor 		= get_option('skt_general_font_color');

$logoFontFamily		= get_option('skt_logo_font');
if( !in_array($logoFontFamily, $baseFont, true) && $logoFontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$logoFontFamily).");\n";
	$logoFontFamily = "'$logoFontFamily', sans-serif";
}
$logoFontColor 		= get_option('skt_logo_font_color');
$logoFontSize 		= get_option('skt_logo_font_size');

$navFontFamily		= get_option('skt_nav_font');
if( !in_array($navFontFamily, $baseFont, true) && $navFontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$navFontFamily).");\n";
	$navFontFamily = "'$navFontFamily', sans-serif";
}
$navFontSize		= get_option('skt_nav_font_size');
$navFontColor		= get_option('skt_nav_font_color');

$paraFontFamily		= get_option('skt_paragraph_font');
if( !in_array($paraFontFamily, $baseFont, true) && $paraFontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$paraFontFamily).");\n";
	$paraFontFamily = "'$paraFontFamily', sans-serif";
}
$paraFontSize		= get_option('skt_paragraph_font_size');
$paraFontColor		= get_option('skt_paragraph_font_color');

$paraFontFamily		= get_option('skt_paragraph_font');
if( !in_array($paraFontFamily, $baseFont, true) && $genFontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$paraFontFamily).");\n";
	$paraFontFamily = "'$paraFontFamily', sans-serif";
}
$paraFontSize		= get_option('skt_paragraph_font_size');
$paraFontColor		= get_option('skt_paragraph_font_color');

$h1FontFamily		= get_option('skt_h1_font');
if( !in_array($h1FontFamily, $baseFont, true) && $genFontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$h1FontFamily).");\n";
	$h1FontFamily = "'$h1FontFamily', sans-serif";
}
$h1FontSize			= get_option('skt_h1_font_size');
$h1FontColor		= get_option('skt_h1_font_color');

$h2FontFamily		= get_option('skt_h2_font');
if( !in_array($h2FontFamily, $baseFont, true) && $h2FontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$h2FontFamily).");\n";
	$h2FontFamily = "'$h2FontFamily', sans-serif";
}
$h2FontSize			= get_option('skt_h2_font_size');
$h2FontColor		= get_option('skt_h2_font_color');

$h3FontFamily		= get_option('skt_h3_font');
if( !in_array($h3FontFamily, $baseFont, true) && $h3FontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$h3FontFamily).");\n";
	$h3FontFamily = "'$h3FontFamily', sans-serif";
}
$h3FontSize			= get_option('skt_h3_font_size');
$h3FontColor		= get_option('skt_h3_font_color');

$h4FontFamily		= get_option('skt_h4_font');
if( !in_array($h4FontFamily, $baseFont, true) && $h4FontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$h4FontFamily).");\n";
	$h4FontFamily = "'$h4FontFamily', sans-serif";
}
$h4FontSize			= get_option('skt_h4_font_size');
$h4FontColor		= get_option('skt_h4_font_color');

$h5FontFamily		= get_option('skt_h5_font');
if( !in_array($h5FontFamily, $baseFont, true) && $h5FontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$h5FontFamily).");\n";
	$h5FontFamily = "'$h5FontFamily', sans-serif";
}
$h5FontSize			= get_option('skt_h5_font_size');
$h5FontColor		= get_option('skt_h5_font_color');

$h6FontFamily		= get_option('skt_h6_font');
if( !in_array($h6FontFamily, $baseFont, true) && $h6FontFamily != 'nofont' ){
	echo "@import url(http://fonts.googleapis.com/css?family=".str_replace(' ','+',$h6FontFamily).");\n";
	$h6FontFamily = "'$h6FontFamily', sans-serif";
}
$h6FontSize			= get_option('skt_h6_font_size');
$h6FontColor		= get_option('skt_h6_font_color');

$boxLayout			= get_option('skt_boxedlayout');

$linkColor			= get_option('skt_link_color');
$linkHoverColor		= get_option('skt_link_hover_color');
$bodyBgColor		= get_option('skt_body_bg_color');
$topBgColor			= get_option('skt_top_bg_color');
$topFontColor		= get_option('skt_top_font_color');
$midBgColor			= get_option('skt_middle_bg_color');
$midFontColor		= get_option('skt_middle_font_color');
$footBgColor		= get_option('skt_footer_bg_color');
$footFontColor		= get_option('skt_footer_font_color');

$bodyBgImage		= get_option('skt_body_bg_image');
$bodyBgPosition		= get_option('skt_body_bg_position');
$bodyBgRepeat		= get_option('skt_body_bg_repeat');

$topBgImage			= get_option('skt_top_bg_image');
$topBgPosition		= get_option('skt_top_bg_position');
$topBgRepeat		= get_option('skt_top_bg_repeat');

$midBgImage			= get_option('skt_middle_bg_image');
$midBgPosition		= get_option('skt_middle_bg_position');
$midBgRepeat		= get_option('skt_middle_bg_repeat');

$footBgImage		= get_option('skt_footer_bg_image');
$footBgPosition		= get_option('skt_footer_bg_position');
$footBgRepeat		= get_option('skt_footer_bg_repeat');

$themeColor			= get_option('skt_theme_color');
?>


body{<?php 
	echo ($bodyBgImage != '') ? 'background:url('.$bodyBgImage.') '.$bodyBgPosition.' '.$bodyBgRepeat.' '.$bodyBgColor.' !important; ' : '';
    echo ($genFontFamily != 'nofont') ? 'font-family:'.$genFontFamily.'; ' : '';
	echo ($genFontSize != '--select--') ? 'font-size:'.$genFontSize.'; ' : '';
    echo ($genFontColor != '') ? 'color:'.$genFontColor.'; ' : '';
?> }
hgroup{<?php 
	echo ($topBgImage != '') ? 'background:url('.$topBgImage.') '.$topBgPosition.' '.$topBgRepeat.' '.$topBgColor.'; ' : '';
	echo ($topFontColor != '') ? 'color:'.$topFontColor.'; ' : '' ;
?> }
#main{<?php
	echo ($midBgImage != '') ? 'background:url('.$midBgImage.') '.$midBgPosition.' '.$midBgRepeat.' '.$midBgColor.'; ' : '';
	echo ($midFontColor != '') ? 'color:'.$midFontColor.'; ' : '' ;
?> }
.footer{<?php
	echo ($footBgImage != '') ? 'background:url('.$footBgImage.') '.$footBgPosition.' '.$footBgRepeat.' '.$footBgColor.'; ' : '';
	echo ($footFontColor != '') ? 'color:'.$footFontColor.'; ' : '' ;
?> }
a{<?php
	echo ($linkColor != '') ? 'color:'.$linkColor.'; ' : '';
?> }
a:hover{<?php
	echo ($linkHoverColor != '') ? 'color:'.$linkHoverColor.'; ' : '';
?> }
.logo{<?php
    echo ($logoFontFamily != 'nofont') ? 'font-family:'.$logoFontFamily.' !important; ' : '';
	echo ($logoFontSize != '--select--') ? 'font-size:'.$logoFontSize.' !important; ' : '';
    echo ($logoFontColor != '') ? 'color:'.$logoFontColor.' !important; ' : '';
?> }
.logo, .logo a{<?php
    echo ($logoFontColor != '') ? 'color:'.$logoFontColor.'; ' : '';
?> }
.nav ul{<?php
    echo ($navFontFamily != 'nofont') ? 'font-family:'.$navFontFamily.'; ' : '';
    echo ($navFontColor != '') ? 'color:'.$navFontColor.'; ' : '';
?> }
.nav ul li{<?php
	echo ($navFontSize != '--select--') ? 'font-size:'.$navFontSize.'; ' : '';
?> }
.nav ul li a{<?php
    echo ($navFontColor != '') ? 'color:'.$navFontColor.'; ' : '';
?> }
p{<?php
    echo ($paraFontFamily != 'nofont') ? 'font-family:'.$paraFontFamily.'; ' : '';
	echo ($paraFontSize != '--select--') ? 'font-size:'.$paraFontSize.'; ' : '';
    echo ($paraFontColor != '') ? 'color:'.$paraFontColor.'; ' : '';
?> }
h1{<?php
    echo ($h1FontFamily != 'nofont') ? 'font-family:'.$h1FontFamily.'; ' : '';
	echo ($h1FontSize != '--select--') ? 'font-size:'.$h1FontSize.'; ' : '';
    echo ($h1FontColor != '') ? 'color:'.$h1FontColor.'; ' : '';
?> }
h2{<?php
    echo ($h2FontFamily != 'nofont') ? 'font-family:'.$h2FontFamily.'; ' : '';
	echo ($h2FontSize != '--select--') ? 'font-size:'.$h2FontSize.'; ' : '';
    echo ($h2FontColor != '') ? 'color:'.$h2FontColor.'; ' : '';
?> }
h3{<?php
    echo ($h3FontFamily != 'nofont') ? 'font-family:'.$h3FontFamily.'; ' : '';
	echo ($h3FontSize != '--select--') ? 'font-size:'.$h3FontSize.'; ' : '';
    echo ($h3FontColor != '') ? 'color:'.$h3FontColor.'; ' : '';
?> }
h4{<?php
    echo ($h4FontFamily != 'nofont') ? 'font-family:'.$h4FontFamily.'; ' : '';
	echo ($h4FontSize != '--select--') ? 'font-size:'.$h4FontSize.'; ' : '';
    echo ($h4FontColor != '') ? 'color:'.$h4FontColor.'; ' : '';
?> }
h5{<?php
    echo ($h5FontFamily != 'nofont') ? 'font-family:'.$h5FontFamily.'; ' : '';
	echo ($h5FontSize != '--select--') ? 'font-size:'.$h5FontSize.'; ' : '';
    echo ($h5FontColor != '') ? 'color:'.$h5FontColor.'; ' : '';
?>}
h6{<?php
    echo ($h6FontFamily != 'nofont') ? 'font-family:'.$h6FontFamily.'; ' : '';
	echo ($h6FontSize != '--select--') ? 'font-size:'.$h6FontSize.'; ' : '';
    echo ($h6FontColor != '') ? 'color:'.$h6FontColor.'; ' : '';
?> }
.site{<?php echo ($boxLayout == 'true' ) ? 'max-width:100%;' : ''; ?> }