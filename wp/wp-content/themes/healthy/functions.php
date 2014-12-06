<?php

add_image_size( 'acupuncture', 680, 510, false );
add_theme_support( 'post-thumbnails' ); 

//mofication of WP default excerpt

function slide2() {

query_posts( 'p=181' );
if ( have_posts() ) : the_post();
$s = get_group('img');
foreach($s as $ss) { ?>
<?php $link = $ss['img_page_link'][1]; ?>
<li><img src="<?php echo $ss['img_slide'][1]['o']; ?>" alt="the_title();" /><div id="caption"><h2><?php echo $ss['img_image_title'][1]; ?></h2><span><?php echo $ss['img_description'][1]; ?><a href="<?php echo get_permalink($link); ?>">Read More</a></span></div></li>
<?php }
endif;
wp_reset_query();

}

function slide() {
query_posts( 'p=181' );
while ( have_posts() ) : the_post();
$datas = get_group('img');
pr($datas);
$i = 0;
foreach($datas as $data) {
$i++;
$link = get_permalink($data['img_page_link'][1]); ?>
<img src="<?php echo $data['img_slide'][1]['o']; ?>" data-caption="#caption<?php echo $i; ?>" />
<span id="caption<?php echo $i; ?>"><?php echo $data['img_description'][1]; ?><a href="<?php echo $link; ?>">Read More</a></span>
<?php }
endwhile;
wp_reset_query();
}

function new_excerpt_more($more) {

global $post;
 return '<a class="readmore" href="'. get_permalink($post->ID) . '">... [Read more]</a>';

}
add_filter('excerpt_more', 'new_excerpt_more');

// Excerpt Value (Words length)
function custom_excerpt_length($length) { return 50; }
add_filter('excerpt_length', 'custom_excerpt_length');

//REGISTERING SIDEBAR
add_action( 'widgets_init', 'left_sidebars' );
function left_sidebars() {
	register_sidebar(array(
		'id' => 'left-sidebar',
		'name' => 'Left Sidebar',
		'before_widget' => ' ',
		'after_widget' => ' ',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));
}

//For Passed HTML Validation, removing RSD link(detected not valid by w3c validator)
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'rsd_link');



//Snippet Code for additional Post/Page Editor (TinyMCE)

function add_more_buttons($buttons) {

 $buttons[] = 'hr';

 $buttons[] = 'del';

 $buttons[] = 'sub';

 $buttons[] = 'sup';

 $buttons[] = 'fontselect';

 $buttons[] = 'fontsizeselect';

 $buttons[] = 'cleanup';

 $buttons[] = 'styleselect';

 return $buttons;

}
add_filter("mce_buttons_3", "add_more_buttons");


// Additional Theme Support including background, menus, etc
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'menus' );
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'automatic-feed-links' );
if ( function_exists( 'add_custom_background' ) ) add_custom_background();


//Snippets Code for detecting visitor browser for different CSS value

add_filter('body_class','browser_body_class');

function browser_body_class($classes) {

	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';

	elseif($is_gecko) $classes[] = 'gecko';

	elseif($is_opera) $classes[] = 'opera';

	elseif($is_NS4) $classes[] = 'ns4';

	elseif($is_safari) $classes[] = 'safari';

	elseif($is_chrome) $classes[] = 'chrome';

	elseif($is_IE) $classes[] = 'ie';

	else $classes[] = 'unknown';

	if($is_iphone) $classes[] = 'iphone';

	return $classes;

}

// Code for getting first image on each posts
function get_first_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}

