<?php
include "backend-review.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Makeup Artist Page</title>
    <link rel="stylesheet" type="text/css" href="../css/homeMua.css">
    <script src="https://kit.fontawesome.com/ad08ca916a.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b8981bdc7a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

    <div class="container">

        <div class="profile-header">
            <div class="profile-img">
                <img src="../asset/S__14074947.jpg" width="200" alt="">
            </div>
            <div class="profile-nav-info">
                <h3 class="user-name">
                    Brizia Luzule
                </h3>
                <div class="address">
                    <p class="state">Tangerang,</p>
                    <span class="country">Indonesia.</span>
                </div>
            </div>
        </div>

        <div class="main-bd">
            <div class="left-side">
                    <div class="profile-side">
                            <p class="user-mail">
                                <i class="fa fa-envelope">BriziaLuzule@gmail.com</i>
                            </p>
                    <div class="user-bio">
                    <p class="bio">Certified AirBrush MUA since 2009. Available home service and on the spot. Feel free to chat or call me before booking appoinment or for discount price too :) </p>
                    </div>
                    <div class="profile-btn">
                        <button class="chatbtn">
                            <a href="chat.php"><i class="fa fa-comment"></i> Chat</a>
                        </button>
                        <button class="createbtn">
                        <i class="fa fa-phone"></i>Call
                        </button>
                    </div>
                                 <div class="user-rating">
                        <h3 class="rating">
                            <?php echo $avg?>
                        </h3>
                        <div class="rate">
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="no-user">
                                <span><?php echo count($allReviews) ?? '0'?></span>&nbsp;&nbsp;reviews</span>
                        </div>
                    </div>
                        </div>
                </div>

                <div class="right-side">
                        <div class="nav">
                            <ul>
                                <li onclick="tabs(0)" class="user-post active">
                                Pictures</li>
                                <li onclick="tabs(1)" class="user-review">
                                Review</li>
                                <li onclick="tabs(2)" class="user-pricelist">
                                PriceList</li>
                            </ul>
                        </div>
                        <div class="profile-body">
                            <div class="profile-posts tab">
                                <img class="poto" src="../asset/J1.jpg" alt="">
                                <img class="poto" src="../asset/M1.jpg" alt="">
                                <img class="poto" src="../asset/E3.jpg" alt=""> 
                            </div>
                            <div class="profile-review tab">
                                <h1>User Reviews</h1>
                                 <div>
                            <?php
                                  include 'showAllReviews.php'

                                    ?>
                        </div>
                            </div>
                            <div class="profile-pricelist tab">
                                <h1>Price List</h1>
                                <p>1. Makeup Only - IDR 200.000</p>
                                <p>2. Hairdo Only - IDR 150.000</p> 
                                <p>3. Makeup+Hairdo - IDR 349.000</p>   
                                
                            </div>
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
                    <input type="submit" value="submit" class="btn">
                </form>
            </div>
        </div>
    </footer>

     <div class="bg-modal">
        <div class="modal-content">
            <div class="close">+</div>
            <p> How was your experience </p>
            <br>
            <img class="rev-pic" src="../asset/S__13771516.jpg">
            <form action="backend-review.php?<?php echo $_SERVER['QUERY_STRING'];?>" method="post"
                enctype="multipart/form-data">
                <div align="center" style="color:white;">
                    <label for="stars-1">
                        <i class="fa fa-star modal-star" data-index="0"></i>
                    </label>
                    <input type="radio" id="stars-1" class="d-none" name="star" type="number" value="1">
                    <label for="stars-2">
                        <i class="fa fa-star modal-star" data-index="1"></i>
                    </label>
                    <input type="radio" id="stars-2" class="d-none" name="star" type="number" value="2">
                    <label for="stars-3">
                        <i class="fa fa-star modal-star" data-index="2"></i>
                    </label>
                    <input type="radio" id="stars-3" class="d-none" name="star" type="number" value="3">
                    <label for="stars-4">
                        <i class="fa fa-star modal-star" data-index="3"></i>
                    </label>
                    <input type="radio" id="stars-4" class="d-none" name="star" type="number" value="4">
                    <label for="stars-5">
                        <i class="fa fa-star modal-star" data-index="4"></i>
                    </label>
                    <input type="radio" id="stars-5" class="d-none" name="star" type="number" value="5">
                    <br><br>
                </div>

                <textarea name="review"></textarea>
                <div>
                    <button type="submit" class="sbmt-rev">Submit</button>
                </div>
            </form>

        </div>
    </div>
     <div class="bg-modal1">
            <div class="modal-content1">
                <div class="close"><a href="homeMuaBrizia.php">+</a></div>
                <p>+6281322055877</p>
            </div>

    </div>


     <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>
</html>