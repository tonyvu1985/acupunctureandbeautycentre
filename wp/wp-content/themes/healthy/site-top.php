<body <?php body_class( $class ); ?>>
<div id="container">
	<div id="header">
    	<div id="header-left">
        	<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo_transparent.png" alt="" class="logo"/></a>
        </div>
        
        <div id="header-right">
        	<div class="search">
				<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
            	<input type="text" name="s" value="Search" onFocus="if(this.value=='Search'){this.value=''}" onBlur="if(this.value==''){this.value='Search'}"/>
                <input type="submit" value="" id="search-button" />
                </form>
            </div>
            <div class="social">
                <ul>
					<li><span style="font-size:24px;color: rgb(86, 85, 114);font-weight: bold;margin-top: 10px;">Tel: 0403328807</span></li>
                	<li><span style="margin-bottom: 3px; color: rgb(86, 85, 114); font-weight: bold;">Follow us on</span></li>
					<li><a href="<?php echo get_option('healthy_facebook_link'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.png" alt="" class="fb-icon"/></a></li>
                    <li><a href="<?php echo get_option('healthy_twitter_link'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.png" alt="" class="twitter-icon"/></a></li>
					<li><a href="<?php echo get_option('healthy_linkedin_link'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin-icon.png" alt="" class="linkedin-icon"/></a></li>
                </ul>
            </div>
        </div>
        
        <div id="menu">
        	<div class="menu-left">&nbsp;</div>
            <div id="nav">
                <div class="nav-left">&nbsp;</div>
				<?php wp_nav_menu( array( 'menu' => 'top-menu', 'container' => 'false' ) ); ?>
            <!--<ul>
                    <li><a href="index.html" class="select">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Acupuncture</a></li>
                    <li><a href="#">Chinese Medicine</a></li>
                    <li><a href="#">Beauty Treatments</a></li>
                    <li><a href="#">Sound Therapy</a></li>
                    <li><a href="#">News/Link</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>-->
                <div class="nav-right">&nbsp;</div>
            </div>
            <div class="menu-right">&nbsp;</div>
		</div>
    </div>
    
    <div id="content">
    	<div id="wrap">
