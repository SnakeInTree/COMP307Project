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
			$( '#filter_button' ).removeAttr("hidden");
		})

		$( '#filter_button' ).click( function() {
			$( '#filter_error' ).html("");
			var input = $( '#filter_term' ).val();
			if (!input) {
				$( '#filter_error' ).html("Please enter a filter term");
				$( '#filter_term' ).focus();
				return;
			}


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

		$( '#search_button' ).click( function() {
			$( '#search_error' ).html("");
			var input = $( '#search_term' ).val();
			if (!input) {
				$( '#search_error' ).html("Please enter a search term");
				$( '#search_term' ).focus();
				return;
			}
			$.ajax({
				url: "search.php",
				context: $( '#list_of_festivals' ),
				data: {
					'search_term': input.val()
				}
			})
			.done( function(data) {
				$(this).html(data);
			});
		})
	});
})(jQuery);