<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/contactus.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="style/footer.css">
    <title>Contact Us Page</title>
</head>
<body>
<img src="Images/background.jpeg" class = "backgroundImg" alt="">
<header>
    <div class="navbar">

        <div class="navbarname">
            <p><i id="nameicon" class="fas fa-hamburger"></i>happymeals.com</p>
        </div>

        <div class="navBtns">

            <a href="home.php'>Home</a>
            <a href="menu.php">Menu</a>
            <a href="deals.html">Deals</a>
            <a href="#" class="active">Contact Us</a>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h1 class="text-center py-2"> Contact Us </h1>
                        <hr> <hr>
                        </br>
                        
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                //fields are not completed 
                                $Msg = " You can't keep the fields empty! ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                //data succesfully saved to the database
                                $Msg = " Your message has been sent Succesfully ! ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                        </br>
                        
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                        <label id="lbl" for="UName">Your Name :- </label> <input type="text" id="textboxid" name="UName" placeholder="User Name" class="form-control mb-2" size="40" ></br></br>
                        <label id="lbl" for="Email">Your Email :- </label> <input type="email" id="textboxid" name="Email" placeholder="Email" class="form-control mb-2" size="40" ></br></br>
                        <label id="lbl" for="Subject">Subject :- </label> <input type="text" id="textboxid" name="Subject" placeholder="Subject" class="form-control mb-2" size="40" ></br></br>
                        <label id="lbl" for="Message">Message :- </label> <textarea name="msg" class="form-control mb-2" placeholder="Write The Message" rows="6" cols="56"></textarea></br></br>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
			<div class="footer-dis">

				<div class="footer-left">
					<h3>Information</h3>
					<ul class="footer-links">
						<li><a href="#">About us</a></li>
						<li><a href="#">Contact us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>

				<div class="footer-center">
					<img src="Images/logo.png" alt="" width="20px" height="2px">

					<p class="company-name">happymeals.com Resturant</p>
				</div>

				<div class="footer-right">

					<div class="opening-times">
						<h3>Opening Times</h3>
						<p>Mon-fri 11.30am - 11.30 pm</p>
						<p>Sat 11.00am - 12.00 pm</p>
						<p>Sun 10.00am - 12.00pm</p>
					</div>
				</div>

				<div class="follow-us">
					<h3>Follow Us</h3>
					<a href="facebook.com"><i class="fab fa-facebook-f"></i></a>
					<a href="twitter.com"><i class="fab fa-twitter"></i></a>
					<a href="instagram.com"><i class="fab fa-instagram"></i></a>
					<a href="linked.com"><i class="fab fa-linkedin-in"></i></a>

					<div class="ContactUs">
						<h3>Contact Us</h3>
							<ul>
								<li><i class="fas fa-map-marker-alt"></i>45, Galle Road , Matara</li>
								<li><i class="fa fa-phone"></i>+94 41 2224789</li>
								<li><i class="fa fa-at"></i>happymealrest@hotel.com</li>
							</ul>
						</div>
				</div>
				</div>

				<div class="copyright">
					<p>&copy;2021 happy Meals.Inc. All rights reserved</p>
					<p>design by - IT_MTR_Y1_2021_G1</p>
				</div>
			</footer>
</body>
</html>