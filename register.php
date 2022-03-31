<?php

session_start(); // Start the session

$uname_err = "";
$lname_err = "";
$fname_err = "";
$email_err = "";
$password_err = "";
$confirmPass_err = "";
$pass_err = "";


if (isset($_POST['submit'])) {
	$password = $_POST['password'];

	if (empty($_POST["fname"])) {

		$fname_err = "*Please enter first name";
		
	}
    if (empty($_POST["lname"])) {

		$lname_err = "*Please enter last name";
		
	}
    if (empty($_POST["email"])) {

		$email_err = "*Please enter email address";
		
	}
    if (empty($_POST["uname"])) {

		$username_err = "*Please enter username";
		
	}

	if (empty($_POST["password"])) {
		$password_err = "*Please enter password";
    }elseif(strlen($password) < 8){
			echo $pass_err;
		}
	}



    if (empty($_POST["confirmPass"])) {

		$confirmPass_err = "*Please confirm password";
	}

	if (!empty($_POST["fname"]) && (!empty($_POST["lname"]))&&(!empty($_POST["email"]) && (!empty($_POST["uname"]))) && (!empty($_POST["password"]) && (!empty($_POST["confirmPass"])))){

		$_SESSION['fname'] = htmlentities($_POST['fname']);
		header('Location: services.php');
	}

if(isset($_POST['submit'])){
        $fname = "Firstname:".$_POST['fname']."
        ";
        $lname = "Lastname:".$_POST['lname']."
        ";
        $email = "Email Address:".$_POST['email']."
        ";
        $uname = "Username:".$_POST['uname']."
        ";
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

        $file=fopen("register.txt", "a");
        fwrite($file, $fname);
        fwrite($file, $lname);
        fwrite($file, $email);
        fwrite($file, $uname);
        fclose($file);

		if($password == $confirm_password)
		{
			$msg1 = "Passwords Match";
		}else{
			$msg2 = "Passwords Do Not match";
		}
	}


?>

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
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
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
							<a class="nav-link" button type="button" href="login.php" class="btn btn-primary" style="background-color: 	#d9e2ef; color:#000000;">Login/Sign Up</button></a>
						</li>	
					</ul>
				</div>
			</div>
		</nav>

       

	<div class="container-sm">
		<h2>Musella Hotel</h2>
		<br />
		<h3>Register</h3>
		<br />
		<form method="POST" action="<?php echo htmlentities( $_SERVER['PHP_SELF']); ?>">	
		<div class="form-group row">
				<div class="col-md-4">
					<input type="text" name="fname" class="form-control" placeholder="Enter Firstname">
					<span class="help-block text-danger"><?php echo $fname_err; ?></span>
					<br /><br />
                    <input type="text" name="lname" class="form-control" placeholder="Enter Lastname">
					<span class="help-block text-danger"><?php echo $lname_err; ?></span>
					<br /><br />
                    <input type="email" name="email" class="form-control" placeholder="Enter Email address">
					<span class="help-block text-danger"><?php echo $email_err; ?></span>
					<br /><br />
                    <input type="text" name="uname" class="form-control" placeholder="Enter a Username">
					<span class="help-block text-danger"><?php echo $uname_err; ?></span>
					<br /><br />
					<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{ 8,}" title="Password must contain at least one number, one
                    uppercase and lowercase letter, and at least 8 total characters." name="password" class="form-control" placeholder="Enter Password">
					<span class="help-block text-danger"><?php echo $pass_err;?></span>
					<br /><br />
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
					<span class="help-block text-danger"><?php echo $confirmPass_err; ?></span>
					<br /><br />
					<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Register">
					
				</div>
			</div>
		</form>

		<!-- <?php

		$pass_err = "";
		if(isset($_POST['submit'])){
			$uname = $_POST['uname'];
			if(strlen($password) < 8){
				echo $pass_err;
			}
		}

		?> -->
	</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   


    </body>
    <footer>
        
    </footer>



</html>