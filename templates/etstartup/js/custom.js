/*** Stick Menu ***/
jQuery(function($){
  $(window).scroll(function() {
    var winTop = $(window).scrollTop();
    if (winTop >= 1) {
      $(".et-header").addClass("is-sticky");
    } else {
	  $(".et-header").removeClass("is-sticky");
    }
  })
})
/*** Change Color Preset ***/
jQuery(function ($) {  
        a = $("a").css("color");
        document.documentElement.style.setProperty('--background-color',a)
        document.documentElement.style.setProperty('--text-color',a)
});

/*** Counter ***/
jQuery(function ($) {  
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
});