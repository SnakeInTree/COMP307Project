( function($) {
	$( document ).ready( function() {
		$( '#login_submit' ).click( function() {
			$( '#register_error' ).html("<br />");
			$( '#login_error' ).html("<br />");
			// $( '#username_login_error' ).html("");
			// $( '#password_login_error' ).html("");
			var username = $( '#username_login' ).val();
			var password = $( '#password_login' ).val();

			// Check if username password empty
			if ((username == null || username == "") && (password == null || password == "")) {
				$( '#login_error' ).html("Please fill in login fields!");
				// $( '#username_login_error' ).html("Username can't be empty!");
				// $( '#password_login_error' ).html("Password can't be empty!");
				$( '#username_login' ).focus();
				return;
			} else if (username == null | username == "") {
				$( '#login_error' ).html("Username missing!");
				// $( '#username_login_error' ).html("Username can't be empty!");
				$( '#username_login' ).focus();
				return;
			} else if (password == null || password == "") {
				$( '#login_error' ).html("Password missing!");
				// $( '#password_login_error' ).html("Password can't be empty!");
				$( '#password_login' ).focus();
				return;
			}

			// Check if username password pair is correct with php script 
			$.ajax({
				url: "login.php", // PHP script should return either wrong username, wrong password, logged in
				method: "POST",
				context: $( '#login_form' ),
				data: {
					'username': username,
					'password': password
					}
			})
			.done( function(data) {
				switch (data) {
					case "wrong username":
						$( '#login_error' ).html("That username doesn't exist!");
						break;
					case "wrong password":
						$( '#login_error' ).html("Password incorrect!");
						break;
					case "ok":
						$ ( this ).html("<p>You're logged in!</p>");
						break;
					default:
						break;
				}
			});
			
		});

		$( '#register_submit' ).click( function() {
			$( '#login_error' ).html("<br />");
			$( '#register_error' ).html("<br />");

			var email = $( '#email' ).val();
			var username = $( '#username_register' ).val();
			var password = $( '#password_register' ).val();
	

			if ((email == null || email == "") && (username == null || username == "") && (password == null || password == "")) {
				$( '#register_error' ).html("Please fill in all fields!");
				$( '#email' ).focus();
				return;
			} else if (email == null || email == "") {
				$( '#register_error' ).html("Email missing!");
				$( '#email' ).focus();
				return;
			} else if (username == null || username == "") {
				$( '#register_error' ).html("Username missing!");
				$( '#username_register' ).focus();
				return;
			} else if (password == null || password == "") {
				$( '#register_error' ).html("Password missing!");
				$( '#password_register' ).focus();
				return;
			}

			$.ajax({
				url: "register.php", // PHP script should return either wrong username, wrong password, logged in
				method: "POST",
				context: $( '#register_form' ),
				data: {
					'email': email,
					'username': username,
					'password': password
					}
			})
			.done( function(data) {
				switch (data) {
					case "email exists": 	// Also if email and username both exist
						$( '#register_error' ).html("That email is being used!");
						break;
					case "username taken":
						$( '#login_error' ).html("Username taken");
						break;
					case "ok":
						$ ( this ).html("<p>You've successfully registered!</p>");
						break;
					default:
						break;
				}
			});

		});
	});

})(jQuery);