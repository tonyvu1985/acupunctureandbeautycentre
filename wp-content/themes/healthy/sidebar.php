<div id="left-column">
	<div class="column-top">&nbsp;</div>
	<div class="left-box">
		<p class="left-box-text">New Patient Special Offer!</p>
		<a class="left-box-button" href="newpatient">Click Here</a>
	</div>
	<div id="newsletter-box">
		<!--<div class="top-box2">&nbsp;</div>
		<h2>Enter Your Details Below to Recieve</h2>
		<h1>a FREE REPORT on Health & Anti-Ageing + FREE VOUCHER</h1>
		<h2>(Valued at $99!)</h2>
		<p>See what's included</p>
		
		<form action="http://email.dedicated-it.com.au/t/r/s/vtifd/" id="newsletter" method="post">
			<input type="text" name="cm-name" id="firstname" value="Enter Your First Name" onFocus="if(this.value=='Enter Your First Name'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your First Name'}"/><br />
			<input type="text" name="cm-f-mluidl" id="lastname" value="Enter Your Last Name" onFocus="if(this.value=='Enter Your Last Name'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Last Name'}"/><br />
			<input type="text" name="cm-vtifd-vtifd" id="email" value="Enter Your Email" onFocus="if(this.value=='Enter Your Email'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email'}"/><br />
			<input type="submit" value="YES! Give me access" id="subscribe" />
		</form>
		-->
		<form action="http://email.dedicated-it.com.au/t/r/s/vtifd/" id="newsletter" method="post">
			<input type="text" name="cm-name" id="firstname" value="" placeholder="Name"/><br />
			<!--<input type="text" name="cm-f-mluidl" id="lastname" value="" placeholder="Last Name"/><br />-->
			<input type="text" name="cm-vtifd-vtifd" id="email" value="" placeholder="Email"/><br />
			<input type="submit" value="Join" id="subscribe" />
		</form>
		<script>
		jQuery(document).ready(function($){

		$('form#newsletter').submit(function(e) {
		   e.preventDefault;
			var data1 = $('input#firstname').val();
			//var data2 = $('input#lastname').val();
			var data3 = $('input#email').val();
			
			if(data1.length != 0 && data3.length !=0) {
				var url = 'http://acupunctureandbeauty.com.au/wp/wp-content/uploads/2012/08/Health-Anti-Ageing-Free-Report-with-20-Voucher.pdf';
				window.open(url);
				return true;
			}
			else {
				return false;
				alert('Please Complete The Form First!');
			}

		});

		})

		</script>
		<!--<div class="bottom-box2">&nbsp;</div>-->
	</div><!--end newsletter-box-->
	<div id="service">
		<p style="font-size:16pt; text-align:center; padding:9px 0 0 0px; color:#FFFFFF; margin-left:-14px !important;">Our Services</p>
		<?/* php wp_list_bookmarks('title_li=&categorize=0&category=14&before=<p>&after=</p>&show_images=0&show_description=0&orderby=link_idorder=ASC');  */?>
<?php
$ancestor_id=342;
$descendants = get_pages(array('child_of' => $ancestor_id));
$incl = "";

foreach ($descendants as $page) {
   if (($page->post_parent == $ancestor_id) ||
       ($page->post_parent == $post->post_parent) ||
       ($page->post_parent == $post->ID))
   {
      $incl .= $page->ID . ",";
   }
}?>

<ul>
<div class="menuHeading"><a href="/acupuncture">ACUPUNCTURE</a></div>
   <?php wp_list_pages(array("child_of" => $ancestor_id, "include" => $incl, "link_before" => "", "title_li" => "", "sort_column" => "menu_order"));?>
</ul>

<?php
$ancestor_id=110;
$descendants = get_pages(array('child_of' => $ancestor_id));
$incl = "";

foreach ($descendants as $page) {
   if (($page->post_parent == $ancestor_id) ||
       ($page->post_parent == $post->post_parent) ||
       ($page->post_parent == $post->ID))
   {
      $incl .= $page->ID . ",";
   }
}?>
<div class="menuHeading"><a href="/chinese-medicine">CHINESE MEDICINE</a></div>
<ul>
   <?php wp_list_pages(array("child_of" => $ancestor_id, "include" => $incl, "link_before" => "", "title_li" => "", "sort_column" => "menu_order"));?>
</ul>

<?php
$ancestor_id=12;
$descendants = get_pages(array('child_of' => $ancestor_id));
$incl = "";

foreach ($descendants as $page) {
   if (($page->post_parent == $ancestor_id) ||
       ($page->post_parent == $post->post_parent) ||
       ($page->post_parent == $post->ID))
   {
      $incl .= $page->ID . ",";
   }
}?>
<div class="menuHeading"><a href="/beauty-treatments/">BEAUTY TREATMENTS</a></div>
<ul>
   <?php wp_list_pages(array("child_of" => $ancestor_id, "include" => $incl, "link_before" => "", "title_li" => "", "sort_column" => "menu_order","depth" => -1));?>
</ul>

<?php 
$ancestor_id=14;
$descendants = get_pages(array('child_of' => $ancestor_id));
$incl = "";

foreach ($descendants as $page) {
   if (($page->post_parent == $ancestor_id) ||
       ($page->post_parent == $post->post_parent) ||
       ($page->post_parent == $post->ID))
   {
      $incl .= $page->ID . ",";
   }
}?>

<ul>
<div class="menuHeading"><a href="/sound-therapy/">SOUND THERAPY</a></div>
   <?php wp_list_pages(array("child_of" => $ancestor_id, "include" => $incl, "link_before" => "", "title_li" => "", "sort_column" => "menu_order"));?>
</ul>
	</div>
	<!-- <div id="productCategory"><?php //if ( ! dynamic_sidebar( 'Left Sidebar' ) ) : endif; ?></div>-->
	<div id="contact-box">
		<div class="top-box">&nbsp;</div>
		<p style="font-size:16pt; text-align:center; padding:9px 0 0 0px; color:#FFFFFF; margin-left:-14px !important;">Contact <span>Us</span></p>
		<p>(02) 9728 6176</p>
		<p>Clinic 1 - 62A Smart St,<br /> 
			Fairfield NSW 2165
		</p>
		<p>Clinic 2 - Unit 95/515 Kent St,<br />
			Sydney NSW 2000<br />
		<p>Bookings are by Appointment Only</br></br>
		T:(02) 9728 6176</br>
		E: <a href="mailto:info@acupunctureandbeauty.com.au">info@acupunctureandbeauty.com.au</a></p>

		<div class="bottom-box">&nbsp;</div>
	</div><!--end contact-box-->
	
	
	
	<div class="column-bottom">&nbsp;</div>
</div><!--end left-column-->
