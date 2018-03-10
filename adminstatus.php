<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"tbl_issues");

if(isset($_GET["isid"]))
{

    $solution=$_GET['status'];
$issueid = $_GET['isid'];
    $qry = "UPDATE tbl_issue SET solution='$solution' where issueid='$issueid'";
    mysqli_query($conn,$qry);
    header("location:status.php");   
}
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
         <td> <a href="adminstatus.php?isid=<?php echo $row['issueid'];?>&status=NO">NO</a>/
         <a href="adminstatus.php?isid=<?php echo $row['issueid'];?>&status=YES">YES</a>
              
              
              </td>
       
      </tr>
      
     
        
   
    <?php } 
    ?>
</table>
</form>
</body>
</html>

