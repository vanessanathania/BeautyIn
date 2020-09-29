<?php 


session_start();
include 'dbh.php';


$email = $_POST['email'];
$pass = $_POST['password'];

$sql = " select * from mua where email = '$email' && password = '$pass'";

$result = $conn->query($sql);

if(!$row=$result->fetch_assoc()){

	echo"<script>alert('Not Registered, try again.')</script>";
	echo"<script>window.open('indexMua.php', '_self')</script>";
}
else
{	
	
	echo "<script>sessionStorage.setItem('email', ' $email ');</script>";
	echo "<script>sessionStorage.setItem('role', 0);</script>";
	$sql = "select * from mua where email='$email'";
	$result= $conn->query($sql);
	if($row=$result->fetch_assoc()){
		echo "<script>sessionStorage.setItem('role', 1);</script>";
	}
	echo "<script>window.open('chatMua.php', '_self')</script>";

}

?>