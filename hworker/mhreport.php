<?php
include("../dbconnection/connection.php");
error_reporting(0);
$_GET['Id'];
$_GET['Name'];
$_GET['Area'];
$_GET['cdate'];
$_GET['Month'];
$_GET['ANC'];
$_GET['BP'];
$_GET['Weight'];
$_GET['TT'];
$_GET['Iron'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Health Report</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
input[type=text],input[type=date],input[type=email],input[type=number], select, textarea 
  {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  margin-top: 1px;
  margin-bottom: 1px;
  resize: vertical;
 }
 input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 18px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 30%;
  padding: 2px;
}
body{
  background-image: url(../image/image206.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body><br>
	<center><h1><b><font color="white">MATERNAL HEALTH CHECK-UP</font></b></h1>
	<ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker Page</a></li>
  <li><a href="Maternaldetails.php">View Maternal Details</a></li>
  <li>Submit Health Reprt</li>
  </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form action="mhreport.php" method="GET">
<div class="bg-text">
<table>
<tr>
  <td>Id</td>
  <td><input type="number" name="Id" required value="<?php echo $_GET['Id'];?>"/></td>
</tr>
<tr>
  <td>Name</td>
  <td><input type="text" name="Name" required value="<?php echo $_GET['Name'];?>"/></td>
</tr>
<tr>
  <td>Area</td>
  <td><input type="text" name="Area" required value="<?php echo $_GET['Area'];?>"/></td>
</tr>
<tr>
  <td>Check-up Date</td>
  <td><input type="date" name="cdate" required value="<?php echo $_GET['cdate'];?>"/></td>
</tr>
<tr>
  <td>Month</td>
  <td><input type="text" name="Month" required value="<?php echo $_GET['Month'];?>"/></td>
</tr>
<tr>
  <td>ANC</td>
  <td><input type="text" name="ANC" required value="<?php echo $_GET['ANC'];?>"/></td>
</tr>
<tr>
  <td>BP</td>
  <td><input type="text" name="BP" required value="<?php echo $_GET['BP'];?>"/></td>
</tr>
<tr>
  <td>Weight</td>
  <td><input type="text" name="Weight" required value="<?php echo $_GET['Weight'];?>"/></td>
</tr>
<tr>
  <td>TT</td>
  <td><input type="text" name="TT" required value="<?php echo $_GET['TT'];?>"/></td>
</tr>
<tr>
  <td>Iron</td>
  <td><input type="text" name="Iron" required value="<?php echo $_GET['Iron'];?>"/></td>
</tr>
<tr>
  <td></td>
  <td><input type="submit" name="submit" value="SUBMIT"></td>
</tr>
</table>
<br><br>
<?php

  if ($_GET['submit'])
  {
  $Id=$_GET['Id'];  
  $Name=$_GET['Name'];
  $Area=$_GET['Area'];
  $Date=$_GET['cdate'];
  $Month=$_GET['Month'];
  $ANC=$_GET['ANC'];
  $BP=$_GET['BP'];
  $Weight=$_GET['Weight'];
  $TT=$_GET['TT'];
  $Iron=$_GET['Iron'];

  $query="UPDATE mdetails SET Id='$Id',Name='$Name',Area='$Area', cdate='$cdate',Month='$Month',ANC='$ANC',BP='$BP',Weight='$Weight',TT='$TT',Iron='$Iron' WHERE Id='$Id'";

  $data = mysqli_query($conn, $query);
   if ($data)
   {
    echo "<font color='green'>Health Report Submitted Successfully. <a href='maternaldetails.php'>Check Updated list here</a>";
   }
   else
   {
    echo "<font color='red'>Record not updated. <a href='maternaldetails.php'>Check list here</a>";
   } 
}
else
{
   echo "<font color='blue'>click on SUBMIT to submit report";
}

?>
</div>
</form>
</center>
</body>
</html>