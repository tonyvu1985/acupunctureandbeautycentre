<?php
/**
* The sidebar containing the main widget area.
*
* If no active widgets in sidebar, let's hide it completely.
*
* @package WordPress
* @subpackage SKT_Master
* @since SKT Master 1.0
*/

$sidebarClass = blog_sidebar_class();
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area <?php echo $sidebarClass; ?>" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>