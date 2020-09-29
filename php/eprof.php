<?php 
    include 'dbh.php';
    
    session_start();

    if(empty($_SESSION["email"])){
        echo "<script> alert('Please sign in into your account first') </script>";
        echo "<script> window.location.replace('index.php') </script>";
    }

    $email = $_SESSION['email'];

    $sql = $conn->query("SELECT name, email, image, bio FROM user WHERE email LIKE '$email'");
    $result = $sql->fetch_assoc();

    $data = [];

    if(!empty($_SESSION['old'])){
        foreach($_SESSION['old'] as $key=>$value){
            $data[$key] = $value;
        }
    } else {
        foreach($result as $key=>$value){
            $data[$key] = $value;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Edit My Profile</title>


    <!-- Icons font CSS-->
    <script src="https://kit.fontawesome.com/b8981bdc7a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/eprof.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <h1>Beauty<span>IN</span></h1>
            </div>
            <ul class="navbar">
                <a href="home.php">
                    <li>Home</li>
                </a>
                <a href="aboutus.php">
                    <li>About Us</li>
                </a>
                <a href="profile.php">
                    <li>My Profile</li>
                </a>
                <a href="logout.php">
                    <li>Sign Out</li>
                </a>
            </ul>
        </div>
    </div>

    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">My Profile</h2>
                    <form method="POST" action="backend-eprof.php" enctype="multipart/form-data">
                        <div class="p-t-10">
                            <p>Change profile image</p>
                            <label>
                                <input type="file" name="image" id="profileImage"
                                    class="btn1 btn--pill btn--blue">
                            </label>
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" value="<?php echo $data['name'] ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Bio" name="bio" value="<?php echo $data['bio'] ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" value="<?php echo $data['email'] ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="Password" placeholder="Password" name="password">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
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
                    <input type="submit" value="Submit" class="btny">
                </form>
            </div>
        </div>
    </footer>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->