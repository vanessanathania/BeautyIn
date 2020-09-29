<?php 

include 'dbh.php';


$username = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];


$check_email = " select * from user where email = '$email' ";
$run_email = mysqli_query($conn, $check_email);
$check = mysqli_num_rows($run_email);

if($check==1){
	echo"<script>alert('Email already exist, please try again!')</script>";
	echo"<script>window.open('index.php', '_self')</script>";
}
else
{
	$sql="insert into user(name, email, password) values ('$username', '$email', '$pass')";
	
	$result=$conn->query($sql);
	echo"<script>alert('Congratulations $username, your account has been created successfully')</script>";
	echo"<script>window.open('index.php', '_self')</script>";

}






?>