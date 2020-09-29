<?php 

include "dbh.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>BeautyIn SignUp and Login</title>
	<script src="https://kit.fontawesome.com/b8981bdc7a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/signupmua.css">
</head>
<body>
	<div class="conte">
	<div class="hallo" > <p > Beauty<b>IN</b> </p> </div>
	
	<div class="cont">
		<div class="form sign-in">
			<h2>Sign Up</h2>
			<form action="registMua.php" method="post" enctype="multipart/form-data">
			  <label>
					<span>Name</span>
					<input type="text" name="name" required>
				</label>
				<label>
					<span>Email</span>
					<input type="email" name="email" required>
				</label>
				<label>
					<span>Password</span>
					<input type="password" name="password" required>
				</label>
				<label>
					<span>Insert you certificate here</span>
					<input type="file" name="uploadfile" id="uploadfile" class="form-control">
				</label>
				<p class="notifMua">Please check ur email, we will send notification if you are accept!</p>
				<button type="submit" name="uploadfilesub" class="submit">Sign Up</button>
			</form>
		</div>
		
		<div class="sub-cont">
			<div class="imgMua">
				<div class="img-text m-up">
					<h2>Be part of us!</h2>
					<p>If you already get the notification please click sign now to sign in.</p>
				</div>
				<div class="img-text m-in">
					<h2>Welcome to our family!</h2>
					<p>We are so glad you become one of us. Please sign in your customer waiting for you.</p>
				</div>
				<div class="img-btn">
					<span class="m-up">Sign Now</span>
					<span class="m-in">Sign In</span>
				</div>
				<div>
				</div>
			</div>

			<div class="form sign-up">
				<h2>Sign In</h2>
				<form action="validMua.php" method="post">
			<label>
				<span>Email Address</span>
				<input type="email" name="email" required>
			</label>
			<label>
				<span>Password</span>
				<input type="password" name="password" required>
			</label>
			<button type="submit" class="submit">Sign In</button>
			</form>
			<div class="social-media">
				<ul>
					<li><img src="../asset/facebook.png"></li>
					<li><img src="../asset/twitter.png"></li>
					<li><img src="../asset/instagram.png"></li>
				</ul>
			</div>
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>