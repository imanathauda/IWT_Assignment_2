<?php
    include 'config.php';

    //error_reporting(0);
    if(isset($_POST['submit']))
    {
        
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phoneno = $_POST['Phone_No'];
            $password = md5($_POST['passwrod']);
            $cpassword = md5($_POST['confirmpasswrod']);

            if($password == $cpassword)
            {
                $sql_e= "SELECT * FROM users WHERE email = '$email'";
                $sql_u= "SELECT * FROM users WHERE username = '$username'";
                $result_u = mysqli_query($conn,$sql_u);
                $result_e = mysqli_query($conn,$sql_e);
            
                if(mysqli_num_rows($result_u)  > 0)
                    {
                        echo "<script>alert('sorry username already taken !!!!')</script>";  
                       //header("Location:register.php");
                    }
                else if(mysqli_num_rows($result_e)  > 0)
                    {
                        echo "<script>alert('sorry email already taken !!!!')</script>"; 
                    }
                else
                    {
                        $sql = "INSERT INTO users (username,phoneNo,email,password,userType)  VALUES ('$username','$phoneno','$email','$password','customer')";
                        $result = $conn->query($sql);
        
                        if($result)
                            {
                                /*echo "<script>
                                        alert('User registaction  successful !!!!');
                                      </script>";*/

                                      echo "User registaction  successful !!!!";
            
                                $username = "";
                                $phoneno = "";
                                $email = " ";
                                $_POST['passwrod'] = "" ;
                                $_POST['confirmpasswrod'] = "";


                                loadLogin();

                                
                            }
                        else
                            {
                                echo "<script>alert('Some thing is wrong !!!!')</script>";
                            }
                    }
                        
               
            }
            else
            {
                echo "<script>alert('Password mismatch')</script>";
            }
    }


    function loadLogin()
    {
        header("Location:login.php");
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
    <link rel="stylesheet"type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <title>Register</title>
</head>
<body>

        <img src="Images/dealsback.jpg" class = "backgroundImg" alt="" >
   
    
         <h1>Login</h1>
    


        <form action="" method = "POST" class="loginfrom"> 
            <h3>Become A Member</h3>

            <input type="text" placeholder="username" name = "username"  required>

            <input type="email" placeholder="email" name = "email"  required>

            <input type="text" placeholder="phone no" name = "Phone_No"  pattern="[0-9]{10}" required>

            <input type="password" placeholder="password" name = "passwrod"  required>

            <br>
            <input type="password" placeholder="Confirm password" name = "confirmpasswrod" required>

            <br>

            <input name = "submit" type="submit" value="Register">

            <p>Have an  account ? <a href="login.php">Login Here</a></p>
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