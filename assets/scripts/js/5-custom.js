jQuery( document ).ready(function($) {
	
	var _app = window._app || {};
		
	_app.emptyParentLinks = function() {
			
		$('.menu li a[href="#"]').click(function(e) {
		    e.preventDefault ? e.preventDefault() : e.returnValue = false;
		});	
		
	};
	
	_app.fixed_nav_hack = function() {
		
			
			$('.off-canvas').on('opened.zf.offCanvas', function() {
				$('header.header').addClass('off-canvas-content is-open-right has-transition-push');			
			});
			
			$('.off-canvas').on('close.zf.offCanvas', function() {
				$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
			});
			
			$(window).on('resize', function() {
				if ($(window).width() > 1023) {
					$('.off-canvas').foundation('close');
					$('header.header').removeClass('off-canvas-content has-transition-push');
				}
			});

	}
	
	_app.scroll_check = function() {
		// Fixed nav trigger
		$(window).on("load scroll resize", function(e) {
			var header_height = 85;
			var delay_height = 0;
		
			if ($(this).scrollTop() > (header_height + delay_height)) {
				$('body').addClass('scrolled');
			} else {
				$('body').removeClass('scrolled');
			}
		
		});
	
	}
			
	_app.init = function() {
		
		// Standard Functions
		_app.emptyParentLinks();
		_app.fixed_nav_hack();
		_app.scroll_check();
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});