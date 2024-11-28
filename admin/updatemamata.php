<?php
include("../dbconnection/connection.php");
error_reporting(0);
 $_GET['Id'];
 $_GET['Conditionality'];
 $_GET['Responsibility'];
 $_GET['Verification'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mamata update</title>
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
  margin-top: 6px;
  margin-bottom: 16px;
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
  background-image: url(../image/image201.jpg);
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
  top: 68%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 30%;
  padding: 20px;
}
</style>
</head>
<body>
<form method="GET" action="updatemamata.php">
<center>
<h1>UPDATE MAMATA YOJANA</h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="vmamata.php">View Information(Mamata Yojana)</a></li>
  <li>Edit</li>
  </ul><br><br><br><br><br><br>
 <div class="bg-text">
<table>
    	<tr>
			<td>Id</td>
			<td><input type="number" name="Id" value="<?php echo $_GET['Id'];?>"/></td>
		</tr>
		<tr>
			<td>Conditionality</td>
			<td><input type="text" name="Conditionality" value="<?php echo $_GET['Conditionality'];?>"/></td>
	   </tr>
    	<tr>
			<td>Responsibillity</td>
			<td><input type="text" name="Responsibility" value="<?php echo $_GET['Responsibility'];?>"/></td>
		</tr>
		<tr>
			<td>Verification</td>
			<td><input type="text" name="Verification" value="<?php echo $_GET['Verification'];?>"/></td>
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
   $Conditionality = $_GET['Conditionality'];
   $Responsibility = $_GET['Responsibility'];
   $Verification = $_GET['Verification'];
  
   $query = "UPDATE mamata SET Id='$Id', Conditionality='$Conditionality', Responsibility='$Responsibility', Verification='$Verification' WHERE Id='$Id'";
   $data = mysqli_query($conn, $query);
   if ($data)
   {
    echo "<font color='green'>Information Updated Successfully. <a href='vmamata.php'>Check Updated Information here</a>";
   }
   else
   {
    echo "<font color='red'>Information not updated. <a href='vmamata.php'>Check here</a>";
   }

}
else
{
   echo "<font color='blue'>click on UPDATE to save the changes";
}
?>
</center>
</div>
</form>
</body>
</html>
