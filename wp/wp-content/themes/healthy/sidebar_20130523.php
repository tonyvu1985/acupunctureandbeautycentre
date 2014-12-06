<div id="left-column">
	<div class="column-top">&nbsp;</div>
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
			<input type="text" name="cm-name" id="firstname" value="" placeholder="Enter Your First Name"/><br />
			<input type="text" name="cm-f-mluidl" id="lastname" value="" placeholder="Enter Your Last Name"/><br />
			<input type="text" name="cm-vtifd-vtifd" id="email" value="" placeholder="Enter Your Email"/><br />
			<input type="submit" value="YES! Give me access" id="subscribe" />
		</form>
		<script>
		jQuery(document).ready(function($){

		$('form#newsletter').submit(function(e) {
		   e.preventDefault;
			var data1 = $('input#firstname').val();
			var data2 = $('input#lastname').val();
			var data3 = $('input#email').val();
			
			if(data1.length != 0 && data2.length != 0 && data3.length !=0) {
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
	<div id="productCategory"><?php if ( ! dynamic_sidebar( 'Left Sidebar' ) ) : endif; ?></div>
	<div id="contact-box">
		<div class="top-box">&nbsp;</div>
		<h1>Contact <span>Us</span></h1>
		<p>(02) 9728 6176 | 0403 328 807</p>
		<p>Clinic 1 - 62A Smart St,<br /> 
			Fairfield NSW 2165
		</p>
		<p>Clinic 2 - Unit 95/515 Kent St,<br />
			Sydney NSW 2000<br />
		<p>Bookings are by Appointment Only</br></br>
		T: 0403 328 807</br>
		E: <a href="mailto:info@acupunctureandbeauty.com.au">info@acupunctureandbeauty.com.au</a></p>

		<div class="bottom-box">&nbsp;</div>
	</div><!--end contact-box-->
	<div id="service">
		<h1>Our Services</h1>
		<?php wp_list_bookmarks('title_li=&categorize=0&category=14&before=<p>&after=</p>&show_images=0&show_description=0&orderby=link_idorder=ASC'); ?>                    
	</div>
	
	
	<div class="column-bottom">&nbsp;</div>
</div><!--end left-column-->
