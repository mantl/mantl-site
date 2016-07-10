$(function(){
	
	/*
	 * Tab System
	 *
	 */

	$(window).on("DOMContentLoaded resize", function() {
		
		$(".tab-content").each(function( index ) {
			
			var height = 0;

			$(".tab-content .tab").each(function(){
				
				var tabHeight = $(this).height();

				if (tabHeight > height) height = tabHeight;
			});

			var $this = $(this);

			$this.css("height", height);
		});
	});

	$('.technologies__item').matchHeight();	

	$('.features__item').matchHeight();
	$('.resources__item').matchHeight();	
	$('.features-page .features__item .match').matchHeight();

	$(".tabs ul li").on("click", function(e) {
		
		e.preventDefault();
		
		var $this = $(this);

		if ($this.hasClass("active")) return; // Already active tab? do nothing.

		var $target = $(".tab[data-tab-name='"+ $this.data("tab-target") +"']");
		var $active = $(".tab.active");

		$active.velocity({ 
		opacity: 0,
		left: "-100%",
		display: "none" 
	},
	{
		duration: 200,
		complete: function () {
			$active.toggleClass("active");
		}
	}
	);

	$target.velocity(
	  { 
	    opacity: 1,
	    left: "auto",
	    display: "block"
	  },
	  {
	  	duration: 200,
	  	complete: function () {

			$target.toggleClass("active");
		}
	  }
	);

		$this.addClass("active").siblings().removeClass("active");
	});
});