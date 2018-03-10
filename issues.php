<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"tbl_issues");
?>
<?php 

session_start();

if(isset($_POST["sub"])) 
{
        $subject=$_POST['subject'];
        $description=$_POST['description'];
        $qry = "INSERT INTO tbl_issue (`subject`, `discription`) VALUES ('$_POST[subject]','$_POST[description]')";
        mysqli_query($conn,$qry);
       header('location:status.php');
    }
    else {
        $warning = "not submitted";
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Issues</title>
<link rel="stylesheet" href="issues.css">
</head>
<body>
<?php if(!isset($_SESSION['user_id'])) 
{ 
?>
<th></th>
<?php 
} 
else 
{ ?>
    <th><a href="logout.php" onclick="myFunction();">Logout</a></th>

<a href="logout.php">logout</a> <?php
} 
?>
<form method="post">
<font color="blue"></font>
<h1 align="center">Issues</h1>
<table align="center" cellpadding = "2">
<tr>
<td>Subject:</td><br>
<td><input type="text" name="subject" maxlength="30"/></td>
</tr>
<tr>
<td>Description:</td>
<td><textarea rows="20" cols="100" name="description"></textarea></td>
</tr>
<tr><td>
<input type="submit" value="submit" name="sub">

</form>
</td>
</tr>
</body>
<script>
function myFunction() {
    location.reload();
}
</script>
</html>

