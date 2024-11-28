<?php
include("../dbconnection/connection.php");
error_reporting(0);
 $_GET['Id'];
 $_GET['Vaccine'];
 $_GET['give'];
 $_GET['Dose'];
 $_GET['Route'];
 $_GET['Site'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Immunization update</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
  input[type=text],input[type=number], select, textarea 
  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 3px;
  margin-bottom: 3px;
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
  background-image: url(../image/image200.jpg);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 25px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 35%;
  padding: 20px;
}

</style>
</head>
<body>

<form method="GET" action="updateimmunization.php">
<center>
<h1>UPDATE IMMUNIZATION</h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="vimmunization.php">View Information(Immunization)</a></li>
  <li>Edit</li>
  </ul>
 <div class="bg-text">
<table>
    	<tr>
			<td>Id</td>
			<td><input type="number" name="Id" value="<?php echo $_GET['Id'];?>"/></td>
		</tr>
		<tr>
			<td>Vaccine Name</td>
			<td><input type="text" name="Vaccine" value="<?php echo $_GET['Vaccine'];?>"/></td>
	   </tr>
    	<tr>
			<td>When to give</td>
			<td><input type="text" name="give" value="<?php echo $_GET['give'];?>"/></td>
		</tr>
		<tr>
			<td>Dose</td>
			<td><input type="text" name="Dose" value="<?php echo $_GET['Dose'];?>"/></td>
		</tr>
		<tr>
			<td>Route</td>
			<td><input type="text" name="Route" value="<?php echo $_GET['Route'];?>"/></td>
		</tr>
		<tr>
			<td>Site</td>
			<td><input type="text" name="Site" value="<?php echo $_GET['Site'];?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="UPDATE"></td>
		</tr>
	</table><br>
<?php
if ($_GET['submit']) 
{
	 $Id = $_GET['Id'];
	 $Vaccine = $_GET['Vaccine'];
	 $give = $_GET['give'];
	 $Dose = $_GET['Dose'];
	 $Route = $_GET['Route'];
	 $Site = $_GET['Site'];
	
	 $query = "UPDATE immunization SET Id='$Id', Vaccine='$Vaccine', give='$give', Dose='$Dose', Route='$Route',Site='$Site' WHERE Id='$Id'";
	 $data = mysqli_query($conn, $query);
	 if ($data)
	 {
	 	echo "<font color='green'>Information Updated Successfully. <a href='vimmunization.php'>Check Updated Information here</a>";
	 }
	 else
	 {
	 	echo "<font color='red'>Information not updated. <a href='vimmunization.php'>Check here</a>";
	 }

}
else
{
   echo "<font color='blue'>click on UPDATE to save the changes";
}

?>
</div>
</form>
</center>
</body>
</html>