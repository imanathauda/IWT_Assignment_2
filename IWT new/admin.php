<?php
	/*session_start();

      
      include 'function.php';
  
      $userdata = check_login($conn);*/

      session_start();
	  include 'config.php';


      if(!isset($_SESSION['username']) || isset($_SESSION['username']) && $_SESSION['username'] != 'admin')
      {

        if(!isset($_SESSION['username']))
        {
            header("Location:index.php");
        }
        else
        {
            header("Location:home.php");
        }
         
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>

        
<header>
    <div class="navbar">

        <div class="navbarname">
            <p><i id="nameicon" class="fas fa-hamburger"></i>happymeals.com<?php  echo "/".$_SESSION['username'];?></p>
        </div>

        <div class="navBtns">

            <a href="#">Admin panel</a>
            <a href="#menu">Add Meal</a>
            <a href="deals.html">Delete</a>
            <a href="#menu">Contact Us</a>
        </div>

        <div class="navBarTitles">
            <div class="navtitlesicons">
                <a href="logout.php"><i class="fas fa-user-alt"></i></a>
            </div>

            <div class="navtitleNames">
                <label for="">Log Out</label>
            </div>
        </div>  
    </div>
 </header>


  








</body>
</html>