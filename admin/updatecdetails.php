<?php
include("../dbconnection/connection.php");
error_reporting(0);
$_GET['Id'];
$_GET['mname'];
$_GET['fname'];
$_GET['Area'];
$_GET['cname'];
$_GET['DOB'];
$_GET['gender'];
$_GET['bw'];
$_GET['reg'];
$_GET['Hospital'];
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
	<title>Update Child Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text],input[type=number],input[type=date],input[type=email], select, textarea 
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
  padding: 12px 20px;
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
body{
  background-image: url(../image/image170.png);
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 25px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 20px;
}
.container{
  background-image: url(../image/image13.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  width: 50%;
  font-weight: bold;
}
</style>
</head>
<body>
<form method="GET" action="updatecdetails.php">
<center><h1><font color="white">Update Child Details</font></h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="vcdetails.php">View Child Details</a></li>
  <li>UPDATE</li>
  </ul>
 <div class="container">
<table>
<tr><td><h2>Parents Identification</h2></td></tr>
<tr>
   <td>Id</td>
   <td><input type="number" name="Id" required value="<?php echo $_GET['Id'];?>"/></td>
</tr>
<tr>
  <td>Mother Name</td>
  <td><input type="text" name="mname" required value="<?php echo $_GET['mname'];?>"/></td>
</tr>
<tr>
  <td>Father Name</td>
  <td><input type="text" name="fname" required value="<?php echo $_GET['fname'];?>"/></td>
</tr>
<tr>
  <td>Area</td>
  <td><input type="text" name="Area" required value="<?php echo $_GET['Area'];?>"/></td>
</tr>
<tr><td><h2>Birth Record</h2></td></tr>

<tr>
  <td>Child Name</td>
  <td><input type="text" name="cname" required value="<?php echo $_GET['cname'];?>"/></td>
</tr>
<tr>
  <td>Date Of Birth</td>
  <td><input type="date" name="DOB" required value="<?php echo $_GET['DOB'];?>"/></td>
</tr>
<tr>
  <td>
    <input type="radio" name="gender" value="<?php echo $_GET['gender'];?>"/>Girl
    <input type="radio" name="gender" value="<?php echo $_GET['gender'];?>"/>Boy</td>
</tr>
<tr>
  <td>Birth Weight</td>
  <td><input type="text" name="bw" required value="<?php echo $_GET['bw'];?>"/></td>
</tr>
<tr>
  <td>Birth Registration No</td>
  <td><input type="number" name="reg" required value="<?php echo $_GET['reg'];?>"/></td>
</tr>
<tr>
  <td>Hospital Address</td>
  <td><input type="text" name="Hospital" required value="<?php echo $_GET['Hospital'];?>"/></td>
</tr>
<tr><td><h2>Child Health Report</h2></td></tr>
<tr>
  <td>Date of Immunization</td>
  <td><input type="date" name="vdate" required value="<?php echo $_GET['vdate'];?>"/></td>
</tr>
<tr>
  <td>Month</td>
  <td><input type="text" name="Month" required value="<?php echo $_GET['Month'];?>"/></td>
</tr>
<tr>
  <td>Weight of Child</td>
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
</table><br>
<input type="submit" name="submit" value="UPDATE">
<br>
<?php
if ($_GET['submit']) 
{
  $Id = $_GET['Id'];
  $mname=$_GET['mname'];
  $fname=$_GET['fname'];
  $Area=$_GET['Area'];
  $cname=$_GET['cname'];
  $DOB=$_GET['DOB'];
  $gender=$_GET['gender'];
  $bw=$_GET['bw'];
  $reg=$_GET['reg'];
  $Hospital=$_GET['Hospital'];
  $vdate=$_GET['vdate'];
  $Month=$_GET['Month'];
  $Weight=$_GET['Weight'];
  $vname=$_GET['vname'];
  $Expected=$_GET['Expected'];
  $Actual=$_GET['Actual'];
  $Illness=$_GET['Illness'];
  
  $query = "UPDATE cdetails SET Id='$Id',mname='$mname',fname='$fname',Area='$Area',cname='$cname',DOB='$DOB',gender='$gender',bw='$bw',reg='$reg',Hospital='$Hospital',vdate='$vdate',Month='$Month',Weight='$Weight',vname='$vname',Expected='$Expected',Actual='$Actual',Illness='$Illness' WHERE Id='$Id'";
   $data = mysqli_query($conn, $query);
   if ($data)
   {  
    echo "<script>alert('Information Updated Successfully')</script>";
    ?>
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/vcdetails.php">
    <?php
   }
   else
   {
    echo "<script>alert('Information not updated')</script>";
    ?>
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/updatecdetails.php">
    <?php
   }
}

?>
</div>
</form>
</center>
</body>
</html>