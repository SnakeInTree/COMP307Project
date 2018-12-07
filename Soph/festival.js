( function($) {
	$( document ).ready( function() {
		$ ( '.collapsible' ).click( function() {
			$( this ).next().toggle();
		});
	});
	function addFavourite(userid, filmid) {
		$.ajax({
			url: "add_festivals.php",
			method: "POST",
			content: $( '#favourite_button' ),
			data: {
				'userid':userid,
				'filmid':filmid
			}
		})
		.done( function() {
			// Make button change 
			this.attr('disabled', true);
			this.html('Favourited');
		})
	};


})(jQuery);