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
  header('location:../home/homepage.php');
}
$query="SELECT * FROM hworkeraccount WHERE Name='$userprofile' && Password='$userpass'";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);

if ($total!=0) {
  
}
else{
  header('location: ../home/homepage.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>HWfeatures</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  *{
  margin: 0;
  padding: 0;
}
body{
  background-color: orange;
  box-sizing: border-box;
  font-family: sans-serif;
}
.menu-bar
{
   background: brown;
   text-align: center;
}
.menu-bar ul
{
  display: inline-flex;
  list-style: none;
  color:#fff;
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
  background: orange;
  border-radius: 3px;
}
.sub-menu-1{
  display: none;
}
.menu-bar ul li:hover .sub-menu-1
{
  display: block;
  position: absolute;
  background: brown;
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
  color: orange;
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
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}
form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
	<div class="menu-bar">
		<ul>
			<li><a href="#">VIEW INFORMATION</a>
      <div class="sub-menu-1">
          <ul>
            <li><a href="hc1.php">HEALTH CARE</a></li>
            <li><a href="facility1.php">GOVT FACILITIES</a></li>
            <li><a href="rhw.php">ROLE Of Health worker</a></li>
          </ul>
        </div>
        </li>
			  <li><a href="#">REGISTRATION</a>
          <div class="sub-menu-1">
            <ul>
               <li><a href="mdetails.php">REGISTER MATERNAL</a></li>
               <li><a href="childregister.php">REGISTER CHILD</a></li></li>
             </ul>
            </div>
           </li>

        <li><a href="verify.php">VERIFY MATERNAL</a></li>

        <li><a href="#">VIEW DETAILS</a>
          <div class="sub-menu-1">
           <ul>
           <li><a href="vmaternaldetails.php">MATERNAL DETAILS</a></li>
           <li><a href="vchilddetails.php">CHILD DETAILS</a></li>
           </ul>
          </div>
        </li>

        <li><a href="#">NOTIFICATION</a>
          <div class="sub-menu-1">
            <ul>
            <li><a href="sendnotif.php">SEND NOTIFICATION</a></li>
            <li><a href="viewnotif1.php">VIEW NOTIFICATION</a></li>
            </ul>
          </div>
        </li>

			  <li><a href="vaccount1.php">VIEW ACCOUNT</a></li>
			  <li><a href="gfeedback.php">GIVE FEEDBACK</a></li>
			  <li><a href="../logout/hlogout.php">LOG OUT</a></li>
		</ul>
  </div>
  <center>
	<ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li>Health worker Page</li>
  </ul>
  <h1 align="center">
    <p><font size="6" color="brown">WELCOME...</font></p>
    <p><font size="6" color="brown">To Work As A Midwives</font></p>
	<img src="../image/image138.jpg" height="40%" width="50%">
  </h1>
</body>
</html> 




