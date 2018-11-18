<?php 

?>
<!DOCTYPE html>
<head>
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
				        <a class="nav-link" href="/~szhang52">Home <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="browse_festivals.php">Browse Festivals </a>
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
							<div class="carousel-item active">
								<img class="d-block w-100" src="https://www.macmillandictionary.com/external/slideshow/thumb/Grey_thumb.png" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Caption</h5><p>small text</p>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="https://www.macmillandictionary.com/external/slideshow/thumb/Grey_thumb.png" alt="Second slide">
						    	<div class="carousel-caption d-none d-md-block">
									<h5>Caption</h5><p>small text</p>
								</div>
						    </div>
						    <div class="carousel-item">
						      	<img class="d-block w-100" src="https://www.macmillandictionary.com/external/slideshow/thumb/Grey_thumb.png" alt="Third slide">
						      	<div class="carousel-caption d-none d-md-block">
									<h5>Caption</h5><p>small text</p>
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
