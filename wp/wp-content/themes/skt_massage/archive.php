<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, SKT Master already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */

get_header('arc');

$blog_cont_class = blog_content_class();
?>

	<div class="content<?php echo ($blog_cont_class != '') ? ' '.$blog_cont_class : '_fw';?>" >
		<?php if ( have_posts() ) : ?>
 <header class="archive-header">
			<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'sktmaster' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'sktmaster' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'sktmaster' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'sktmaster' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'sktmaster' ) ) . '</span>' );
					else :
						_e( 'Archives', 'sktmaster' );
					endif;
				?></h1>
                <div class="borde_pages"></div>
                 
			</header><!-- .archive-header -->  

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; 
			//	sktmaster_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
    </div><!-- #content -->
    
	<?php if($blog_cont_class != '') : ?>
        <?php get_sidebar('blog'); ?> 
    <?php endif; ?>

    <div class="clear"></div>
<?php get_footer(); ?>