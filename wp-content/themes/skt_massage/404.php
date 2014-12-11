<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title text-center"><?php echo ( get_option('skt_404title') != '' ) ? get_option('skt_404title') : 'This is somewhat embarrassing, isn&rsquo;t it?' ; ?></h1>
				</header>

				<div class="entry-content">
	                <?php echo ( get_option('skt_404message') != '' ) ? stripslashes( get_option('skt_404message') ) : '<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>' ; ?>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>