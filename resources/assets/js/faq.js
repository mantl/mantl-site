function checkResults() {
	
	var $container = $(".faq");
	var $noResults = $(".faq__no-results");

	if ( $container.outerHeight() === 0 ) {
		$noResults.fadeIn("fast");
	}
	else {
		$noResults.fadeOut("fast");
	}
}

function filter(value, $questions) {
    
    $questions.each(function() {

		if ($(this).text().toLowerCase().search(value) > -1) {
            
            $(this).closest(".faq__item").slideDown().fadeIn("fast", function() {
            	checkResults();
            });
        }
        else {
            
            $(this).closest(".faq__item").slideUp().fadeOut("fast", function() {
            	checkResults();
            });
        }
    });
}

$(function(){
	
	/*
	 * FAQ
	 *
	 */
	
	var $questions = $(".faq__item h2");
	var $input = $("#filter-faq");

	$input.on("keyup", function(e) {

		filter($input.val().toLowerCase(), $questions);
	});

	$questions.on("click", function(){

		var $this = $(this);
		var $next = $this.next();

		// var offset = $this.offset().top;

		// $('html, body').animate({
	 	//        scrollTop: offset
	 //    }, 500, function() {

	 //    	if ($("body").hasClass("fixed-header")) {
	    		
	 //    		$('html, body').animate({
		// 	        scrollTop: offset - $("header").outerHeight()
		// 	    }, 0, function() {
			    	
		// 	    });	    		
	 //    	}
	 //    });

		if ($this.hasClass("opened")) {
			
			$next.slideUp();
		}
		else {
			$next.slideDown();
		}

		$this.closest(".faq__item").toggleClass("opened");
		$this.toggleClass("opened");
	});	
});