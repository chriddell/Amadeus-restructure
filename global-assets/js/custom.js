jQuery(document).ready(function($) {
	$('.pillars-nav-container.show-desktop-only').on('mouseenter mouseleave', 'a', function(e) {
		var $elem = $('.pillar-nav-overlay-container', this);

		if(e.type == 'mouseenter') {
			$elem.stop().fadeIn(400);
		} else if(e.type == 'mouseleave') {
			$elem.stop().fadeOut(400);
		}
	});
	
	if($('.bxslider-home').length > 0) {
		$('.bxslider-home').bxSlider({
			controls : false,
			auto : true,
			pause : 4000,
			autoHover : true
		});
	}
});


$( "#amadeusCustomerYes" ).click(function() {
	$( "#customerYes" ).show();
	$( "#customerNo" ).hide();
});

$( "#amadeusCustomerNo" ).click(function() {
	$( "#customerYes" ).hide();
	$( "#customerNo" ).show();
});


$( "#video-poster-holder" ).click(function() {
	$( "#video-holder" ).show();
	$( "#video-poster-holder" ).hide();
});

/* Smooth Scrolling - https://css-tricks.com/snippets/jquery/smooth-scrolling/ */
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});