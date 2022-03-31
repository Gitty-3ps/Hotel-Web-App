<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!--Finalize title & add favicon to site (logo)-->
        <title>Swift E-Commerce</title>
        
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <!--Varify if two view ports are needed-->
        <meta name="viewport" content="width=device-width, inital-scale=1">
        
      
    </head>

    <body>

    <!-- navigation bar -->
  
		<nav class="navbar navbar-expand-md navbar-dark bg-dark text-danger">
			<div class="container-fluid">
				<a href="index.php"><img src="images/" alt="Company Logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">HOME</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php">SERVICES</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="offers.php">OFFERS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">ABOUT US</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">CONTACT US</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" button type="button" href="login.php" class="btn btn-primary" style="background-color: 	#d9e2ef; color:#00008B; border-style:double;">Login</button></a>
						</li><br>
            <li class="nav-item">
							<a class="nav-link" button type="button" href="register.php" class="btn btn-primary" style="background-color:#00008B; color:#d9e2ef; border-style:double;">Register</button></a>
						</li>	
					</ul>
				</div>
			</div>
		</nav>

    <!--Title Section-->
    <main>
    <div class="card bg-transparent text-white">
					<img src="images/hotel-pool-balcony.jpg" class="img-fluid"  alt="coffee beans">
					<div class="card-img-overlay d-flex d-flex justify-content-center">
						<h1 class=" display-1 card-text align-self-center text-white "><strong>Musella Hotel</strong></h1>
					</div>
				</div>	

        <div class="divider"></div>
			
			
    <!--Divider-->
				<div class="container-fluid"><br><br>
					<div class="row">
          <div id="carouselExampleCaptions" class="carousel slide col-md-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hotel-gym.jpg" class="d-block w-100" alt="Picture of hotel's gym">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-warning bg-dark">First slide label</h5>
        <p class="text-warning bg-dark">Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/dinning-table.jpg" class="d-block w-100" alt="Picture of hotel's dinning table">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-warning bg-dark">Second slide label</h5>
        <p class="text-warning bg-dark">Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/hotel-pool.jpg" class="d-block w-100" alt="Picture of hotel's pool">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-warning bg-dark">TAKE A SWIM</h5>
        <p class="text-warning bg-dark">Take a dip in one of our luxurious pools on the complex</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
						<div class="col-md-5 ">
							<h2>Musella Hotel</h2>
							<h4>We give you more of what you want and less of what you don’t need</h4>
							<p>Preview your stay, and feel the welcoming ambiance of our beautiful hotel.Whether you’ve come to close a deal, sip and socialize, spa and shop, rekindle with someone special or rediscover how special family time is,Heaven's Hotel has a memorable, imaginative and engaging experience waiting for you. </p>
						</div>
					</div>	
				</div>
			</main>

 

      <footer>
      
					
			<div class="container-fluid navbar-dark bg-dark">
      <div class="row">
            <div class="col-12">
              <div>
				<p class="text-center text-muted pt-3 ms-19">&copy; 2021 Heavens Hotel</p>
				<ul class="nav justify-content-center border-bottom pb-3 mb-3">
					<li class="nav-item"><a href="about.html" class="nav-link px-1 text-muted">About Us &#124;</a></li>
					<li class="nav-item"><a href="sitemap.html" class="nav-link px-1 text-muted">Site Map</a></li>
				</ul>
              </div>
			</div>
      </div>
      </div>
		</footer>
    

    
   
      

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   


    </body>
    <footer>
        
    </footer>



</html>