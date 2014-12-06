jQuery(document).ready(function($){

$('#subscribe').click(function(e) {
   e.preventdefault;
   
	var data1 = $('#firstname').val();
	var data2 = $('#lastname').val();
	var data3 = $('#email').val();
	
	if(data1 != "" && data2 != "" && data3 !="") {
		//window.location = http://acupunctureandbeauty.com.au/wp/wp-content/uploads/2012/08/Health-Anti-Ageing-Free-Report-with-20-Voucher.pdf;
	}
	else {
		alert('invalid input');
	}

});

})





