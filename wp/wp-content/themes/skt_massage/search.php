<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

            <header class="entry-header">
                <h1 class="entry-title"><?php 
					$resultText = ( get_option('skt_results_title') != '' ) ? get_option('skt_results_title') : 'Search Results for';
					printf( __( $resultText.': %s', 'sktmaster' ), '<span>' . get_search_query() . '</span>' ); 
				?></h1>
			</header>

			<?php sktmaster_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php sktmaster_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'sktmaster' ); ?></h1>
				</header>

				<div class="entry-content">
                	<?php echo ( get_option('skt_results_fallback') != '' ) ? stripslashes( get_option('skt_results_fallback') ) : '<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>' ; ?>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>