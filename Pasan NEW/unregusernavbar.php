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

  <header>
    <div class="navbar">

        <div class="navbarname">
            <p><i id="nameicon" class="fas fa-hamburger"></i>Happymeals.com</p>
        </div>

        <div class="navBtns">

            <a href="index.php" class="<?php  if($page == 'home') {echo 'active';} ?>">Home</a>
            <a href="menu.php" class="<?php  if($page == 'menu') {echo 'active';} ?>">Menu</a>
            <a href="deals.html" class="<?php  if($page == 'deals') {echo 'active';} ?>">Deals</a>
            <a href="#menu" class="<?php  if($page == 'contact') {echo 'active';} ?>">Contact Us</a>
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

</body>
</html>