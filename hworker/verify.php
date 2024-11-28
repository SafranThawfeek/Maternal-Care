<!DOCTYPE html>
<html lang="en">
<head>
	<title>Verify Maternal</title>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=text], input[type=number], input[type=email], select, textarea
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
  padding: 12px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
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
  font-size: 35px;
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
  background-image: url(../image/image300.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  color: white;
}
</style>
</head>
<body><br>
<center><h1>VERIFY MATERNAL</h1>
  <ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker Page</a></li>
  <li><font color="black">Verify Maternal</font></li>
  </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form  action="verify.php" method="POST">
    <div class="bg-text">
    <table>
        <tr>
            <td><b><font size="6" color="">Area</font></b></td>
            <td><input type="text" name="Area" placeholder="Enter your Area name"></td>
        </tr>
   </table>
    <input type="submit" name="search" value="Search">
<br>
<?php
session_start();
include("../dbconnection/connection.php");
error_reporting(0);

  if (isset($_POST['search'])) 
   {
      $Area=$_POST['Area'];
  
      $query="SELECT * FROM `maternalaccount` WHERE Area='$Area'";
      $data=mysqli_query($conn, $query);
      $total=mysqli_num_rows($data);

    if (empty($Area)) {
      echo "<font size='4' color='skyblue'>Fill in Empty Field";
      exit();
    
     }
     elseif ($total==1)
     {
      $_SESSION['Area']=$Area;
      header("refresh:0;url=verifymaternal.php"); 
      }
      else{
        echo "<font size='4' color='red'>Invalid Area Name";
        exit();
      }
    }
?>
</div>
</form>
</center>
</body>
</html>
