
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	
		<!-- Css Styles -->
		<link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="./css/flaticon.css" type="text/css">
		<link rel="stylesheet" href="./css/style.css" type="text/css">
	
		
		<style>
			dl{font-size: 20px;}
			dt{color:#d48166;}
			.btn{color: #e6e2dd;}
			h4{color:#d48166;}
			h3{text-align: center; }
			body{ background-color: #e6e2dd; font-size: 15px;}
			footer{background-color:#d48166;}
			.divider {
								height: 3rem;
								background-color: rgba(0, 0, 0, .1);
								border: solid rgba(0, 0, 0, .15);
								border-width: 1px 0;
								box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
								
								background-color:#d48166
							}
		</style>
	</head>
	<body>
		<!-- navigation bar -->
		<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #d48166;">
			<div class="container-fluid">
				<a href="#"> <img src="img/logo_2_8.png" alt="logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="Home.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="rooms.html">Rooms</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="dining.html">Dining</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Amenities&Services.html">Amenities&amp;Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Meetings&Events.html">Meetings&amp;Events</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" button type="button" href="reserve.html" class="btn btn-dark" style="background-color: #373a36; border-color:#d48166;">Reserve Today</button></a>
						</li>	
					</ul>
				</div>
			</div>
		</nav>
		<main>
			<!-- Title Section -->
			
				<div class="card bg-transparent text-white">
					<img src="./pictures/cover.jpg" class="img-fluid"  alt="coffee beans">
					<div class="card-img-overlay d-flex d-flex justify-content-center">
						<h1 class=" card-text align-self-center ">Heaven's Hotel</h1>
					</div>
				</div>		
			
			
			
			<!-- divider -->
			<div class="divider"></div>
			
				
				<div class="container-fluid"><br><br>
					<div class="row">
						<div class="col-md-6">
							<video width="100%" id="image1" class="rounded" controls autoplay loop>
								<source src="./pictures/hotel.mp4" type="video/mp4">
							</video>
						</div>
						<div class="col-md-5 ">
							<h2>Heaven's Hotel</h2>
							<h4>We give you more of what you want and less of what you don’t need</h4>
							<p>Preview your stay, and feel the welcoming ambiance of our beautiful hotel.Whether you’ve come to close a deal, sip and socialize, spa and shop, rekindle with someone special or rediscover how special family time is,Heaven's Hotel has a memorable, imaginative and engaging experience waiting for you. </p>
						</div>
					</div>	
				</div>
					
				
		</main>
		<footer>
			<div class="container-fluid navbar-white" style="background-color:#d48166 ">
				<p class="text-center text-muted pt-3">&copy; 2021 Heavens Hotel</p>
				<ul class="nav justify-content-center border-bottom pb-3 mb-3">
					<li class="nav-item"><a href="about.html" class="nav-link px-1 text-muted">About Us &#124;</a></li>
					<li class="nav-item"><a href="sitemap.html" class="nav-link px-1 text-muted">Site Map</a></li>
				</ul>
			</div>
		</footer>	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>