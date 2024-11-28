<?php
include("../dbconnection/connection.php");
error_reporting(0);
 $_GET['Id'];
 $_GET['Name'];
 $_GET['Gname'];
 $_GET['Password'];
 $_GET['Address'];
 $_GET['Email'];
 $_GET['Contact'];
 $_GET['AdhaarNo'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Maternal account update</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
body{
		background-image: url(../image/image201.jpg);
		background-position: center;
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
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 25%;
  padding: 20px;
}
</style>
</head>
<body>
<form method="GET" action="update2.php">
	<center>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="vaccount.php">View Account</a></li>
  <li><a href="maternalaccount.php">Maternal Account</a></li>
  <li>Edit</li>
  </ul><br><br><br><br><br><br><br><br><br>
<div class="bg-text">
<table>   
    <tr>
	<td>Id</td>
	<td><input type="number" name="Id" placeholder="id" value="<?php echo $_GET['Id'];?>"/></td>
	</tr>
    <tr>
	<td>Name</td>
	<td><input type="text" name="Name" placeholder="Name" value="<?php echo $_GET['Name'];?>"/></td>
	</tr>
    <tr>
	<td>Address</td>
	<td><input type="text" name="Area" placeholder="address" value="<?php echo $_GET['Address'];?>"/></td>
	</tr>
    <tr>
	<td>Email</td>
	<td><input type="text" name="Email" placeholder="email" value="<?php echo $_GET['Email'];?>"/></td>
	</tr>
    <tr>
	<td>Contact</td>
	<td><input type="text" name="Contact" placeholder="contact" value="<?php echo $_GET['Contact'];?>"/></td>
	</tr>
</table>	
	<input type="submit" value="UPDATE" name="submit"><br><br>
<?php
if ($_GET['submit']) 
{
	 $Id = $_GET['Id'];
	 $Name = $_GET['Name'];
	 $Area = $_GET['Area'];
	 $Email = $_GET['Email'];
	 $Contact = $_GET['Contact'];
	
	 $query = "UPDATE maternalaccount SET Id='$Id', Name='$Name', Area='$Area', Email='$Email', Contact='$Contact' WHERE Id='$Id'";
	 $data = mysqli_query($conn, $query);
	 if ($data)
	 {
	 	echo "<font color='green'>Record Updated Successfully. <a href='maternalaccount.php'>Check Updated list here</a>";
	 }
	 else
	 {
	 	echo "<font color='red'>Record not updated. <a href='maternalaccount.php'>Check list here</a>";
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

