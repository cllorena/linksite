jQuery( document ).ready(function() {
	$window = jQuery(window);
	jQuery( '.parallax' ).each(function(index) {
		var $ParallaxObject = jQuery(this);
		var $ObjectTop = Math.round($ParallaxObject.offset().top);
		var $ObjectBottom = Math.round($ParallaxObject.offset().top + $ParallaxObject.outerHeight() + 100);
		var $ScreenBottom = $window.innerHeight();
		var $ParallaxStart = ($ScreenBottom-$ObjectBottom < 0)? $ScreenBottom-$ObjectBottom : 0;
		//$ParallaxObject.html($ScreenBottom+' - '+$ObjectBottom+' - '+$ParallaxStart);
		
		if(jQuery( window ).width() > 991){
			jQuery(window).scroll(function() {							
				var yPos = $window.scrollTop(); 
				var top_of_element = $ParallaxObject.offset().top;
				var bottom_of_element = $ParallaxObject.offset().top + $ParallaxObject.outerHeight();
				var bottom_of_screen = $window.scrollTop() + $window.innerHeight();
				var top_of_screen = $window.scrollTop();
				
				if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
					// the element is visible, do something
					//$ParallaxObject.html($ScreenBottom+' - '+$ObjectTop+' - '+$ParallaxStart+' - '+(yPos+$ParallaxStart));
					$ParallaxObject.css({'transform':'translate(0px, -'+(yPos+$ParallaxStart)/2+'px)'});
				} 
			}); 
		}
	});
});