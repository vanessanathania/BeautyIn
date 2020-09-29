<?php
    session_start();

    if(empty($_SESSION['email'])){
        echo "<script> alert('Please sign in into your account first') </script>";
        echo "<script> window.location.replace('index.php') </script>";
    }

    $conn = new mysqli('localhost', 'root', '', 'beautyinlogindb');
    $email = $_SESSION['email'];

    $sql = $conn->query("SELECT name, email, image, bio FROM user WHERE email LIKE '$email'");
    $result = $sql->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Profile</title>
  
    <script src="https://kit.fontawesome.com/b8981bdc7a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/profile.css" />
</head>
<body>
     <div class="header">
        <div class="inner_header">
            <div class="logo_container">
               <h1>Beauty<span>IN</span></h1>
            </div>
            <ul class="navbar">
                <a href="home.php"><li>Home</li></a>
                <a href="aboutus.php"><li>About Us</li></a>
                <a href="profile.php"><li>My Profile</li></a>
                <a href="logout.php"><li>Sign Out</li></a>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <img src="<?php echo($result['image'] ?? '../asset/S__13771516.jpg') ?>" alt="Profile Image" class="profile-img">
        </div>

        <div class="card-body">
            <p class="full-name">
                <?php echo($result['name']) ?>
            </p>
            <p class="email">
                <?php echo($result['email']) ?>
            </p>
            <p class="desc">
                <?php echo($result['bio']) ?>
            </p>
            <a href="eprof.php"> <p class ="edit">Edit Profile</p>
        </div>

    </div>

    <footer>
        <div class="footer-container">
            <div class="left-col">
                <div class="logo-container">
                    <img src="../asset/logo1.png" alt="" class="logo"> 
                </div>
                
                <div class="social-media">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a> 
                </div>
                <p class="rights-text">&copy; 2020 Created By BeautyIN All Rights Reserved</p>
            </div>

            <div class="right-col">
                <h1>Our Newsletter</h1>
                <div class="border"></div>
                <p class="enter">Enter your Email to get news and updates</p>
                <form action="" class="newsletter-form">
                    <input type="text" class="txtb" placeholder="Enter Your Email">
                    <input type="submit" value="submit" class="btn">
                </form>
            </div>
        </div>
    </footer>
</body>
</html>