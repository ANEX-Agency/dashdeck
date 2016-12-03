(function( $ ) {
	
	'use strict';
	 
	/**
	 * ##################################################
	 * INIT FUNCTIONS ###################################
	 * ##################################################
	 */

    $(document).ready(function() {
				
		// Lazyload
		[].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
			img.setAttribute('src', img.getAttribute('data-src'));
			img.onload = function() {
				img.removeAttribute('data-src');
			};
		});
		
		$( "body > a" ).on( "click", function(e) {
			var url = $(this).attr('href');
			e.preventDefault();
			$('iframe').attr('src', url);
		});
		
		
	});
	
})( jQuery );