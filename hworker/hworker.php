<!DOCTYPE html>
<html lang="en">
<head>
  <title>hworker</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
    background-image: url(../image/image169.jpg);
    color: white;
  }
  th{
    color: pink;
    font-weight: bold;
    font-size: 25px;
  }
  td{
      padding: 20px;
      font-size: 20px;
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
  <div class="container">
  <br>
<?php
  session_start();
  include("../dbconnection/connection.php");
  error_reporting(0);
  
  $userprofile=$_SESSION['Name'];
  $userpass=$_SESSION['Password'];
if ($userprofile==true) 
{
  
}
else
{
  header('location:vaccount1.php');
}
     
      $query="SELECT * FROM `hworkeraccount` WHERE Name='$userprofile' && Password='$userpass' ";
      $data=mysqli_query($conn, $query);
      $total=mysqli_num_rows($data);

  if ($total !=0) 
  {
    echo "Welcome ".$_SESSION['Name'];
    ?>
    <br><br>
    <img src="../image/image144.jpg" height="20%" width="20%" align="center" vspace="" hspace="">
    <br><br>

    <table>
      <tr>
        <th>Name</th>
        <th>Password</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact</th>
        <th>AdhaarNo</th>
      </tr>
    
    <?php

    while ($result = mysqli_fetch_assoc($data)) 
    {
      echo "<tr>
              <td>".$result['Name']."</td>
              <td>".$result['Password']."</td>
              <td>".$result['Address']."</td>
              <td>".$result['Email']."</td>
              <td>".$result['Contact']."</td>
              <td>".$result['AdhaarNo']."</td>
            </tr>";
       }
  }
else
{
  echo "no record found";
}
?>
</table>
<br><br><a href="vaccount1.php"><input type="submit" name="back" value="BACK"></a>
</center>
</div>
</body>
</html>