// Theme Options
add_action('admin_menu', 'healthy_theme_page');
function healthy_theme_page () {
if ( count($_POST) > 0 && isset($_POST['healthy_settings']) )
{
$options = array ('twitter_link','facebook_link','linkedin_link','keywords','description','analytics');

foreach ( $options as $opt )
{
delete_option ( 'healthy_'.$opt, $_POST[$opt] );
add_option ( 'healthy_'.$opt, $_POST[$opt] );	
}			

}
add_theme_page(__('Theme Options'), __('Theme Options'), 'edit_themes', basename(__FILE__), 'healthy_settings');
}
function healthy_settings() {?>
<div class="wrap">
<h2>Theme Options</h2>

<form method="post" action="">

<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
<legend style="margin-left:5px; padding:0 5px; color:#2481C6;text-transform:uppercase;"><strong>Social Account Link</strong></legend>
	<table class="form-table">
		<th scope="row"><label for="twitter_link">Twitter Link</label></th>
			<td>
			<input name="twitter_link" type="text" id="twitter_link" value="<?php echo get_option('healthy_twitter_link'); ?>" class="regular-text" placeholder="http://twitter.com/username" />
			</td>
			</tr>
		<tr valign="top">
		<th scope="row"><label for="facebook_link">Facebook link</label></th>
		<td>
			<input name="facebook_link" type="text" id="facebook_link" value="<?php echo get_option('healthy_facebook_link'); ?>" class="regular-text" placeholder="http://www.facebook.com/profile_url" />
			</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><label for="linkedin_link">linked in link</label></th>
		<td>
			<input name="linkedin_link" type="text" id="linkedin_link" value="<?php echo get_option('healthy_linkedin_link'); ?>" class="regular-text" placeholder="http://au.linkedin.com/pub/eli-huang/15/940/627" />
			</td>
		</tr>
			
	</table>
	
</fieldset>
<p class="submit">
<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
<input type="hidden" name="healthy_settings" value="save" style="display:none;" />
</p>

<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
<legend style="margin-left:5px; padding:0 5px; color:#2481C6;text-transform:uppercase;">
<strong>Optimations</strong></legend>
<table class="form-table">
<tr>
<th><label for="keywords">Meta Keywords</label></th>
<td>
<textarea name="keywords" id="keywords" list="key" rows="7" cols="70" style="font-size:11px;" placeholder="ex: social,website,"><?php echo get_option('healthy_keywords'); ?></textarea>
<br />
<em>comma separated</em>
</td>
</tr>
<tr>
<th><label for="description">Meta Description</label></th>
<td>
<textarea name="description" id="description" rows="7" cols="70" style="font-size:11px;" placeholder="ex: Official Website of"><?php echo get_option('healthy_description'); ?></textarea>
</td>
</tr>
<tr>
<th><label for="ads">Google Analytics code:</label></th>
<td>
<textarea name="analytics" id="analytics" rows="7" cols="70" style="font-size:11px;"><?php echo stripslashes(get_option('healthy_analytics')); ?></textarea>
</td>
</tr>

</table>
</fieldset>
<p class="submit">
<input type="submit" name="Submit" class="button-primary" value="Save Changes" />
<input type="hidden" name="healthy_settings" value="save" style="display:none;" />
</p>
</form>
</div>
<?php }

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
    if(empty($first_img)){ //Defines a default image
    $first_img = "nothumb.gif";
  }
  return $first_img;
}

register_nav_menus( array(
	'footer_menu' => 'Footer Menu',
	'mobile_menu' => 'Mobile Menu'
) );



function mytheme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
			<span class="comment-date">
		<?php
		/* translators: 1: date, 2: time */
		printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );?>
	</span>
		<div class="fist-col">
			<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		</div>
		<div class="second-col">
			<span class="comments-author">
			<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
			</span>
			<?php if ($comment->comment_approved == '0') : ?>
				<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
					<br />
						<?php endif; ?>
								<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
									</div>
											<?php comment_text() ?>
												<div class="reply">
													<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
													</div>
														<?php if ( 'div' != $args['style'] ) : ?>
														
															</div>
																	<?php endif; ?>




		


		
<?php

/**
 * Create HTML list of pages.
 *
 * @package Razorback
 * @subpackage Walker
 * @author Michael Fields <michael@mfields.org>
 * @copyright Copyright (c) 2010, Michael Fields
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @uses Walker_Page
 *
 * @since 2010-05-28
 * @alter 2010-10-09
 */
class Razorback_Walker_Page_Selective_Children extends Walker_Page {
    /**
     * Walk the Page Tree.
     *
     * @global stdClass WordPress post object.
     * @uses Walker_Page::$db_fields
     * @uses Walker_Page::display_element()
     *
     * @since 2010-05-28
     * @alter 2010-10-09
     */
    function walk( $elements, $max_depth ) {
        global $post;
        $args = array_slice( func_get_args(), 2 );
        $output = '';
 
        /* invalid parameter */
        if ( $max_depth < -1 ) {
            return $output;
        }
 
        /* Nothing to walk */
        if ( empty( $elements ) ) {
            return $output;
        }
 
        /* Set up variables. */
        $top_level_elements = array();
        $children_elements  = array();
        $parent_field = $this->db_fields['parent'];
        $child_of = ( isset( $args[0]['child_of'] ) ) ? (int) $args[0]['child_of'] : 0;
 
        /* Loop elements */
        foreach ( (array) $elements as $e ) {
            $parent_id = $e->$parent_field;
            if ( isset( $parent_id ) ) {
                /* Top level pages. */
                if( $child_of === $parent_id ) {
                    $top_level_elements[] = $e;
                }
                /* Only display children of the current hierarchy. */
                else if (
                    ( isset( $post->ID ) && $parent_id == $post->ID ) ||
                    ( isset( $post->post_parent ) && $parent_id == $post->post_parent ) ||
                    ( isset( $post->ancestors ) && in_array( $parent_id, (array) $post->ancestors ) )
                ) {
                    $children_elements[ $e->$parent_field ][] = $e;
                }
            }
        }
 
        /* Define output. */
        foreach ( $top_level_elements as $e ) {
            $this->display_element( $e, $children_elements, $max_depth, 0, $args, $output );
        }
        return $output;
    }
} 
        }