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


</style>
	<title>Welcome to Tweetme</title>
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
</div>   
 <div class="container">
        <div class="card-content grey lighten-5">
        <div class="card-content">
        <div class="container">
        <form action="login.php" method="POST">
        <input type="email" name="log_email" placeholder="Email Address" value="<?php 
        if(isset($_SESSION['log_email'])) {
            echo $_SESSION['log_email'];
        } 
        ?>" required>
        <br>
        <input type="password" name="log_password" placeholder="Password">
        <br>
        <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
        <br>
        
        <div class="center-wrapper">
        <button type="submit" class="waves-effect waves-light btn-small center-btn"  name="login_button">Login</button>
        <br>
        <hr>
        <a href="register.php">Forgot Password?  Or Need an account</a>
        </div>
        <br>
        </form>
        </div>
      </div>
    </div>
</body>
</html>