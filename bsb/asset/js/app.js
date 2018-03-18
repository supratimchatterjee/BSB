jQuery(document).ready(function($) {
	function updateCaptionOffset(){
		var navbarDiv	= $('.uk-navbar'),
			captionDiv	= $('.offset-caption');

		if(captionDiv.length < 1)
			return false;

		var navbarOffset = jQuery('.uk-navbar').offset().left;

		captionDiv.css('padding-left', navbarOffset + 'px');
	}
	
	$(window).on('resize load', function(event) {
		updateCaptionOffset();
	});

	//console.log(headerLeftOffset);

	$('.main-menu-button').click(function() {
		$(this).toggleClass('active');
		$('body').toggleClass('mobile-menu-active');
		$('.tm-mobile-nav-drop').slideToggle();
		return false;
	});

	var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);

	if(isSafari) {
		$('.uk-height-1-1').each(function(index, el) {
			var sparent = $(this).parent();
			$(this).css('min-height', sparent.height() + 'px');
		});
		$(window).resize(function(event) {
			/* Act on the event */
		});
	}
});