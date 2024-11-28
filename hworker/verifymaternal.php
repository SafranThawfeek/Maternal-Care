<!DOCTYPE html>
<html lang="en">
<head>
  <title>verify</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body{
  background-image: url(../image/image193.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
 }
th{
    font-weight: bold;
    font-size: 30px;
    color: blue;
  }
  td{
   padding: 20px;
   font-size: 20px;
    color: black;
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
<center><br>
<?php
session_start();
include("../dbconnection/connection.php");
error_reporting(0);
$userarea=$_SESSION['Area'];
if ($userarea==true) 
{
  
}
else
{
  header('location:verify.php');
}

 $query="SELECT * FROM `maternalaccount` WHERE Area='$userarea' ";
 $data=mysqli_query($conn, $query);
 $total=mysqli_num_rows($data);
      
  if ($total !=0) 
  {

   ?>
   <br>
  <p align="center">
   <img src="../image/image90.jpg" height="10%" width="10%" align="center" vspace="" hspace="">
  </p>
    <br>

    <table>
      <tr>
        <th>Name</th>
        <th>w/o</th>
        <th>Area</th>
        <th>Email</th>
        <th>Contact</th>
      </tr>
    
    <?php

    while ($result = mysqli_fetch_assoc($data)) 
    {
      echo "<tr>
              <td>".$result['Name']."</td>
              <td>".$result['wo']."</td>
              <td>".$result['Area']."</td>
              <td>".$result['Email']."</td>
              <td>".$result['Contact']."</td>
            </tr>";
    }
  }
else
{
  echo "no record found";
}

?>
</table>
<br><br><a href="verify.php"><input type="submit" name="back" value="BACK"></a>
</center>
</body>
</html>