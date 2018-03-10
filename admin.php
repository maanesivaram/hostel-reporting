<?php



$servername = "localhost";
$adminid = "root";
$password = "";
$conn = mysqli_connect($servername, $adminid, $password);
mysqli_select_db($conn ,"tbl_issues");
session_start();
if(isset($_SESSION["adminid"])) 
header('issues.php');

    if(isset($_POST["sub"])) 
    {
        $adminid=$_POST['adminid'];
        $password=$_POST['password'];
        $qry = "SELECT * FROM `tbl_admin` WHERE  `adminid`='$adminid' AND `password`='$password';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            header('location:adminstatus.php');
        } else {
            $warning = "Invalid login";
        }
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>admin login</title>
            <link rel="stylesheet" href="admin.css">
    </head>   
    <body>
        <div class="header">
            <?php include "includes/header.php"?>   
        </div>
        <div class="content">
            <div class="disp">
                <h2>ADMIN LOGIN</h2>
                <h4> <?php if(isset($warning)) echo $warning; ?></h4>
                <form class="form" method="post" action="">
                Adminid&nbsp;:<input type="text" name="adminid"></br><br>
                Password:<input type="password" name="password"></br><br>
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
            
        </div>
    </body>  
</html>
