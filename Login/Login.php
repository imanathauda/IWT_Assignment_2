<?php
    include 'function.php';
    //$userdata = check_login($conn);
    include 'config.php';


    if(isset($_POST['submit']))
    { 
            $email = $_POST['email'];
            $password = md5($_POST['password']);   


            $sql_u = "SELECT * FROM users WHERE email = '$email'  OR username = '$email' ";
            $sql_p = "SELECT * FROM users WHERE password = '$password' ";
            $sql_type = "SELECT userType FROM users WHERE email = '$email'  OR username = '$email' ";
            $getusername = mysqli_query($conn,$sql_u);
            $getpassword = mysqli_query($conn,$sql_p);
            $getuserType = mysqli_query($conn,$sql_p);

            if(mysqli_num_rows($getusername)> 0)
            {
                if(mysqli_num_rows($getpassword) > 0)
                {
                    while($row = $getuserType->fetch_assoc())
                    {
                        if($row["userType"] == 'admin')
                        {
                            header("Location:admin.php");
                            $email = " ";
                            $_POST['passwrod'] = "" ; 
                        }
                        else
                        {
                            header("Location:index.php");
                            $email = " ";
                            $_POST['passwrod'] = "" ; 
                        }
                       
                    }

                }
                else
                {
                    echo "<script>alert('Invalid Password')</script>";
                }
                
            }
            else
            {
                echo "<script>alert('Invalid User name')</script>";
            }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
   <link rel="stylesheet" href="style/footer.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <title>Login</title>
</head>
<body>

        <img src="Images/dealsback.jpg" class = "backgroundImg" alt="" >
   
    
         <h1>Login</h1>
    


        <form action="" method = "POST" class="loginfrom"> 
            <h3><i  id="burger" class = "fas fa-hamburger"></i>Login</h3>
            <input type="text" placeholder="email/username" name = "email" required>

            <br>
            <input type="password" placeholder="password" name = "password" required>

            <br>

            <input type="submit" name="submit" value="Login">

            <p>Havn't account ? <a href="register.php">create one</a></p>

           <p><span class="span">or</span> <br>Login with Social Media</p>
            <div class="SocialMedia">
                <a href="www.facebook.com"> <i class="fab fa-facebook-f"></i></a>
                <a href="www.twitter.com"> <i class="fab fa-twitter"></i></a>
                <a href="www.linkedIn.com"> <i class="fab fa-linkedin"></i></a>
                <a href="www.facebook.com"> <i class="fab fa-instagram"></i></a>
            </div>
        </form>


        







<!--
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
                <img src="images/logo.png" alt="" width="20px" height="2px">

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
        </footer>-->
    
</body>
</html>