<!DOCTYPE html>
<html>
<head>
	<title>child register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
input[type=text],input[type=button],input[type=email],input[type=number], input[type=password], input[type=date], select, textarea 
  {
  width: %;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 2px;
  margin-bottom: 3px;
  resize: vertical;
 }
 input[type=submit],input[type=button] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit],input[type=button]:hover {
  background-color: #45a049;
}
body{
  background-image: url(../image/image194.png);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  
}
.container{
  background-image: url(../image/image94.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  padding: 30px;
  width: 50%;
  font-weight: bold;
}
</style>
</head>
<body>
	<center><h1><font color="white">CHILD REGISTRATION</font></h1>
  <ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker Page</a></li>
  <li>Register Child</li>
  </ul>
  <form action="childregister.php" method="POST">
    <div class="container">
<table>
<tr>
  <td>Date</td>
  <td><input type="date" name="Date" required></td>
</tr>
<tr><td><h2>Parents Identification</h2></td></tr>
<tr>
   <td>Id</td>
   <td><input type="number" name="Id" required></td>
</tr>
<tr>
  <td>Mother Name</td>
  <td><input type="text" name="mname" required></td>
</tr>
<tr>
  <td>Father Name</td>
  <td><input type="text" name="fname" required></td>
</tr>
<tr>
  <td>Area</td>
  <td><input type="text" name="Area" required></td>
</tr>
<tr><td><h2>Birth Record</h2></td></tr>

<tr>
  <td>Child Name</td>
  <td><input type="text" name="cname" required></td>
</tr>
<tr>
  <td>Date Of Birth</td>
  <td><input type="date" name="DOB" required></td>
</tr>
<tr>
  <td>
    <input type="radio" name="gender" value="Girl">Girl
    <input type="radio" name="gender" value="Boy">Boy</td>
</tr>
<tr>
  <td>Birth Weight</td>
  <td><input type="text" name="bw" required></td>
</tr>
<tr>
  <td>Birth Registration No</td>
  <td><input type="number" name="reg" required></td>
</tr>
<tr>
  <td>Hospital Address</td>
  <td><input type="text" name="Hospital" required></td>
</tr>
<tr><td><h2>Child Health Report</h2></td></tr>
<tr>
  <td>Date of Immunization</td>
  <td><input type="date" name="vdate" required></td>
</tr>
<tr>
  <td>Month</td>
  <td><input type="text" name="Month" required></td>
</tr>
<tr>
  <td>Weight of Child</td>
  <td><input type="text" name="Weight" required></td>
</tr>
<tr>
  <td>Vaccine Name</td>
  <td><input type="text" name="vname" required></td>
</tr>
<tr>
  <td>Expected date to come and take vaccine</td>
  <td><input type="date" name="Expected" required></td>
</tr>
<tr>
  <td>Actual Date of taking vaccine</td>
  <td><input type="date" name="Actual" required></td>
</tr>
<tr>
  <td>Any Illness??</td>
  <td><input type="text" name="Illness" required></td>
</tr>
</table>
</table>
<input type="submit" name="submit" value="SUBMIT">
</form>

<?php
  include('../dbconnection/connection.php');
	if (isset($_POST['submit'])){
 
  $Date=$_POST['Date'];
  $Id=$_POST['Id'];
  $mname=$_POST['mname'];
  $fname=$_POST['fname'];
  $Area=$_POST['Area']; 
  $cname=$_POST['cname'];
  $DOB=$_POST['DOB'];
  $gender=$_POST['gender'];
  $bw=$_POST['bw'];
  $reg=$_POST['reg'];
  $Hospital=$_POST['Hospital'];
  $vdate=$_POST['vdate'];
  $Month=$_POST['Month'];
  $Weight=$_POST['Weight'];
  $vname=$_POST['vname'];
  $Expected=$_POST['Expected'];
  $Actual=$_POST['Actual'];
  $Illness=$_POST['Illness'];
  
 $query = "INSERT into cdetails values('$Date','$Id', '$mname', '$fname', '$Area', '$cname','$DOB', '$gender','$bw', '$reg','$Hospital','$vdate','$Month','$Weight','$vname','$Expected','$Actual','$Illness')";
 if (mysqli_query($conn, $query)) {
      echo "<script>alert('Registration successfully completed')</script>";
  ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/hworker/childregister.php">
  <?php
    }
    else{
      echo "<font size='4' color='red'>Sorry!! Registration is unsuccessfull";
    }
  }
?>
</div>
</center>
</body>
</html>
