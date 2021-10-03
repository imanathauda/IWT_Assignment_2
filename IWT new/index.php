<?php
     session_start();
	  include 'config.php';

      /*if(!isset($_SESSION['username']))
      {
          header("Location:login.php");
      }*/

     

      
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/index.css">
    <title>Index Page</title>
</head>
<body>
    <!--<h1>This is Index Page</h1>

    <a href="logout.php">log Out</a>-->
    <!--<img src="images/dealsback.jpg" class = "backgroundImg" alt="">-->
    <!--<video src="images/video.mp4" muted loop autoplay></video>-->


  <header>
    <div class="navbar">

        <div class="navbarname">
            <p><i id="nameicon" class="fas fa-hamburger"></i>Happymeals.com</p>
        </div>

        <div class="navBtns">

            <a href="#" class="active">Home</a>
            <a href="menu.php" >Menu</a>
            <a href="deals.html">Deals</a>
            <a href="#menu">Contact Us</a>
        </div>

        <div class="navBarTitles">
            <div class="navtitlesicons">
                <a href="register.php"><i class="fa fa-home"></i></i></a>
                <a href="Login.php"><i class="fas fa-user-alt"></i></i></a>
                <a href="#"><i class="fas fa-map-marker-alt"></i></a>
            </div>

            <div class="navtitleNames">
                <label for="">Sign In</label>
                <label for="">Sign Up</label>
                <label for="">Location</label>
            </div>
        </div>

       
    </div>
  </header>


        <div class="coverImage">         
                <h2>Order From</h2>
                <h1>happymeals Resturant</h1>
                <h3>Enjoy mouth-watering dishes from our handcrafted</h3>
                <h3>food delivery menus at happymeals Resturant</h3>
                <br>
                <a href="menu.php">Check Menu</a>                    
        </div>




        <div class="second">

            <center>
            <h4>RELISH EXQUISITE FLAVOURS RIGHT AT YOUR HOME</h4> <br>
            <h2>Flavours of the world brought to you, by happymeals!</h2><br>

            <h6>happymeals resturant brings flavours of the world, right to your doorstep!
            Bring the Cinnamon dine-in experience to the comfort and safety of your home, from our award-winning five star restaurant.</h6>
            </center>

        </div>


        <div class="third">

            <center>
                
                <h2>Food Orders are delivered daily from</h2>

                <h4>11.00 A.M      <img src="Images/clock.png" alt="clock" srcset="" width = "100px" height = "100px">        11.30 P.M</h4>
            </center>
                
        </div>


        <div class="four">

            <div class="icon">

                    <center>
                        <img src="Images/chef.png" alt="chef" srcset="">
                        <h4>Safety</h4>
                        <h5>Stringent protocols are followed infood preparation and handling</h5>
                    </center>
                        
            </div>
            <div class="icon">
                    <center>
                        <img src="Images/car.png" alt="chef" srcset="">
                        <h4>Delivery</h4>
                        <h5>Deliveries are made solely by resturant staff members</h5>
                    </center>
            </div>
            <div class="icon">
                    <center>
                        <img src="Images/5star.png" alt="chef" srcset="">
                        <h4>Quality</h4>
                        <h5>Five-star quality and service<</h5>
                    </center>
            </div>
    
        </div>
        

  





      <!--Footer-->
      <?php
       include('footer.php');
      
      ?>
      
</body>
</html>
</body>
</html>