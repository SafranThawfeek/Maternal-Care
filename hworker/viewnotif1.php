<!DOCTYPE html>
<html lang="en">
<head><title>View Notification</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=text], input[type=number], select, textarea
  {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
 }
 input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}*{
  margin: 0;
  padding: 0;
}
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 20px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 25%;
  padding: 50px;
}
body{
  background-image: url(../image/image100.jpg);
  height: 100%;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;

  }
</style>
</head>
<body>
<form action="viewnotif1.php" method="POST">
<center><br><br><h1>View Notification</h1><br><br>
  <ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker Page</a></li>
  <li>View Notification</li>
  </ul> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="bg-text">
    Name  <input type="text" name="Name" placeholder="Enter your name"><br><br>
    Area  <input type="text" name="Area" placeholder="Enter your area"><br><br>
    <input type="submit" name="search" value="Search">
  <br><br>
<?php 
  session_start();
  include("../dbconnection/connection.php");
  error_reporting(0);
  if (isset($_POST['search'])) 
   {
      $Name=$_POST['Name'];
      $Area=$_POST['Area'];
    
      $query="SELECT * FROM `notification1` WHERE Name='$Name' && Area='$Area' ";
      $data=mysqli_query($conn, $query);
      $total=mysqli_num_rows($data);

   if (empty($Name) || empty($Area)) 
   {
     echo "<font size='4' color='skyblue'>Fill in Empty Fields";
      exit();
    
     }

    elseif (!preg_match("/^[a-zA-Z ]*$/", $Name)) 
    {
      echo "<font size='5' color='red'>Invalid Name";
      exit();
    }
     elseif($total!=0)
     {
      $_SESSION['Name']=$Name;
      $_SESSION['Area']=$Area;
      header("refresh:0;url=notif.php"); 
      }
    else{
      echo "<font size='4' color='red'>Invalid Name or Area";
      exit();

    }
 }
 ?>
</div>
</center>
</form>
</body>
</html>
