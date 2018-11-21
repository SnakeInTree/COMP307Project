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

		$( '#filter' ).change( function() {
			$( '#filter_term' ).removeAttr("hidden");
			$( '#filter_submit' ).removeAttr("hidden");
		})

		$( '#filter_submit' ).click( function() {
			var input = $( '#filter_term' );

			$.ajax({
				url: "filter.php",
				context: $( '#list_of_festivals' ),
				data: {
					'filter_type': $( '#filter' ).val(), 
					'filter_term': input.val()
				}
			})
			.done(	function(data) {
				// $(this).append(data);
				$(this).html(data);
			});
		});
	});
})(jQuery);