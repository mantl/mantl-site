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
	var $container = $("header");

	$('.menu-toggle').on('click', function (e) {
		
		e.preventDefault();
		
		var el = $(this);

		if (el.hasClass(activeClass)) {
			
			el.removeClass(activeClass);
		
			menu.velocity({
    			translateX: "-2000px",
    			rotateZ: "-45deg"
			}, {duration: 350}).velocity("slideUp", { duration: 1 }).velocity({
    			translateX: "0",
    			rotateZ: "0"
			}, {duration: 1})

			$('body').css('overflow', 'auto');
		}
		else {

			$('body').css('overflow', 'hidden');
			
			el.addClass(activeClass);
		
			menu.velocity("slideDown", { duration: 350 });
		}
	});


	/*
	 * Control menu behaviour on scroll
	 *
	 */

	var $header = $container,
		$body = $("body");

	$(window).on("DOMContentLoaded load resize scroll", function() {

		var viewport = window.innerHeight || document.documentElement.clientHeight;
	    
		if ($(this).scrollTop() >= (viewport - $header.outerHeight() ) && !$body.hasClass("fixed-header")) {
	    	
	    	$header.css("top", -$header.outerHeight()).velocity({top: 0}, {duration: 200});

	    	$body.removeClass("release-header").addClass("fixed-header");
	    }

	    if ($(this).scrollTop() < (viewport - $header.outerHeight() ) && $body.hasClass("fixed-header")) {
	    	$body.removeClass("fixed-header").addClass("release-header");
	    }
	});

	/*
	 * Set height in viewport sized elements to prevent Chrome Mobile glitch when hiding scrollbar
	 *
	 */

	 // $(window).on("DOMContentLoaded load resize", function() {

	 // 	var viewport = window.innerHeight || document.documentElement.clientHeight;
	 	
	 // 	$(".hero").css("height", viewport);

	 // });
});