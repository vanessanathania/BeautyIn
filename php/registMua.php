<?php 

include 'dbh.php';


$username = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
if(isset($_POST['uploadfilesub']))
{
		$filename = $_FILES['uploadfile']['name'];
		$filetmpname = $_FILES['uploadfile']['tmp_name'];
		$folder = 'images/';
		print($filename);
		if(move_uploaded_file($filetmpname, $folder.$filename)){
			print("ok");
		}else{
			print("failed");
		}
}

$check_email = " select * from mua where email = '$email' ";
$run_email = mysqli_query($conn, $check_email);
$check = mysqli_num_rows($run_email);

if($check==1){
	echo"<script>alert('Email already exist, please try again!')</script>";
	echo"<script>window.open('indexMua.php', '_self')</script>";
}
else
{
	$sql="insert into mua(name, email, password, image) values ('$username', '$email', '$pass', '$filename')";
	
	$result=$conn->query($sql);
	echo"<script>alert('Congratulations $username, your account has been created  MUA successfully')</script>";
	echo"<script>window.open('indexMua.php', '_self')</script>";

}



?>