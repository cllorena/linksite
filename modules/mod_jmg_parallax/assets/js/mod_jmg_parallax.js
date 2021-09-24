
$(document).ready(function(){

   $window = $(window);
                
   $('section[data-type="joomega_parallax_background"]').each(function(){
     var $JoomegaParallaxObject = $(this);
                    
      $(window).scroll(function() {							
		var yPos = -(($window.scrollTop() / $JoomegaParallaxObject.data('speed'))-$JoomegaParallaxObject.data('top')); 
		var JoomegaParallaxCoords = 'center '+ yPos + 'px';
		$JoomegaParallaxObject.css({ backgroundPosition: JoomegaParallaxCoords });
		
	}); 
 });	
}); 

document.createElement("article");
document.createElement("section");