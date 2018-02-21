
// Insert Datepicker
$( function() {
	$( "#datepicker" ).datepicker();
});

$( document ).ready(function() {
	
	console.log("ready");
	
    // Register submit event
    $( "#submit" ).click(function() {
    	$.ajax({
    		type: 'POST',
    		data: jQuery.param({
    			type: $('#types').val(),
    			date: $('#datepicker').val(),
    			tracking: $('#trackingid').val(),
    			deliveryname: $('#deliveryname').val(),
    			size_l: $('#size_l').val(),
    			size_w: $('#size_w').val(),
    			size_h: $('#size_h').val(),
    			weight: $('#weight').val(),
    		}),
    	    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    		url: "ajax/shippingForm.php?action=submit"
    	})
    	.done(function(data) {
    		$('#noticeresult').html(data);
    	});
    	
    	
  });
});