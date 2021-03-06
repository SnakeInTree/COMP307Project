<!DOCTYPE html>
<?php 
	session_start();
	if (is_int(session_id())) {
		$loggedin = true;
	} else {
		$loggedin = false;
	}
?>

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
				        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="browse_festivals.php">Browse Festivals</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="about.html">About</a>
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
		<div class="row">
			<div class="col">
				<div style="margin-top: 20px">
					<h3>Featured Festivals</h3>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div style="padding:0px 80px">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  	</ol>
						<div class="carousel-inner">
							<div class="carousel-item active" style="height:300px !important; overflow: hidden !important">
								<img class="d-block w-100" src="https://www.nycastings.com/wp-content/uploads/2016/09/film-festivals.jpg" alt="First slide">
								<div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.5);">
									<h5>Los Angeles FEEDBACK Female Film Festival</h5><p></p>
								</div>
						    </div>
						    <div class="carousel-item" style="height:300px !important; overflow: hidden !important">
						    	<img class="d-block w-100" src="https://www.quebecoriginal.com/en/listing/images/800x600/366c7104-1427-40e4-b614-2f82adb06ef2/the-montreal-world-film-festival-cinema-a-la-belle-etoile.jpg" alt="Second slide">
						    	<div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.5);">
									<h5>The Montréal World Film Festival</h5><p></p>
								</div>
						    </div>
						    <div class="carousel-item" style="height:300px !important; overflow: hidden !important">
						      	<img class="d-block w-100" src="http://latfusa.com/media/uploads/2016/05/23/thumb_6116_media_image_880x554.jpg" alt="Third slide">
						      	<div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.5);">
									<h5>Oniros Film Awards</h5><p></p>
								</div>
						    </div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<body>
</body>
</html>