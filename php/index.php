<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>BeautyIn SignUp and Login</title>
	
	<script src="https://kit.fontawesome.com/b8981bdc7a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
	<div class="conte">
	<div class="hallo" > <p > Beauty<b>IN</b> </p> </div>
	
	<div class="cont">
		<div class="form sign-in">
			<h2>Sign In</h2>
			<form action=validation.php method="post" >
			<label>
				<span>Email Address</span>
				<input type="email" name="email" required>
			</label>
			<label>
				<span>Password</span>
				<input type="password" name="password" required>
			</label>
			<button type="submit" class="submit">Sign In</button>
			<a href="indexmua.php"><p class="regMua">Want to be part of our makeup artist? Register here!</p></a>
			</form>
			<div class="social-media">
				<ul>
					<li><img src="../asset/facebook.png"></li>
					<li><img src="../asset/twitter.png"></li>
					<li><img src="../asset/instagram.png"></li>
				</ul>
			</div>
		</div>
		
		<div class="sub-cont">
			<div class="img">
				<div class="img-text m-up">
					<h2>New here?</h2>
					<p>Sign up and discover professional makeup artist for your special events.</p>
				</div>
				<div class="img-text m-in">
					<h2>One of us?</h2>
					<p>If you already has an account, just sign in. We've missed you!</p>
				</div>
				<div class="img-btn">
					<span class="m-up">Sign Now</span>
					<span class="m-in">Sign In</span>
				</div>
				<div>
				</div>
			</div>

			<div class="form sign-up">
				<h2>Sign Up</h2>
				<form action="registration.php" method="post" >
				<label>
					<span>Name</span>
					<input type="text" name="user" id="txtName"required>
				</label>
				<label>
					<span>Email</span>
					<input type="email" name="email" id="txtEmail" required>
				</label>
				<label>
					<span>Password</span>
					<input type="password" name="password" id="txtPassword" required>
				</label>
				<button type="submit" class="submit">Lets go</button>
				</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>