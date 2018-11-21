( function($) {
	$( document ).ready( function() {
		// Sort alphabetically 
		$( '#sort_alpha_up' ).click( function() {
			// Get all card divs 
			var cards = $( '.card' );
			cards.sort( function(a, b) {
				if ($(a).find('.card-title').html() < $(b).find('.card-title').html()) {
					return -1;
				} else {
					return 1;
				}
			});
			$( '#list_of_festivals' ).append(cards);
			$( '#sort_alpha_down' ).removeClass("btn-secondary");
			$( '#sort_alpha_up' ).addClass("btn-secondary");
		});

		$( '#sort_alpha_down' ).click( function() {
			// Get all card divs 
			var cards = $( '.card' );
			cards.sort( function(a, b) {
				if ($(a).find('.card-title').html() < $(b).find('.card-title').html()) {
					return 1;
				} else {
					return -1;
				}
			});
			$( '#list_of_festivals' ).append(cards);
			$( '#sort_alpha_up' ).removeClass("btn-secondary");
			$( '#sort_alpha_down' ).addClass("btn-secondary");
		});
	});
})(jQuery);