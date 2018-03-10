<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"tbl_issues");
session_start();
if(isset($_POST["sub"]))

 {
        $name=$_POST['name'];
        $regnumber=$_POST['regnumber'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "insert into tbl_user(name,regnumber,email,password) VALUES('$_POST[name]','$_POST[regnumber]','$_POST[email]', '$_POST[pass]')";
        mysqli_query($conn,$qry);
       header('location:studentlogin.php');
    }
?>
<html>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" href="registration.css">
</head>
<body>
<h3 align="center">STUDENT REGISTRATION FORM</h3>
<div class="header">
              
        </div>
        <div class="content" cellpading="2">
            <div class="disp">
                <form class="form" method="post">
                Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"></br><br>
                Regnumber&nbsp;<input type="text" name="regnumber"></br><br>
                Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"></br><br>
                Password&nbsp;&nbsp;<input type="password" name="pass"></br><br>

                <input type="submit" name="sub" value="Click to Submit">
                <input type="reset">
            </form>
            </div> 
            
        </div>
    </body>  
</html>
