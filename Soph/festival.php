
<!DOCTYPE html>
<head>
	<!-- jQuery -->
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
</head>
<body>
	<div class="container-fluid" style="padding-left: 0px; padding-right: 0px">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<!-- Brand -->
			<a class="navbar-brand" href="#">FilmFest</a>
			<!-- Expandable menu -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
				        <a class="nav-link" href="/">Home</a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="browse_festivals.php">Browse Festivals</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="#">About</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="#">Login</a>
			      	</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div style="margin-top: 20px">
					<?php 
						// include "get_festival.php"
						$name = "Festival name";
						$about = "About section";
						$type = "Festival type";
						$contact = "Contact info";
						$email = "Contact email";
						$fb = "Facebook";
						$twitter = "Twitter";
						$rules = "Rules";
						$awards = "Awards";
						$deadlines = "Deadlines"; // array
						$dates = "Dates"; 	// array
						$categories = "Categories";	// array
						$fees = "Fees"; 			// array
						$venue = "Venue";
						$website = "Website";
						$years = "Years running";
						$picture = "https://www.raindance.org/wp-content/uploads/2017/12/eyqxosovr4aq7u5fhzys-1080x675.jpg";
						$icon = "https://storage.googleapis.com/ff-storage-p01/festivals/logos/000/001/589/large/logo.jpg?1537117981";

					?>
					<h3><?php echo $name;?></h3>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img src="<?php echo $picture?>">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-3">
				<img src="<?php echo $icon?>" style="height: 200px; width: 200px;">
			</div>
			<div class="col-9"  style="padding: 20px 30px">
				<h6>About</h6>
				<p><?php echo $about; ?></p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-3" style="padding: 20px 30px">
				<h6>Festival Type</h6>
				<p><?php echo $type;?></p>
				<hr>
				<h6>Contact Information</h6>
				<p><?php echo $email;?></p>
				<p><?php echo $contact;?></p>
			</div>
			<hr>
			<div class="col-9" style="padding: 20px 30px">
				<h6>Awards & Prizes</h6>
				<p><?php echo $awards;?></p>
				<hr>
				<h6>Rules & Conditions</h6>
				<p><?php echo $rules;?></p>
			</div>

	</div>
</body>