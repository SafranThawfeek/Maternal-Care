<!DOCTYPE html>
<html>
<head>
	<title>Cancel Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=number], select, textarea 
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
  padding: 10px 10px;
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
.section1{
  height: 550px;
  padding-top: 50px;
  padding-bottom: 50px;

}
.bg-image {
  /* The image used */
  background-image: url("../image/image31.jpg");
  
  /* Add the blur effect */
  filter: blur(4px);
  -webkit-filter: blur(4px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
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
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 20%;
  padding: 50px;
  
}
</style>
</head>
<body>

   <center><h1>CANCEL ACCOUNT</h1>
	<ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
    <li><a href="adfeatures.php">Admin page</a></li>
  <li>Cancel Account</li>
  </ul>
  <form action="caccount.php" method="POST">
   <div class="section1">
	<div class="bg-image"></div>
		<br><br>
    <div class="bg-text">
	<label>Id</label>
	<input type="number" name="Id" placeholder="Enter Id"><br><br>
	<input type="submit" name="cancel" value="CANCEL">
  </div></div>
  </form>
</body>
</html>

<?php
session_start();
include("../dbconnection/connection.php");
error_reporting(0);
if (isset($_POST['cancel']))
{
$Id = $_POST['Id'];
$query = "DELETE FROM maternalaccount WHERE Id='$Id'";
$data = mysqli_query($conn, $query);

if (empty($Id))
{
  echo "<font size='4' color='green'>Fill in Id";
  exit();
}
elseif ($data) 
{
  echo "<script>alert('Account Canceled')</script>";
?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/caccount.php">
<?php
}
else
{
  echo "<font color='red'>Sorry!! Not Canceled..Invalid Id";
}
}
?>
</center>
