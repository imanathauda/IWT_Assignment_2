<?php
	/*session_start();

      
      include 'function.php';
  
      $userdata = check_login($conn);*/

      session_start();
	  include 'config.php';


      $page = 'user';


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
    <title>Admin Page</title>
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

     <h2>Manage User</h2>
            <br><br>
            
            <center>
            <table>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>E - mail</th>
                    <th>Actions</th>
                </tr>


                <?php 
                        $sql = "SELECT * FROM users WHERE userType = 'customer'";

                        $result = mysqli_query($conn,$sql);



                        while( $row = mysqli_fetch_array($result))
                        {
                            ?>
                            <tr>
                                <td><?php  echo $row['id'] ;?></td>
                                <td><?php  echo $row['username'];?></td>
                                <td><?php  echo $row['email'];?></td>
                                <td>
                                    <a href="#" class = "delete">Delete User</a>
                                    <a href="#" class = "update">Update User</a>
                                </td>

                            </tr>

                            <?php

                        }

                       
                
                ?>
                
            </table>
            </center>
            
     </div>








</body>
</html>