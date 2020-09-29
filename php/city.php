<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEAUTYIN</title>
    <script src="https://kit.fontawesome.com/b8981bdc7a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/city.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> -->
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

    <div class="search-box">
        <input class="search-txt" type="text" name="dicari" id="input_pencarian" placeholder="Search City" maxlength="40" onkeyup="">
        <a class="search-btn">
            <i class="fas fa-search"></i>
        </a>
    </div>
    
    <!-- Body -->    
    <div id="bodyouter">
        <div id="listmua">
            <!-- <div>
	            <img id="gambar" src="../asset/pic21.JPG">
	            <p>Briza Luzule</p>
	            <button class="bton">Book Now</button>
	        </div>
	        <div>
                <a href="homeMua.php"><img id="gambar" src="../asset/pic3.JPG">
                <p>Gaure Roseau</p>
                <button class="bton" >Book Now</button>
            </div>    
            <div>
            	<img id="gambar" src="../asset/pic4.JPG">
                <p>Mauve Yucca</p>
                <button class="bton">Book Now</button>
            </div> -->
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
    <script src="../js/jquery.min.js"></script>
    <script>    
        $('.search-btn').on("click",function(){
            var city = $('.search.txt').val();
            location.href = "city.php?city="+ city;
        })

        $("#input_pencarian").keyup(function(e){ 
            var code = e.key;
            if(code==="Enter"){
                var city = $('#input_pencarian').val();
                location.href = "city.php?city="+ city;
            }
        });
    </script>
    <script src="../js/city.js"></script>
    <!-- <script src="../js/bootstrap.bundle.min.js"></script> -->
    
</body>
</html>