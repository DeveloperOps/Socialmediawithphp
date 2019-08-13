<?php  
include("includes/header.php");
include("includes/classes/User.php");
include("includes/classes/Posts.php");

if(isset($_POST['post'])) {
	$post = new Post($con , $userLoggedIn);
	$post->submitPost($_POST['post_text'] , 'none');
}
?>

<div class="container">
<hr>
	<div class="card card-cascade wider">
	<div class="card-body card-body-cascade text-center">
		<div class="form-group shadow-textarea">
			<form method="POST" action="index.php">
				<textarea name="post_text" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..."></textarea>
				<hr>
				<button type="submit" style="border-radius: 30px;" name="post" class="btn purple-gradient">Post</button>
			</form>
		</div>
	</div>
	</div>
	<?php 
		$post = new Post($con , $userLoggedIn);
		$post->loadPostsFriends();
	?>

</body>
</html>