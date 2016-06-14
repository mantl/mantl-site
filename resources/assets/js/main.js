function elementInViewport2(el) {
  
	if (typeof jQuery === "function" && el instanceof jQuery) {
		el = el[0];
	}

	var top = el.offsetTop;
	var left = el.offsetLeft;
	var width = el.offsetWidth;
	var height = el.offsetHeight;

	while(el.offsetParent) {
		el = el.offsetParent;
		top += el.offsetTop;
		left += el.offsetLeft;
	}

	return (
		top < (window.pageYOffset + window.innerHeight) &&
		left < (window.pageXOffset + window.innerWidth) &&
		(top + height) > window.pageYOffset &&
		(left + width) > window.pageXOffset
	);
}

$(function(){
	
	/*
	 * Toggle menu
	 *
	 */
		
	var activeClass = 'is-active';
	var menu = $('.menu');

	$('.menu-toggle').on('click', function (e) {
		
		e.preventDefault();
		
		var el = $(this);

		if (el.hasClass(activeClass)) {
			
			console.log("Cierra");

			el.removeClass(activeClass);
		
			menu.velocity({
    			translateX: "-2000px",
    			rotateZ: "-45deg"
			}, {duration: 350}).velocity("slideUp", { duration: 1 }).velocity({
    			translateX: "0",
    			rotateZ: "0"
			}, {duration: 1})
		}
		else {

			console.log("Abre");

			el.addClass(activeClass);
		
			menu.velocity("slideDown", { duration: 350 });
		}
	});


	/*
	 * Control menu behaviour on scroll
	 *
	 */

	var $header = $("header"),
		$body = $("body");

	$(window).on("DOMContentLoaded load resize scroll", function() {
	    
		if ( $(this).scrollTop() > $header.offsetHeight && elementInViewport2($header) ) { // this refers to window
			$header.velocity("fadeOut");
		}

	    if ($(this).scrollTop() >= ((window.innerHeight || document.documentElement.clientHeight) - $header.outerHeight() ) && !$body.hasClass("fixed-header")) { // this refers to window

	    	$body.removeClass("release-header").addClass("fixed-header");
	    	//$header.velocity("slideDown", { duration: 200 });
	    }

	    if ($(this).scrollTop() < ((window.innerHeight || document.documentElement.clientHeight) - $header.outerHeight() ) && $body.hasClass("fixed-header")) {
	    	$body.removeClass("fixed-header").addClass("release-header");
	    }
	});

});