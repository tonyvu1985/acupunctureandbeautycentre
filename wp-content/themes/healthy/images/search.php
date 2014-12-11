<?php get_header(); ?>
       
        <div id="content">
   	    <div class="wrapper-top">&nbsp;</div>
            <div class="wrapper">
                <div id="content-page">
                	<?php if (have_posts()) : while (have_posts()) : the_post();?>
                	 <h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php else : ?>
						
						<?php if(function_exists('wp_paginate')) {wp_paginate();} ?>
						
					<?php endif; ?>
                </div>
                
                <div class="sidebar-right">
                	<div class="promo">
                    	<h1>Promo Bulan ini</h1>
                        <div class="promo-top">&nbsp;</div>
                        <div class="promo-image"><img src="<?php bloginfo('template_directory'); ?>/images/promo-img.jpg" class="image-promo" alt="" /></div>
                        <div class="promo-bottom">&nbsp;</div>
                        <p>Vaksin untuk anak usia diatas 3 tahun diskon 50% selama bulan ini</p>
                        <a href="<?php bloginfo('url'); ?>/promo"><img src="<?php bloginfo('template_directory'); ?>/images/findoutmore-btn.jpg" class="findout-btn" alt="" /></a>
                    </div>
                    <div class="clinic">
                    	<h1>Our Clinic</h1>
                        <div class="clinic-top">&nbsp;</div>
                        <div class="clinic-map">
                            <iframe width="200" height="160" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.id/maps?q=Carrefour+Duta+Merlin,+Jakarta&amp;hl=id&amp;ie=UTF8&amp;view=map&amp;cid=7249423716432095318&amp;t=m&amp;vpsrc=6&amp;ll=-6.16526,106.82009&amp;spn=0.00352,0.00427&amp;z=16&amp;output=embed"></iframe>
                        </div>
                        <div class="clinic-bottom">&nbsp;</div>
                        <a href="http://maps.google.co.id/maps?q=Carrefour+Duta+Merlin,+Jakarta&hl=id&ll=-6.166956,106.820991&spn=0.008053,0.013937&oq=Carrefour+Duta+Merlin&hq=Carrefour+Duta+Merlin,&hnear=Jakarta&t=m&z=17&vpsrc=6">click the map to enlarge</a>
                    </div>
                </div>
            </div>
            <div class="wrapper-bottom">&nbsp;</div>
            
            <div class="social-media">
            	<ul>
                	<li>Follow us</li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.jpg" alt="" class="facebook" /></a></li>
                    <li>and</li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.jpg" alt="" class="twitter" /></a></li>
                </ul>
            </div>
        </div>

<?php get_footer(); ?>