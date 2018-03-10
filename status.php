<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"tbl_issues");

?>

<html>
<link rel="stylesheet" href="status.css">
<title>status</title>

<body>
    
<h1 align="center">status</h1>
<table border="1" width="50%" align="center" cellpading="3">
<tr>
        <td>Problem</td>
        <td>description</td>
        <td>Solved</td>
        
</tr>
<?php if(!isset($_SESSION['adminid']))  { ?>

<?php } else { ?>
    <a href="logout.php" onclick="myFunction();">Logout</a>
<?php } ?>

    <?php
    $qry = "SELECT * FROM tbl_issue";
    $sql=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_assoc($sql)) 
    {
    ?>
        <tr>
        <td><?php echo $row['subject'];?></td>
         <td><?php echo $row['discription'];?></td>
         <td><?php echo $row['solution'];?></td>
        </tr>
        
   
    <?php } 
    ?>
</table>
</form>
</body>
<script>
function myFunction() {
    location.reload();
}
</script>
</html>

