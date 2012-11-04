// al caricamento della pagina (document ready) eseguo gli script
jQuery(document).ready(function (){

// accedo al div con id divEsteso (notare il #) e ne modifico le proprietà height e width
	jQuery(".blocco").width(jQuery(window).width())
	jQuery(".blocco").height(jQuery(window).height())
	jQuery(".t_photo div").width((jQuery(window).width())/100*90)
	jQuery(".t_photo div").height((jQuery(window).height())/100*90)
	jQuery(".pic_slide").height((jQuery(window).height())/100*85)
	jQuery(".t_photo h3").width((jQuery(window).width())/100*90)
	jQuery(".centerer").height((jQuery(window).height())/100*90)
	jQuery('.next_button').on('click', function (e) {
	    // Emulate a right arrow keydown on the document
	    jQuery(document).trigger(jQuery.Event('keydown', { keyCode: 39 }));
	});
	jQuery('.prev_button').on('click', function (e) {
	    // Emulate a right arrow keydown on the document
	    jQuery(document).trigger(jQuery.Event('keydown', { keyCode: 37 }));
	});
	//block the tablet scroll	
	//   function blockMove() {
	//      event.preventDefault() ;
	//   }


});


//var resizeTimer;
jQuery(window).resize(function () {
	// ridimensiono il div anche al cambiamento della window
	jQuery(".blocco").width(jQuery(window).width())
	jQuery(".blocco").height(jQuery(window).height())
	jQuery(".t_photo div").width((jQuery(window).width())/100*90)
	jQuery(".t_photodiv").height((jQuery(window).height())/100*90)
	jQuery(".t_photo h3").width((jQuery(window).width())/100*90)
	//reload on window resize
	//clearTimeout(resizeTimer);
    //resizeTimer = setTimeout(100);
    location.reload();
});






