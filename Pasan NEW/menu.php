<?php
     session_start();

     $page = 'menu';
      //include 'function.php';
  
      /*$userdata = check_login($conn);*/
	  
	  /*include 'config.php';

      if(!isset($_SESSION['username']))
      {
          header("Location:login.php");
      }*/

      if(!isset($_SESSION['username']))
      {
          include("unregusernavbar.php");
      }
      else
      {
          include('usernavbar.php');
      }


      
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
</head>
<body>
    
     
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
                                <img src="Images/kottu.jpeg"  class = "img-res" alt="" srcset="">  
                                <a href="" class =  "float-text">Kottu</a>
                            </div>

                    </div>
            </div>


























     <br><br><br><br><br><br>

     <?php
       include('footer.php');
      ?>


</body>
</html>