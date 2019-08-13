<?php  
require 'config/config.php';
    if(isset($_SESSION['username'])) {
        $userLoggedIn = $_SESSION['username'];
        $user_fetch_details = mysqli_query($con , "SELECT * FROM users WHERE username='$userLoggedIn'");
        $user = mysqli_fetch_array($user_fetch_details);
    }
    else {
        header("LOCATION: login.php");
    }
?>

<html>
<head>
    <title>Welcome to Twitter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark purple-gradient">
    <a class="navbar-brand" href="<?php echo $userLoggedIn; ?>"><strong><?php echo $user['first_name']; ?></strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <!-- Empty  -->
    </ul>
      <ul class="navbar-nav nav-flex-icons ">
        <li class="nav-item">
          <a href="index.php" class="nav-link"><i class="fas fa-igloo"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="far fa-comment-alt"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="far fa-bell"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-user-friends"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-cogs"></i></a>
        </li>
        <li class="nav-item">
          <a href="includes/handlers/logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>

