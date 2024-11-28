<?php
include("../dbconnection/connection.php");
error_reporting(0);
$_GET['Id'];
$_GET['cname'];
$_GET['vdate'];
$_GET['Month'];
$_GET['Weight'];
$_GET['vname'];
$_GET['Expected'];
$_GET['Actual'];
$_GET['Illness'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Health Report</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
*{
  box-sizing: border-box;
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
input[type=text],input[type=date],input[type=email],input[type=number], select, textarea {
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
  font-size: 20px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 58%;
  left: 28%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding: 10px;
}
body{
  background-image: url(../image/image3.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  color: black;
  width: 50%;
}
</style>
</head>
<body><br>
  <center><h1><b>CHILD HEALTH REPORT</b></h1>
  <ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker Page</a></li>
  <li><a href="childdetails.php">View Child Details</a></li>
  <li>Submit Health Reprt</li>
  </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="bg-text">
<form action="chreport.php" method="GET">
<table>
<tr>
   <td>Id</td>
   <td><input type="number" name="Id" required value="<?php echo $_GET['Id'];?>"/></td>
</tr>
<tr>
   <td>Child Name</td>
   <td><input type="text" name="cname" required value="<?php echo $_GET['cname'];?>"/></td>
</tr>
<tr>
  <td>Date of Immunization</td>
  <td><input type="date" name="vdate" required value="<?php echo $_GET['vdate'];?>"/></td>
</tr>
<tr>
  <td>Month</td>
  <td><input type="text" name="Month" required value="<?php echo $_GET['Month'];?>"/></td>
</tr>
<tr>
  <td>Weight</td>
  <td><input type="text" name="Weight" required value="<?php echo $_GET['Weight'];?>"/></td>
</tr>
<tr>
  <td>Vaccine Name</td>
  <td><input type="text" name="vname" required value="<?php echo $_GET['vname'];?>"/></td>
</tr>
<tr>
  <td>Expected date to come and take vaccine</td>
  <td><input type="date" name="Expected" required value="<?php echo $_GET['Expected'];?>"/></td>
</tr>
<tr>
  <td>Actual Date of taking vaccine</td>
  <td><input type="date" name="Actual" required value="<?php echo $_GET['Actual'];?>"/></td>
</tr>
<tr>
  <td>Any Illness??</td>
  <td><input type="text" name="Illness" required value="<?php echo $_GET['Illness'];?>"/></td>
</tr>
</table>
<input type="submit" name="submit" value="SUBMIT">
</form>
<?php 

  if ($_GET['submit'])
 {
  $Id=$_GET['Id'];
  $cname=$_GET['cname']; 
  $vdate=$_GET['vdate'];
  $Month=$_GET['Month'];
  $Weight=$_GET['Weight'];
  $vname=$_GET['vname'];
  $Expected=$_GET['Expected'];
  $Actual=$_GET['Actual'];
  $Illness=$_GET['Illness'];
  
 $query = "UPDATE cdetails SET Id='$Id',cname='$cname',vdate='$vdate',Month='$Month',Weight='$Weight',vname='$vname',Expected='$Expected',Actual='$Actual',Illness='$Illness' WHERE Id='$Id'";
 $data =mysqli_query($conn, $query);
 if ($data)
   {
    echo "<font color='green'>Health Report Submitted Successfully. <a href='childdetails.php'>Check Updated list here</a>";
   }
   else
   {
    echo "<font color='red'>Record not updated. <a href='childdetails.php'>Check list here</a>";
   } 
}
else
{
   echo "<font color='blue'>click on SUBMIT to submit report";
}

?>
</center>
</div>
</body>
</html>