<?php
if(isset($_POST['btn-send']))
{

// connection to the Database
$con = mysqli_connect('localhost', 'root', '','db_contact');

// getting the post values
$Uname = $_POST['UName'];
$Umail = $_POST['Email'];
$Sub = $_POST['Subject'];
$Msg = $_POST['msg'];


if(empty($Uname) || empty($Umail) || empty($Sub) || empty($Msg))
       {
           header('location:contactus.php?error');
       }
       else
       {

// insert to the table sql
$sql = "INSERT INTO `tb_contact` (`ID`, `U_name`, `U_mail`, `Sub`, `Msg`) VALUES ('0', '$Uname', '$Umail', '$Sub', '$Msg')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	{
        header("location:contactus.php?success");
    }
}
}
}
else
{
    header("location:contactus.php");
}
?>