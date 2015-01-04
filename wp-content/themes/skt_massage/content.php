<?php
/**
* The default template for displaying content. Used for both single and index/archive/search.
*
* @package WordPress
* @subpackage SKT_Master
* @since SKT Master 1.0
*/
$expMore 	= get_option('skt_blog_more_button'); 
$postedBy 	= get_option('skt_posted_by');
$postDate 	= get_option('skt_post_date');
$postCat 	= get_option('skt_post_cats'); 
$postTags 	= get_option('skt_post_tags');
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
             <h1><?php the_title();?></h1>
              <div class="borde_pages"></div>
                <?php
				if( get_option('skt_single_post_thumb') == 'true' ){
					$imgAlign	= 'align'.strtolower( get_option('skt_post_thumb_align') );
					the_post_thumbnail(array(260,260), array('class' => $imgAlign));
				}
				?>
			<?php else : ?>
<h3 class="entry-title">
<div class="date_bg"><span><?php the_time('j'); ?> </span><br /><?php the_time('M Y'); ?></div>                  
<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'sktmaster' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a> </h3> 
     <?php if( $postDate == 'true' || $postedBy == 'true' ) : ?>
	            <div class="postmeta"><?php sktmaster_entry_author_meta(); ?> / <?php sktmaster_entry_meta(); ?> / <?php if($postDate == 'true') { comments_popup_link( ' <span class="leave-reply">' . __( 'Reply', 'sktmaster' ) . '</span>', __( '1 Comments', 'sktmaster' ), __( '% Replies', 'sktmaster' ) ); } ?></div>
			<?php endif; // post author meta ?>
<div class="clear"></div>
<?php echo show_post_thumb(); ?>
<?php endif; // is_single() ?>

		</header><!-- .entry-header -->

		<?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                <p><?php echo get_the_excerpt().''; ?> </p> 
					<a class="readmorelink" href="<?php the_permalink(); ?>"><?php echo $expMore; ?></a>
            </div><!-- .entry-summary -->
            <div class="spacer20"></div>
		<?php else : ?>
            <div class="entry-content">
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sktmaster' ) ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sktmaster' ), 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">

			<?php edit_post_link( __( 'Edit', 'sktmaster' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'sktmaster_author_bio_avatar_size', 68 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'sktmaster' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'sktmaster' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>

		</footer><!-- .entry-meta -->

	</article><!-- #post -->
<div class="space50 clear"></div>
