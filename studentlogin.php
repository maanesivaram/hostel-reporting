<?php


$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"tbl_issues");
session_start();
if(isset($_SESSION["email"])) 
header('issues.php');

    if(isset($_POST["sub"])) 
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "SELECT * FROM `tbl_user` WHERE  `email`='$email' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['regnumber']=$row['regnumber'];
            $_SESSION["user"] = $row['name'];
            $_SESSION["email"] = $row['email'];
            $_SESSION["uid"] = $row['user_id'];
            header('location:stemp.php');
        } else {
            $warning = "Invalid login";
        }
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Student login</title>
            <link rel="stylesheet" href="studentlogin.css">
    </head>   
    <body>
        <div class="header">
            <?php include "includes/header.php"?>   
        </div>
        <div class="content">
            <div class="disp">
                <h2>STUDEDNT LOGIN</h2>
                <h4> <?php if(isset($warning)) echo $warning; ?></h4>
                <form class="form" method="post" action="">
                Email&nbsp;&nbsp;&nbsp;:<input type="text" name="email"></br><br>
                Password:<input type="password" name="pass"></br><br>
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
            
        </div>
    </body>  
</html>
