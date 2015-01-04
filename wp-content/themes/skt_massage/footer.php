<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
* @package WordPress
* @subpackage SKT_Master
* @since SKT Master 1.0
*/
?>
</div><!--content_wrapper -->
<div class="space30"></div>
<div id="footer_wrapper">
    <div class="footer">
    	<div class="gride1">
			<?php dynamic_sidebar('footer_site_content'); ?> 
        </div><!--gride1 -->
        
        <div class="gride2">
        <h5>Follow Us</h5>
        <div class="space15"></div>
        <?php if( get_option('skt_social_facebook') != '' ) { echo '<a class="fb" target="_blank" href="'.get_option('skt_social_facebook').'">Like Us on Facebook</a>'; } ?>
        <?php if( get_option('skt_social_twitter') != '' ) { echo '<a class="tw" target="_blank" href="'.get_option('skt_social_twitter').'">Follow us on Twitter</a>'; } ?>
        <?php if( get_option('skt_social_linkedin') != '' ) { echo '<a class="in" target="_blank" href="'.get_option('skt_social_linkedin').'">Connect on Linkedin</a>'; } ?> 
        <?php //if( get_option('skt_social_rss') != '' ) { echo '<a class="rss" target="_blank" href="'.get_option('skt_social_rss').'">RSS Feed</a>'; } ?> 
        </div><!--gride2 -->

        <div class="gride3">
			<?php dynamic_sidebar('timings'); ?> 
        </div><!--gride3 -->
        <div class="clear"></div>
    </div><!-- Footer -->
    

</div><!--footer_wrapper -->

<div id="copydesign">
	<div class="copyDes">
		<div class="copyright">&copy; Acupuncture & Beauty Centre 2014 | All Rights Reserved | <a href="http://acupunctureandbeautycentre.com.au/privacy-policy">Privacy Policy</a></div>
    </div>
<div class="clear"></div>
</div><!--copydesign -->

<div class="clear"></div>
</div><!--main -->
<?php wp_footer(); ?>

</body>
</html>
