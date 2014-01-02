/* Author: Ryan Dick

*/

$(document).ready(function() {
  
  $('#signup').submit(function() {
		// update user interface
		$('#response').html('Adding email address...');
		
		// Prepare query string and send AJAX request
		$.ajax({
			url: 'inc/store-address.php',
			data: 'ajax=true&email=' + escape($('#email').val()),
			success: function(msg) {
			  if (msg.match(/Success/)) {
          $('#call_to_action_content').html('<div id="success">Success!<br /><br />Check your email to confirm sign up.</div>');
          $('#close').show();
			  } else {
			    $('#response').html(msg.replace(/is already subscribed to list.*/, "is already subscribed."));
			  }
			}
		});
	
		return false;
	});
	
	$('#call_to_action #close').click(function() {
	  $('#call_to_action').fadeOut(300);
	});


}); // end document ready





















