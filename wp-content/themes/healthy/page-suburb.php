<?php
/**
* Template Name: Suburbs
*
* A custom page template without sidebar.
*
* The "Template Name:" bit above allows this to be selectable
* from a dropdown menu on the edit page screen.
*
* @package WordPress
* @subpackage Twenty_Ten
* @since Twenty Ten 1.0
*/

get_header();
get_template_part('site','top');
get_sidebar(); ?>

<div id="right-column">
    <div id="content-wrapper">
        <div id="post-content">
        	<h1>Areas Serviced</h1>
           <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                                         
                                                                
																                <div class="entry-content">                                                                       
                                                                                <?php include('suburbs.php'); ?>
                                                                                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                                                                                <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                                                                </div><!-- .entry-content -->
                                                </div><!-- #post-## -->
        </div>
    </div>
</div>


<?php 
get_template_part('site','bottom');
get_footer();
?>