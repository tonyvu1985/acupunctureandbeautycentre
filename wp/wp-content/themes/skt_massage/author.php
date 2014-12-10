<?php
/**
 * The template for displaying Author Archive pages.
 *
 * Used to display archive-type pages for posts by an author.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */

get_header(); $blog_cont_class = blog_content_class(); ?>

	<div class="content<?php echo ($blog_cont_class != '') ? ' '.$blog_cont_class : '_fw';?>" >
    <header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Author Archives: %s', 'sktmaster' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
			</header><!-- .archive-header -->
			<div class="borde_pages"></div>
		<?php if ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php rewind_posts(); ?>
			<?php
			if ( get_the_author_meta( 'description' ) ) : ?>
			<div class="author-info">
				<div class="author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'sktmaster_author_bio_avatar_size', 60 ) ); ?>
				</div><!-- .author-avatar -->
				<div class="author-description">
					<h2><?php printf( __( 'About %s', 'sktmaster' ), get_the_author() ); ?></h2>
					<p><?php the_author_meta( 'description' ); ?></p>
				</div><!-- .author-description	-->
			</div><!-- .author-info -->
			<?php endif; ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?> 
			<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
			
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
           
		<?php endif; ?>
	</div><!-- #content -->

	<?php if($blog_cont_class != '') : ?> <?php get_sidebar('blog'); ?> <?php endif; ?>

    <div class="clear"></div>

<?php get_footer(); ?>