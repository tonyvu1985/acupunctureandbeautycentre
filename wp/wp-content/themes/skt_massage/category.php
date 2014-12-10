<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */

get_header(('cat')); 

$blog_cont_class = blog_content_class();
?>

	<div class="content<?php echo ($blog_cont_class != '') ? ' '.$blog_cont_class : '_fw';?>" >
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category : %s', 'sktmaster' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
                <div class="borde_pages"></div>
			<?php if ( category_description() ) :  ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );

			endwhile;

			sktmaster_content_nav( 'nav-below' );
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