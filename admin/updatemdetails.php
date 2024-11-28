<?php
include("../dbconnection/connection.php");
error_reporting(0);
 $_GET['Id'];
 $_GET['Date'];
 $_GET['Name'];
 $_GET['Age'];
 $_GET['wo'];
 $_GET['Area'];
 $_GET['Email'];
 $_GET['Contact'];
 $_GET['period'];
 $_GET['delivery'];
 $_GET['Pregnancies'];
 $_GET['destination'];
 $_GET['person'];
 $_GET['anb'];
 $_GET['CHC'];
 $_GET['PHC'];
 $_GET['Hospital'];
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
	<title>Update Maternal Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text],input[type=number],input[type=date],input[type=email], select, textarea 
  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 2px;
  margin-bottom: 2px;
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
.container{
  background-image: url(../image/image92.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  width: 50%;
  font-weight: bold;
}
body{
  background-image: url(../image/image170.png);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<form method="GET" action="updatemdetails.php">
<center>
<h1><font color="white">UPDATE MATERNAL DETAILS</font></h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="vmdetails.php">View Maternal Details</a></li>
  <li>Edit</li>
  </ul>
 <div class="container">
<table>
<tr><td><h2>Maternal Identification</h2></td></tr>
<tr>
  <td>Id</td>
  <td><input type="number" name="Id" required value="<?php echo $_GET['Id'];?>"/></td>
</tr>
<tr>
  <td>Registration Date</td>
  <td><input type="date" name="Date" required value="<?php echo $_GET['Date'];?>"/></td>
</tr>
<tr>
  <td>Name</td>
  <td><input type="text" name="Name" required value="<?php echo $_GET['Name'];?>"/></td>
</tr><br>
<tr>
  <td>Age</td>
  <td><input type="number" name="Age" required value="<?php echo $_GET['Age'];?>"/></td>
</tr><br>
<tr>
  <td>W/O</td>
  <td><input type="text" name="wo" required value="<?php echo $_GET['wo'];?>"/></td>
</tr>
<tr>
  <td>Address</td>
  <td><input type="text" name="Area" required value="<?php echo $_GET['Area'];?>"/></td>
</tr><br>
<tr>
  <td>E-mail</td>
  <td><input type="email" name="Email" required value="<?php echo $_GET['Email'];?>"/></td>
</tr><br>
<tr>
  <td>Contact</td>
  <td><input type="number" name="Contact" required value="<?php echo $_GET['Contact'];?>"/></td>
</tr>
</table>
<table>
<tr>
  <td><h2>Pregnancy Record</h2></td>
</tr>
<tr>
  <td>Date Of last period</td>
  <td><input type="date" name="period" required value="<?php echo $_GET['period'];?>"/></td>
</tr><br>
<tr>
  <td>Expected date of delivery</td>
  <td><input type="date" name="delivery" required value="<?php echo $_GET['delivery'];?>"/></td>
</tr><br>
<tr>
  <td>No of Pregnancies/Live births</td>
  <td><input type="text" name="Pregnancies" required value="<?php echo $_GET['Pregnancies'];?>"/></td>
</tr><br>
<tr>
  <td>Last delivery conducted at:</td>
</tr><br>
<tr>
  <td>
    <input type="radio" name="destination" value="<?php echo $_GET['destination'];?>"/>Institution
    <input type="radio" name="destination" value="<?php echo $_GET['destination'];?>"/>Home</td>
</tr><br>
<tr>
  <td>
    <input type="radio" name="person" value="<?php echo $_GET['person'];?>"/>Trained person
    <input type="radio" name="person" value="<?php echo $_GET['person'];?>"/>Untrained person</td>
</tr>
</table>
<table>
<tr>
<td><h2>Institutional Identification</h2></td>
</tr>
<tr>
  <td>Anganwadi/Block</td>
  <td><input type="text" name="anb" required value="<?php echo $_GET['anb'];?>"/></td>
</tr><br>
<tr>
  <td>CHC/Clinic</td>
  <td><input type="text" name="CHC" required value="<?php echo $_GET['CHC'];?>"/></td>
</tr><br>
<tr>
  <td>PHC/Town</td>
  <td><input type="text" name="PHC" required value="<?php echo $_GET['PHC'];?>"/></td>
</tr><br>
<tr>
  <td>Hospital Address</td>
  <td><input type="text" name="Hospital" required value="<?php echo $_GET['Hospital'];?>"/></td>
</tr>
</table>
<table>
<tr>
<td><h2>Health Report</h2></td>
</tr>
<tr>
  <td>Check-up Date</td>
  <td><input type="date" name="cdate" required value="<?php echo $_GET['cdate'];?>"/></td>
</tr>
<tr>
  <td>Continuing Month</td>
  <td><input type="text" name="Month" required value="<?php echo $_GET['Month'];?>"/></td>
</tr>
<tr>
  <td>AnteNatal Check-up</td>
  <td><input type="text" name="ANC" required value="<?php echo $_GET['ANC'];?>"/></td>
</tr>
<tr>
  <td>Blood Pressure</td>
  <td><input type="text" name="BP" required value="<?php echo $_GET['BP'];?>"/></td>
</tr>
<tr>
  <td>Weight</td>
  <td><input type="text" name="Weight" required value="<?php echo $_GET['Weight'];?>"/></td>
</tr>
<tr>
  <td>T.T. Injection</td>
  <td><input type="text" name="TT" required value="<?php echo $_GET['TT'];?>"/></td>
</tr>
<tr>
  <td>Iron Tablets</td>
  <td><input type="text" name="Iron" required value="<?php echo $_GET['Iron'];?>"/></td>
</tr>
</table><br>
<input type="submit" name="submit" value="UPDATE">
<br><br>
<?php
if ($_GET['submit']) 
{
  $Id = $_GET['Id'];
  $Date=$_GET['Date'];
  $Name=$_GET['Name'];
  $Age=$_GET['Age'];
  $wo=$_GET['wo'];
  $Area=$_GET['Area'];
  $Email=$_GET['Email'];
  $Contact=$_GET['Contact'];
  $period=$_GET['period'];
  $delivery=$_GET['delivery'];
  $Pregnancies=$_GET['Pregnancies'];
  $destination=$_GET['destination'];
  $person=$_GET['person'];
  $anb=$_GET['anb'];
  $CHC=$_GET['CHC'];
  $PHC=$_GET['PHC'];
  $Hospital=$_GET['Hospital'];
  $cdate=$_GET['cdate'];
  $Month=$_GET['Month'];
  $ANC=$_GET['ANC'];
  $BP=$_GET['BP'];
  $Weight=$_GET['Weight'];
  $TT=$_GET['TT'];
  $Iron=$_GET['Iron'];
 
  $query = "UPDATE mdetails SET Id='$Id',Date='$Date',Name='$Name',Age='$Age',wo='$wo',Area='$Area',Email='$Email',Contact='$Contact',period='$period',delivery='$delivery',Pregnancies='$Pregnancies',destination='$destination',person='$person',anb='$anb',CHC='$CHC',PHC='$PHC',Hospital='$Hospital',cdate='$cdate',Month='$Month',ANC='$ANC',BP='$BP',Weight='$Weight',TT='$TT',Iron='$Iron' WHERE Id='$Id'";
   $data = mysqli_query($conn, $query);
   if ($data)
   {  
    echo "<script>alert('Information Updated Successfully')</script>";
    ?>
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/vmdetails.php">
    <?php
   }
   else
   {
    echo "<script>alert('Information not updated')</script>";
    ?>
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/updatemdetails.php">
    <?php
   }
}
?>
</div>
</form>
</center>
</body>
</html>