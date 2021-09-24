
jQuery(function() {
	//----- OPEN
	jQuery('.mod-jmg-imghover-popup').on('click', function(e)  {
		jQuery('.mod-jmg-imghover-popup-modal').addClass('open');
		e.preventDefault();
	});

	//----- CLOSE
	jQuery('.mod-jmg-imghover-popup-close').on('click', function(e)  {
		jQuery('.mod-jmg-imghover-popup-modal').removeClass('open');
		e.preventDefault();
	});
});




