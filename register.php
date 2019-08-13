<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<html>
<head>
<style>
body {
	background-image: linear-gradient(to bottom right, #183467ed , #000000a1) ,url("https://www.theuiaa.org/wp-content/uploads/2017/12/2018_banner.jpg");
	background-size: cover;
} 

.card-content {
	display: contents;
    position: relative;
    margin: .5rem 0 1rem 0;
    background-color: #fff;
    -webkit-transition: -webkit-box-shadow .25s;
    transition: -webkit-box-shadow .25s;
    transition: box-shadow .25s;
    transition: box-shadow .25s, -webkit-box-shadow .25s;
    border-radius: 2px;
}

img {
	width: 120px;
	height: 120px;
}


</style>
	<title>Welcome to Swirlfeed!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
		<div class="container">
		<div class="section">
			<a href="#" class="brand-logo"><img class= "center-img" src="assets/images/backgrounds/logo.png"></a>
		</div>
		<div class="card-content grey lighten-5">
        <div class="card-content">  
        <div class="container">
		<form action="register.php" method="POST">
			<input type="text" name="reg_fname" placeholder="First Name" value="<?php 
			if(isset($_SESSION['reg_fname'])) {
				echo $_SESSION['reg_fname'];
			} 
			?>" required>
			<br>
			<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
			
			


			<input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
			if(isset($_SESSION['reg_lname'])) {
				echo $_SESSION['reg_lname'];
			} 
			?>" required>
			<br>
			<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

			<input type="email" name="reg_email" placeholder="Email" value="<?php 
			if(isset($_SESSION['reg_email'])) {
				echo $_SESSION['reg_email'];
			} 
			?>" required>
			<br>

			<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
			if(isset($_SESSION['reg_email2'])) {
				echo $_SESSION['reg_email2'];
			} 
			?>" required>
			<br>
			<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
			else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
			else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>


			<input type="password" name="reg_password" placeholder="Password" required>
			<br>
			<input type="password" name="reg_password2" placeholder="Confirm Password" required>
			<br>
			<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
			else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
			// else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>


		<div class="center-wrapper">
        <button type="submit" class="waves-effect waves-light btn-small center-btn"  name="register_button">Sign Up</button>
		<br>
		<?php if(in_array("<span style='color: #ccc;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
        <hr>
        <a href="login.php">Or Login Here</a>
        </div>
        <br>
		</form>
		</div>
      </div>
    </div>
</div>

</body>
</html>