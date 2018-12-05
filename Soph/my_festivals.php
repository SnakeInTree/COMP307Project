<?php 

	include "display_user_cards.php";

?>
<!DOCTYPE html>
<head>
	<!-- Style sheet -->
	<link rel="stylesheet" type="text/css" href="browse_page.css">

	<!-- jQuery -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!-- BOOTSTRAP 3 -->
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- Latest compiled JavaScript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- BOOSTRAP 4 -->
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- JavaScript -->
    <script src="search.js"></script>

</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<!-- Brand -->
			<a class="navbar-brand" href="#">FilmFest</a>
			<!-- Expandable menu -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
				        <a class="nav-link" href="/">Home</a>
			      	</li>
			      	<li class="nav-item active">
			        	<a class="nav-link" href="browse_festivals.php">Browse Festivals<span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="#">About</a>
			      	</li>
			      	<?php 
			      		if ($loggedin) {
			      			?>
			      				<li class="nav-item">
			      					<a class="nav-link" href="my_festivals.php">My Festivals</a>
			      				</li>
			      			<?php
			      		}
			      	?>
			      	<li class="nav-item">
						<a class="nav-link" href="<?php 
			      			if () echo "login_page.php"; 
							else echo "account.php";?>"><?php 
			      				if (!$loggedin) {
									echo "Login"; 
			      				} else {
									echo "Logout";

			      				}?></a> 
			      	</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container">
		<!-- <form action="#" method="get"> -->
			<div class="row search" style="margin-top: 20px">
				<div class="col-10">
					<input size="80" class="form-control" id="search_term">
					<small id="search_error" style="color:red"></small>
				</div>
				<div class="col-2">
					<button type="button" class="btn btn-info" id="search_button">Search</button>
				</div>
			</div>
		<!-- </form> -->
		<hr>
		<div class="row">
			<div class="col-3">
				Sort &nbsp;&nbsp;&nbsp;<button type="button" class="btn" id="sort_alpha_up"><i class="fas fa-sort-alpha-down"></i></button> <button type="button" class="btn" id="sort_alpha_down"><i class="fas fa-sort-alpha-up"></i></button>
			</div>
			<div class="col-9">
				<!-- <forn> -->
				<div class="form-group row">
					 <div class="col">
					 	<select class="custom-select" id="filter">
							<option disabled selected value> - Select a filter - </option>
							<option value="location">Location</option>
						</select>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="filter_term" hidden>
						<small style="color:red" id="filter_error"></small>
					</div>
				<!-- </forn> -->
					<button type="button" class="btn btn-light" id="filter_button" hidden>Filter</button>
					
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col" id="list_of_festivals">
				<?php
					// include "search.php";
				?>
				
			</div>
		</div>
	</div>
<body>
</body>
</html>

