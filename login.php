<?php
session_start(); // Start the session


$username_err = "";
$password_err = "";

function user_Authen(){
	$user = "admin";
	$pwd = "admin";
	if(isset($_POST['submit'])){
		if($user == $pwd){
			header('Location: services.php');
		}else{
			echo "";
		}

	}

}

if (isset($_POST['submit'])) {

	if (empty($_POST["uname"])) {

		$username_err = "*Please enter username";
		
	}

	if (empty($_POST["password"])) {

		$password_err = "*Please enter password";
	}

	if (!empty($_POST["uname"]) && (!empty($_POST["password"])))
		{
			user_Authen();
		}else{
		$_SESSION['uname'] = htmlentities($_POST['uname']);
		header('Location: index.php');
	}
}

?>




<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, inital-scale=1">
	<title>Login | My_site</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
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


	<div class="container-sm">
		<h2>Musella Hotel</h2>
		<br />
		<h3>Login</h3>
		<br /> 
        
		<form method="POST" action="<?php echo htmlentities( $_SERVER['PHP_SELF']); ?>">
		<div class="form-group row">
				<div class="col-md-4">
					<input type="text" name="uname" class="form-control" placeholder="Enter Username">
					<span class="help-block text-danger"><?php echo $username_err; ?></span>
					<br /><br />
                    <div class="input box">
                    <i class="bi bi-key-fill"></i>
					<input type="password" name="password" class="form-control" placeholder="Enter Password">
					<span class="help-block text-danger"><?php echo $password_err; ?></span>
                    </div>
					<br /><br />
					<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Login">
					<br /><br />
					<p>Don't have an account? <a href="register.php">Register today</a>.</p>
				</div>
			</div>
		</form>
      
	</div>
</body>
</html>




