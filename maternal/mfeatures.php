<!DOCTYPE html>
<html>
<head>
	<title>Mfeatures</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
  margin: 0;
  padding: 0;
}
body{
  background-image: url(../image/image14.webp);
  height: 100vh;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  box-sizing: border-box;
  font-family: sans-serif;
}
.menu-bar
{
   background: rgb(0,100,0);
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
  width: 150px;
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
  background: #2bab0d;
  border-radius: 3px;
}
.sub-menu-1{
  display: none;
}
.menu-bar ul li:hover .sub-menu-1
{
  display: block;
  position: absolute;
  background: rgb(0,100,0);
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
  color: #b2ff00;
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
            <li><a href="hc.php">HEALTH CARE</a></li>
            <li><a href="facility.php">GOVT FACILITIES</a></li>
          </ul>
        </div>
      </li>
      <li><a href="#">VIEW ACCOUNT</a>
        <div class="sub-menu-1">
          <ul>
            <li><a href="vmaccount.php">MATERNAL ACCOUNT</a></li>
            <li><a href="vcaccount.php">CHILD ACCOUNT</a></li>
          </ul>
        </div>
      </li>
      <li><a href="complaint.php">COMPLAINT-BOX</a></li>
			<li><a href="gfeedback1.php">GIVE FEEDBACK</a></li>
		  <li><a href="../logout/mlogout.php">LOG OUT</a></li>
		</ul>
	</div>
	<center>
		<ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/mlogin.php">Login</a></li>
  <li>Maternal Page</li>
  </ul>
  <br><br><br><br>
  <h1 align="center">
       <p><font size="7" color="green">WELCOME...</p>
       <p>To Be A Safe Mother</p>
  </h1>
</body>
</html>

<?php 
session_start();
error_reporting(0);
include("../dbconnection/connection.php");

$userid=$_SESSION['Id'];
$userprofile=$_SESSION['Name'];
if ($userid==true) 
{

}
else
{
  header('location:../home/homepage.php');
}
$query="SELECT * FROM mdetails WHERE Id='$userid' && Name='$userprofile'";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);

if ($total!=0) {
  
}
else{
  header('location: ../home/homepage.php');
  exit();
}
?>
</center>