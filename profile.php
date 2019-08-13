<?php  
include("includes/header.php");
?>
<header>
<div class="card card-cascade wider">
<div class="avatar mx-auto white"><img height="180px" width="180px" src="<?php echo $user['profile_pic']; ?>"
            alt="avatar mx-auto white" class="rounded-circle img-fluid">
</div>
  <div class="card-body card-body-cascade text-center">
    <h4 class="card-title"><strong><?php echo $user['first_name']; ?></strong></h4>
    <h5 class="blue-text pb-2"><strong>@<?php echo $user['username']; ?></strong></h5>
    <p class="card-text">Sed totam rem aperiam. </p>
    <button style="border-radius: 30px;" class="btn peach-gradient">Posts : <?php echo $user['num_posts']; ?></button>
    <button style="border-radius: 30px;" class="btn purple-gradient">Likes: <?php echo $user['num_likes']; ?></button>
  </div>
</div>
</header>
</body>
</html>