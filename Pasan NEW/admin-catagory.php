<?php
	/*session_start();

      
      include 'function.php';
  
      $userdata = check_login($conn);*/

      session_start();
	  include 'config.php';

      $page = 'catagory';


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
    <link rel="stylesheet" href="style/admin.css">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin catagory</title>
</head>
<body>

        
<header>
    <div class="navbar">

        <div class="navbarname">
            <p><i id="nameicon" class="fas fa-hamburger"></i>happymeals.com<?php  echo "/".$_SESSION['username'];?></p>
        </div>

        <div class="navBtns">

            <a href="index.php" class="<?php  if($page == 'home') {echo 'active';} ?>">home</a>
            <a href="admin.php" class="<?php  if($page == 'user') {echo 'active';} ?>">User</a>
            <a href="admin-catagory.php" class="<?php  if($page == 'catagory') {echo 'active';} ?>">Catagory</a>
            <a href="admin-food.php" class="<?php  if($page == 'food') {echo 'active';} ?>">Food</a>
            <a href="#menu" class="<?php  if($page == 'order') {echo 'active';} ?>">Order</a>
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


     <div class="managerUser">
            <h2>Manage catagory</h2>
            <br>
            <a href="#" class = "add">Add Meal Item</a><br><br>
            <center>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Food</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>ID</td>
                    <td>User Name</td>
                    <td>ID</td>
                    <td>
                        <a href="#" class = "delete">Delete catagory Item</a>
                        <a href="#" class = "update">Update catagory Item</a>
                    </td>
                    
                </tr>

                <tr>
                     <td>ID</td>
                    <td>User Name</td>
                    <td>ID</td>
                    <td><a href="#">Delete Meal Item</a>
                        <a href="#">Update Meal Item</a>
                    </td>
                </tr>
            </table>
            </center>
            
     </div>








</body>
</html>