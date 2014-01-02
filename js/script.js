/* Author: Ryan Dick

*/

$(document).ready(function() {
  
  mixpanel.people.identify();
  
  //Screenshot carousel - credit to Instagram for basis of code
  function next_slide() {
      var active = $('#screenshots img.active');
      if (active.length == 0) active = $('#screenshots img:last');
      var next = active.next().length ? active.next() : $('#screenshots img:first');
      active.addClass('last-active');
      next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0}, 1500, function() {
          active.removeClass('active last-active');
      });
  }
  
  //Signup form animations
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
  
  $('#overview_link').click(function() {
    $('nav ul li a.current').removeClass('current');
    $('#overview_link').addClass('current');
    $('#slider').animate({ right:"0"},500);
    mixpanel.track("Overview click");
  });  
  
  $('#how_it_works_link').click(function() {
    $('nav ul li a.current').removeClass('current');
    $('#how_it_works_link').addClass('current');
    $('#slider').animate({ right:"570"},500);
    mixpanel.track("How It Works click");    
  });
  
  $('#love_it_link').click(function() {
    $('nav ul li a.current').removeClass('current');
    $('#love_it_link').addClass('current');
    $('#slider').animate({ right:"1140"},500);
    mixpanel.track("Love It click");    
  });

  $('#about_us_link').click(function() {
    $('nav ul li a.current').removeClass('current');
    $('#about_us_link').addClass('current');
    $('#slider').animate({ right:"1710"},500);
    mixpanel.track("About Us click");    
  });

  $('#app_store_link').click(function() {
    mixpanel.track("App Store click");
  });

  setInterval(next_slide, 5000);
    
}); // end document ready

