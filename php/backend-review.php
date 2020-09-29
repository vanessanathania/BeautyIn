<?php
session_start();
$allReviews = array();

function insertReview($muaEmail){
    include "dbh.php";

    if(isValidUserReview() == false) {
        echo '<script>window.location.back()</script>';
        return;
    }

    $totalStar = $_POST['star'];
    $textReview = $_POST['review'];

    $sql = $conn->query("INSERT INTO user_reviews VALUES ('".$_SESSION['email']."','$muaEmail','$totalStar','$textReview')");
    echo '<script>alert(`Your review has been submitted`)</script>';
}

function isValidUserReview(){

	if(!isset($_POST['star'])) {
        echo "<script> alert('Rating is required') </script>";
        return false;
    } else if (empty($_SESSION["email"])){
        echo "<script> alert('Please sign in into your account to give review') </script>";
        return false;
    }
	return true;
}

function showReview($muaEmail){
    include "dbh.php";
    $sql = $conn->query("select user_email as 'User Email', rating, review from user_reviews where mua_email like '$muaEmail'");
    $allReviews = $sql->fetch_all(1);


    return $allReviews;
}

function getAvgReview($muaEmail){
    include "dbh.php";
    $sql = $conn->query("select FORMAT(AVG(rating),1) 'avgRating' FROM user_reviews where mua_email = '$muaEmail'");
    return $sql->fetch_assoc()['avgRating'];
}

getAvgReview($_SERVER['QUERY_STRING']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    insertReview($_SERVER['QUERY_STRING']);
    echo '<script>history.back()</script>';
}else{
    $allReviews = showReview($_SERVER['QUERY_STRING']);
    $avg = getAvgReview($_SERVER['QUERY_STRING']);
    $names = [];
    foreach ($allReviews as $value){
    	foreach ($value as $key=>$value){
    		if ($key == 'User Email'){
    			include 'dbh.php';
    			$hasil = $conn->query("Select user.name from user_reviews join user on user.email LIKE '$value' ")->fetch_assoc();
    			array_push($names,$hasil['name']);
		    }
	    }
    }
    
}

?>