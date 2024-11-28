<!DOCTYPE html>
<html lang="en">
<head>
  <title>notif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
    background-image: url(../image/image186.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  th{
    font-weight: bold;
    font-size: 30px;
  }
  td{
      padding: 20px;
      font-size: 20px;
      color: white;
     }
  input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
</head>
<body>
<center>
<br><br>
<?php
session_start();
error_reporting(0);
include("../dbconnection/connection.php");
$userprofile=$_SESSION['Name'];
$userarea=$_SESSION['Area'];
if ($userprofile==true) {
  
}
else{
  header('location:viewnotif1.php');
}
$query="SELECT * FROM `notification1` where Name='$userprofile' && Area='$userarea' ";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);

 if ($total !=0) 
     {
      echo "Welcome ".$_SESSION['Name'];
?>
<br>
<p align="center">
   <img src="../image/image144.jpg" height="20%" width="20%" align="center" vspace="" hspace="">
</p>
<br>         
            <table>
            <tr>
            <th>Id</th>
            <th>Subject</th>
            <th>Notification</th>
            <th><font color="red">Operation</font></th>
            </tr>
        <?php

           while ($row = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                   <td>" . $row['Id'] . "</td> 
                   <td>" . $row['Subject'] . "</td>
                   <td>" . $row['Notification'] . "</td> 
                   <td><a href='deletenotif1.php?Id=$row[Id]' onclick='return checkdelete()'>Delete</a></td>
                </tr>";
            }
                                                                   
}
else
{
  echo "No Notification Found";
}

?>
</table>
<script>
  function checkdelete()
  {
    return confirm('Are you sure??');
  }
</script>
<br>
<a href="viewnotif1.php"><input type="submit" name="back" value="BACK"></a>
</center> 
    
