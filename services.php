<?php
    session_start();

    function session_info(){
    if (isset($_SESSION['uname'])){
    $uname = htmlspecialchars($_SESSION['uname']);
    echo "Welcome". " ". "<i>".$uname. "</i>"."<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!--Finalize title & add favicon to site (logo)-->
        <title>Services</title>
        <SCRIPT LANGUAGE="JavaScript"> //Allow to only go forward
        history.forward()
        </SCRIPT>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <!--Varify if two view ports are needed-->
        <meta name="viewport" content="width=device-width, inital-scale=1">
       

        <!-- Vue Tag -->
		<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>		
		<!-- icon tag -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
		
		
	
		<!-- Css Styles -->
        <link rel="stylesheet" href="services.css">
        
      
    </head>

    <body>

    <!-- navigation bar -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark p-3">
			<div class="container-fluid">
				<a href="index.php"><img src="images/" alt="Company Logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">HOME</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page"  href="services.php">SERVICES</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="offers.php">OFFERS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">LOGOUT</a>
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

     

        <main>
            <div class="row g-0"  style="background-image: url(images/wall10.png); color:#e6e2dd;">
                <div class="col-md-3 px-1 py-1">
                <i class="bi bi-person-circle fa-5x"></i>
				</div>
            </div>
              
            <div class="row g-0" style="background-color:#000000;">
                <div class="col-md-3">
                    <p class="h3 "><?php session_info();?></p>
                     
                </div>
            </div>
			<!-- Title Section -->
			<div style="background-image: url(images/wall10.png); color:#e6e2dd;">
				<div class="container"><br><br>
					<div class="row" style="text-align:center;"><br>
						<h1>Services</h1>
						<h5>Modern. Accessible. Affordable.</h5>	
						<hr class="rounded">
					</div><br>
					<div class="row">
						<div class="col-md-5">
							<video width="100%" id="image1" class="rounded"  controls autoplay>
								<source src="images/vid2.mp4" type="video/mp4">
							</video>
						</div>
						<div class="col-md-5">
							<h2>Get ready for the time of your life!</h2>
							<p>Designed for both short-term visits and extended stay travellers, Heaven's Hotel is the premier choice among sophisticated travellers seeking the comfort and privacy of home blended with the amenities found at top luxury hotels.</p>
						</div>
					</div>
				</div><br>
			</div>
			
			<!-- divider -->
			<div class="divider"></div>
			
			<div class="container-fluid text-center" style="background-color:#373a36; color:#e6e2dd;">
			<br><br>
				<!-- Key Services -->
				<h2>Key Services</h2>
				<div class="row justify-content-evenly">
					<div class="col-lg-4">
						<a href="#" class="fa fa-coffee"></a>
						<h4>24 Hour Room service</h4>
					</div>
					<div class="col-lg-4">
						<a href="#" class="fa fa-wifi"></a>
						<h4>Complimentary internet access</h4>
					</div>
					<div class=" col-lg-4">
						<a href="#" class="fa fa-desktop"></a>
						<h4>Online booking System</h4>
					</div>
				</div><br><br>
			</div>
			
			<!-- divider -->
			<div class="divider"></div>
			
			<!-- Amenities -->
			<div>
			<div class="container text-center"><br>
				<h2>Amenities</h2>
				<div class="row">
					<div class="col-lg-4">
						<div id="Spa">
							<img :src="image" class= "img-fluid rounded"  alt="Spa">
							<h3>Spa Room</h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div id="Fitness">
							<img :src="image" class= "img-fluid rounded"  alt="Fitness Room">
							<h3>Fitness Room</h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div id="Pool">
							<img :src="image" class= "img-fluid rounded"  alt="Pool">
							<h3>Pool</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div id="Cafe">
							<img :src="image" class= "img-fluid rounded"  alt="Cafe">
							<h3>Cafe</h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div id="Game">
							<img :src="image" class= "img-fluid rounded"  alt="Game Room">
							<h3>Game Room</h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div id="Golf">
							<img :src="image" class= "img-fluid rounded"  alt="Golf Course">
							<h3>Golf Course</h3>
						</div>
					</div>
				</div>
			</div>
			</div>
			
			<!-- vue links -->	
				<script>
					new Vue({
						el: "#Spa",
						data: {
						image: 'images/spa.jpg'
						}	
					
					})
					
					
					new Vue({
						el: "#Fitness",
						data: {
						image: 'images/gym.jpg'
						}
					})
					
					new Vue({
						el: "#Pool",
						data: {
						image: 'images/pool1.jpg'
						}
					})
					
					new Vue({
						el: "#Cafe",
						data: {
						image: 'images/cafe.jpg'
						}
					})
					
					new Vue({
						el: "#Game",
						data: {
						image: 'images/game.jpg'
						}
					})
					new Vue({
						el: "#Golf",
						data: {
						image: 'images/golf.jpg'
						}
					})
				</script>
			
			
			<!-- divider -->
			<div class="divider"></div>
			
			<!-- Book now banner -->
			<div style="background-color:#e6e2dd;">
				<div class="container text-center " style="height:200px"><br><br>
					<h2>Like What you see?</h2>
					<a href="#"><h5>Book now</h5></a><h5> so you and your loved ones can access all we have to offer</h5>
				
				</div>
                <div class="divider" style="background-color:#e6e2dd;"></div>

			</div>
		
			<!-- divider -->	
           
		
			<!-- More Services -->
			
		
			<!-- divider -->	
			<div class="divider"></div>
		
			<!-- Offers and Packages -->	
			<div>
				<div class="container"><br><br>
					<div class="row">
						<h2>Offers and Packages</h2>
						<h5>Exclusive offers by Heaven's Hotel</h5>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<img src="images/staycation.jpg" alt="Staycation Package" class="img-thumbnail img-fluid">
						</div>
						<div class="col-lg-2">
							<h4>Staycation Package starting at: &#36;310.00 US</h4>
								<ul>
									<li>Full breakfast: &#36;310.00 US</li>
									<li>Free tickets to game room</li>
									<li>Upgrade to higher room category upon availability starting at: &#36;310.00 US</li>
									<li>Accommodation for minimum 4 or more nights: &#36;310.00 US</li>
								</ul>
							<a class="btn" href="reserve.html" style="background-color:#d48166;" role="button">Book Now</a><br><br>
						</div>
						<div class="col-lg-4">
							<img src="images/couple.jpg" alt="Couples Package" class="img-thumbnail img-fluid">
						</div>
						<div class="col-lg-2">
							<h4>Couples Package starting at &#36;250.00 US</h4>
								<ul>
									<li>Champagne in the room: &#36;310.00 US </li>
									<li>Chocolate covered strawberries: &#36;290.00 US</li>
									<li>Table reservations in restaurants: &#36;270.00 US</li>
									<li>Seasonal flower bouquet: &#36;260.00 US</li>
								</ul>
								<a class="btn" href="reserve.html" style="background-color:#d48166;" role="button">Book Now</a><br><br>
						</div>
					</div><br><br>
					<div class="row">
						<div class="col-lg-4">
							<img src="images/early.jpg" alt="Advance Purchase Offer" class="img-thumbnail img-fluid">
						</div>
						<div class="col col-lg-2">
							<h4>Advance Purchase Offer starting at: &#36;310.00 US</h4>
								<ul>
									<li>Book in advance to receive a 10% discount</li>
									<li>Upgrade to higher room category upon availability starting at: &#36;310.00 US</li>
									<li>Accommodation for minimum 4 or more nights: &#36;310.00 US</li>
								</ul>
								<a class="btn" href="reserve.html" style="background-color:#d48166;" role="button">Book Now</a><br><br>
							</div>
						<div class="col-lg-4">
							<img src="images/food.jpg" alt="Food Lovers Offer" class="img-thumbnail img-fluid">
						</div>
						<div class="col-lg-2">
							<h4>Food Lovers Offer starting at: &#36;310.00 US</h4>
								<ul>
									<li>Full breakfast: &#36;310.00 US</li>
									<li>Free Dessert: &#36;310.00 US</li>
									<li>Special discount at RoyalSide Restaurant: &#36;310.00 US</li>
								</ul>
							<a class="btn" href="reserve.html" style="background-color:#d48166;" role="button">Book Now</a><br><br>
						</div>
					</div>
				</div><br><br>
			</div>	
		</main>
       
		<footer>
			<div class="container-fluid  bg-dark footerStyle text-light">
				<p class="text-center text-muted pt-3">&copy; 2022 Musella Hotel</p>
				<ul class="nav justify-content-center border-bottom pb-3 mb-3">
					<li class="nav-item"><a href="about.html" class="nav-link px-1 text-muted">About Us &#124;</a></li>
					<li class="nav-item"><a href="sitemap.html" class="nav-link px-1 text-muted">Site Map</a></li>
					
				</ul>
			</div>
		</footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
      

  
    
   

