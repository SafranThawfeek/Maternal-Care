<?php 
session_start();
error_reporting(0);
include("../dbconnection/connection.php");
$userprofile=$_SESSION['Name'];
$userpass=$_SESSION['Password'];
if ($userprofile==true) 
{

}
else
{
  header('location:adminhome.php');
}
$query="SELECT * FROM adminaccount WHERE Name='$userprofile' && Password='$userpass'";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);

if ($total!=0) {
  
}
else{
  header('location: adminhome.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adfeatures</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
	margin: 0;
	padding: 0;
}
body{
	background-image: url(../image/image193.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	box-sizing: border-box;
	font-family: sans-serif;
}
.menu-bar
{
   background: rgb(0,0,100);
   text-align: center;
}
.menu-bar ul
{
	display: inline-flex;
	list-style: none;
	color:;
}
.menu-bar ul li
{
	width: 120px;
	margin: 15px;
	padding: 15px;
}
.menu-bar ul li a
{
	text-decoration: none;
	color: #fff;
}
.active, .menu-bar ul li:hover
{
	background: skyblue;
	border-radius: 3px;
}
.sub-menu-1{
	display: none;
}
.menu-bar ul li:hover .sub-menu-1
{
	display: block;
	position: absolute;
	background: rgb(0,0,100);
	margin-top: 15px;
	margin-left: -15px;
}
.menu-bar ul li:hover .sub-menu-1 ul
{
	display: block;
	margin: 10px;
}
.menu-bar ul li:hover .sub-menu-1 ul li
{
	width: 150px;
	padding: 10px;
	border-bottom: 1px dotted #fff;
	background: transparent;
	border-radius: 0;
	text-align: left;
}
.menu-bar ul li:hover .sub-menu-1 ul li:last-child
{
	border-bottom: none;
}
.menu-bar ul li:hover .sub-menu-1 ul li a:hover
{
	color: skyblue;
}
.sub-menu-2
{
	display: none;
}
.hover-me:hover .sub-menu-2
{
	position: absolute;
	display: block;
	background: rgb(0,0,100);
	margin-top: -40px;
	margin-left: 140px;
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
body p{
	top: 50%;
}
</style>
</head>
<body>
	 <div class="menu-bar">
		<ul>
			<li><a href="#">VIEW INFORMATION</a>
			 <div class="sub-menu-1">
			 <ul>
				<li><a href="vmamata.php">MAMATA YOJANA</a></li>
				<li><a href="vimmunization.php">IMMUNIZATION</a></li>
			 </ul>
			 </div>
			 </li>

			 <li><a href="#">NOTIFICATION</a>
				<div class="sub-menu-1">
				<ul>
				<li><a href="sendnotif1.php">SEND NOTIFICATION</a></li>
				<li><a href="viewnotif.php">VIEW NOTIFICATION</a></li>
				</ul>
				</div>
			 </li>
			 <li><a href="#">ACCOUNT</a>
			    <div class="sub-menu-1">
					<ul>
						<li><a href="vaccount.php">VIEW ACCOUNT</a></li>
						<li><a href="caccount.php">CANCEL ACCOUNT</a></li>
					</ul>
				</div>
			</li>
			<li><a href="#">VIEW DETAILS</a>
			    <div class="sub-menu-1">
					<ul>
						<li><a href="vmdetails.php">MATERNAL DETAILS</a></li>
						<li><a href="vcdetails.php">CHILD DETAILS</a></li>
      				</ul>
				</div>
			</li>
			<li><a href="vcomplaint.php">VIEW COMPLAINT</a></li>
			<li><a href="vfeedback.php">VIEW FEEDBACK</a></li>
		    <li><a href="vcm.php">VIEW CONTACT MESSAGE</a></li>
			<li><a href="alogout.php">LOG OUT</a></li>
		</ul>
	</div>
  <center><ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li>Admin Page</li>
  </ul><br><br><br>
  <h1 align="center">
  	<p><font size="7">WELCOME...# ADMIN</font></p>
   	<img src="../image/image102.png" height="400" width="1000">
    </center>
</body>
</html>