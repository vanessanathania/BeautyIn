<?php 


session_start();
include 'dbh.php';

$email = $_POST['email'];
$pass = $_POST['password'];



$sql = " select * from user where email = '$email' && password = '$pass' ";

$result = $conn->query($sql);

if(!$row=$result->fetch_assoc()){
	echo"<script>alert('Not Registered, try again.')</script>";
	echo"<script>window.open('index.php', '_self')</script>";
}
else
{	
	$_SESSION['email']=$email;
	echo "<script>sessionStorage.setItem('email', ' $email ');</script>";
	echo "<script>sessionStorage.setItem('role', 0);</script>";
	$sql = "select * from mua where email='$email'";
	$result= $conn->query($sql);
	if($row=$result->fetch_assoc()){
		echo "<script>sessionStorage.setItem('role', 1);</script>";
	}
	echo "<script>window.open('home.php', '_self')</script>";
}

?>