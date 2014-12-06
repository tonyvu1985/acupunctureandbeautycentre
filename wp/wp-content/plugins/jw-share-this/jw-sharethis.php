<?php
/*
Plugin Name: Share This
Plugin URI: http://www.jameswilkesdesign.co.uk/wordpress-plugin-to-share-posts/
Description: Adds links at the bottom of posts to share via Email, StumbleUpon, Digg, Facebook, Twitter.
Version: 1.1
Author: James Wilkes
Author URI: http://www.jameswilkesdesign.co.uk/
License: GPL3

Copyright (c) 2010 James Wilkes http://www.jameswilkesdesign.co.uk/

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

set_time_limit(20);
ini_set("memory_limit","128M");

function jw_share_this_links($content) {
	$id = get_the_ID();
	$title = get_the_title($id);
	$url = get_permalink($id);
	$content .= "\n";
	$content .= "<div class=\"jwsharethis\">\n";
	$content .= "Share this: \n";
	$content .= "<br />\n";
	$content .= "<a href=\"mailto:?subject=" . rawurlencode($title) . "&amp;body=" . rawurlencode($url) . "\">\n";
	$content .= "<img src=\"" . plugins_url('email.png', __FILE__) . "\" alt=\"Share this page via Email\" />\n";
	$content .= "</a>\n";
	$content .= "<a target=\"_blank\" href=\"http://www.stumbleupon.com/submit?url=" . urlencode($url) . "&amp;title=" . urlencode($title) . "\">\n";
	$content .= "<img src=\"" . plugins_url('su.png', __FILE__) . "\" alt=\"Share this page via Stumble Upon\" />\n";
	$content .= "</a>\n";
	$content .= "<a target=\"_blank\" href=\"http://digg.com/submit?url=" . urlencode($url) . "&amp;title=" . urlencode($title) . "\">\n";
	$content .= "<img src=\"" . plugins_url('digg.png', __FILE__) . "\" alt=\"Share this page via Digg this\" />\n";
	$content .= "</a>\n";
	$content .= "<a target=\"_blank\" href=\"http://www.facebook.com/sharer.php?u=" . urlencode($url) . "&amp;t=" . urlencode($title) . "\">\n";
	$content .= "<img src=\"" . plugins_url('fb.png', __FILE__) . "\" alt=\"Share this page via Facebook\" />\n";
	$content .= "</a>\n";
//	$content .= "<a target=\"_blank\" href=\"http://twitter.com/home?status=I+like+" . urlencode($url) . "&amp;title=" . urlencode($title) . "\">\n";
	$content .= "<a target=\"_blank\" href=\"http://twitter.com/intent/tweet?text=I+like+" . urlencode($url) . "&amp;title=" . urlencode($title) . "\">\n";
	$content .= "<img src=\"" . plugins_url('twitter.png', __FILE__) . "\" alt=\"Share this page via Twitter\" />\n";
	$content .= "</a>\n";
	$content .= "</div>\n";
	return $content;
}

add_filter('the_content', 'jw_share_this_links');

?>
