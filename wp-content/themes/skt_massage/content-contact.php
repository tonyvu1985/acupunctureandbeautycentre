<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage SKT_Master
 * @since SKT Master 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    

		<div class="entry-content">
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sktmaster' ), 'after' => '</div>' ) ); ?>
            <div class="clear"></div>
            	<div class="contactpageleft">
 
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="borde_pages"></div>
 

                	<?php the_content(); ?>
					<?php if (get_option('skt_contact_disable_form') == 'false') contact_request_form() ; ?>
                </div>

                <div class="contactpageright">
					 <div class="widget-area"><h3><?php echo ( get_option('skt_contact_title') != '' ) ? ''.get_option('skt_contact_title').' <div class="title_border"></div>' : '' ; ?></h3></div>
                    
                     <p><?php echo ( get_option('skt_contact_address_1') != '' ) ? get_option('skt_contact_address_1').'' : '' ; ?></p>
                     <p><?php echo ( get_option('skt_contact_address_2') != '' ) ? get_option('skt_contact_address_2').'' : '' ; ?></p>
                     <p><?php echo ( get_option('skt_contact_state') != '' ) ? get_option('skt_contact_state').'' : '' ; ?></p>
                     <p><?php echo ( get_option('skt_contact_city') != '' ) ? get_option('skt_contact_city') : '' ; ?></p>
                     <p><?php echo ( get_option('skt_contact_zip') != '' ) ? ' '.get_option('skt_contact_zip').'' : '' ; ?></p>
                     <p><?php echo ( get_option('skt_contact_country') != '' ) ? get_option('skt_contact_country') : '' ; ?></p>
                     
                    <?php echo ( get_option('skt_contact_phone') != '' ) ? '<p>Phone: '.get_option('skt_contact_phone').'</p>' : '' ; ?>
                    <?php echo ( get_option('skt_contact_fax') != '' ) ? '<p>Fax: '.get_option('skt_contact_fax').'</p>' : '' ; ?>
                    <?php echo ( get_option('skt_contact_tollfree') != '' ) ? '<p>Toll Free: '.get_option('skt_contact_tollfree').'</p>' : '' ; ?>
                    <?php echo ( get_option('skt_contact_email') != '' ) ? '<p>Email: '.get_option('skt_contact_email').'</p>' : '' ; ?>
                    <div class="space20"></div>
                    <?php echo ( get_option('skt_google_map_code') != '' ) ? stripslashes( get_option('skt_google_map_code') ) : '' ; ?>
				</div>
            <div class="clear"></div>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'sktmaster' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
