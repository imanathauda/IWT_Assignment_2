<?php
     session_start();

      
      //include 'function.php';
  
      /*$userdata = check_login($conn);*/
	  
	  /*include 'config.php';

      if(!isset($_SESSION['username']))
      {
          header("Location:login.php");
      }*/

      
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/index.css">
    <script src="script/noodleCustomize.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
</head>
<body>
    
     <img src="Images/dealsback.jpg" class = "backgroundImg" alt="">

    <!--<video src="images/video.mp4" muted loop autoplay></video>-->


  <header>
    <div class="navbar">

        <div class="navbarname">
            <p><i id="nameicon" class="fas fa-hamburger"></i>happymeals.com<?php  echo "<br>   Hello , ".$_SESSION['username'];?></p>
        </div>

        <div class="navBtns">

            <a href="home.php">Home</a>
            <a href="#" class="active">Menu</a>
            <a href="deals.html">Deals</a>
            <a href="#menu">Contact Us</a>
        </div>

        <div class="navBarTitles">
            <div class="navtitlesicons">
                <a href="logout.php"><i class="fas fa-user-alt"></i></a>
                <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                <a href="#"><i class="fa fa-shopping-cart"></i></a>
            </div>

            <div class="navtitleNames">
                <label for="">Log Out</label>
                <label for="">Location</label>
                <label for="">My Cart</label>
            </div>
        </div>  
    </div>
 </header>


            <!--<div class="search">
                <input type="search" name = "search" placeholder = "Search Here">
               <button name = "search">
                    <i class = "fas fa-search"></i>
               </button>
            </div>-->

            <br> <br>

            <div class="cuisineselection">
                        <h1>Cuisine Selection</h1>
                        <br><br><br>

                    <div class="containerOne">
                        <div class="boxOne float-container">
                           <img src="Images/burger.jpg"  class = "img-res" alt="" srcset="">
                           <a href="" class =  "float-text">Burger</a>
                        </div>
                        <div class="boxOne float-container">
                            <img src="Images/rice.jpg"  class = "img-res" alt="" srcset="">   
                            <a href="" class =  "float-text">Fired Rice</a>
                        </div>
                        <div class="boxOne float-container">
                             <img src="Images/pizza.jpg"  class = "img-res" alt="" srcset="">  
                            <a href="" class =  "float-text">Pizza</a>
                        </div>
                        <div class="boxOne float-container">
                            <img src="Images/noodle.jpg"  class = "img-res" alt="" srcset="">  
                            <a href="" class =  "float-text">Noodle</a>
                        </div>
            </div>


























     <br><br><br><br><br><br>
<!--
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

                </div>-->










           




            
















     <!--Footer-->
     <?php
       include('footer.php');
      ?>


</body>
</html>