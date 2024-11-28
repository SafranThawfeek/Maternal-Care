<?php
session_start();
error_reporting(0);
include("../dbconnection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head><title>homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=text], input[type=number], input[type=email], select, textarea
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
  padding: 10px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
*{
  margin: 0;
  padding: 0;
} 
{  box-sizing: border-box;}
/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  height: 100%;
}
html {
  scroll-behavior: smooth;
}
#section1 {
  padding: 130px;
  text-align: center;
  background-image: url(../image/image26.webp); 
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  color: black;
}
.header h1{
  font-weight: bold;
  font-size: 70px;
}
/* Increase the font size of the heading
/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  top: 0;
  z-index: 10;
}
.navbar-nav li
{
 padding: 0 10px;
}
.navbar-nav li a{
  float: left;
  text-align: left;
}
.navbar ul li a:hover{
  color: green;
}
/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}
/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}
#section2 {
  height: 700px;
  padding-top: 50px;
  padding-bottom: 50px;
}
 .bg-image {
  /* The image used */
  background-image: url("../image/image36.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
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
  font-size: 15px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 150%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 20px;
  text-align:justify;
}
#section3 {
  height: 550px;
  background-image: url(../image/image161.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  padding-top: 20px;
  padding-bottom: 50px;
  color: #555;
}
.bg-text1 {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 15px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 240%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 60%;
  padding: 10px;
  text-align:justify; 
}
.contact{
  padding: 30px;
  padding-top: 20px;
  padding-bottom: 50px;
  color: #777;
  border:1px solid-red;
  display: inline-block;
  width:500px; 
}
.contact-info {
  border:1px solid-red;
  display: inline-block;
  width:300px;
  
}
.follow{
  background:#fff;
  padding: 10px;
  margin: 10px;
  padding-bottom: 30px;
  padding-top: 10px;
  top: 10%;
  bottom: 50%;
}

/* Footer */
.footer {
  font-weight: bold;
  padding: 30px;
  text-align: center;
  background: #ddd;
}

@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>
  <center>
    <form action="homepage.php" method="POST">
<div class="header" id="section1">
  <img src="../image/logo.png" height="160" width="160">
  <h1><font size="" color="">WELCOME</font></h1>
  <p><font size="6">Maternal and Child Health Care</font></p><br>
  <h3 align="center">
   <a href="../login/login.php">LOGIN HERE</a></h3><br>
  <h3 align="center">
   <a href="../register/register.php">SIGN UP HERE</a></h3>
</div>
<div class="navbar">
    <a href="#section1"><b>Home</b></a>
    <a href="#section2"><b>About Us</b></a>
    <a href="#section3"><b>Contact Us</b></a>
</div>

<div id="section2">
  <div class="bg-image"></div>
  <div class="about">
    <div class="bg-text">
    <h1 align="center"><font size="9" color="blue"><u>ABOUT  US</u></font></h1><br>
    <p>Maternal and child health services are the foremost priorities of community health programmes.<br>
      According to Indian culture mother is the foundation of the family and children are the future of the country.</p><br>
    <p>It is a website for Maternal and children(under 5yr).<br>
       The approach addresses issues to social behaviour, infrastructure, skilled manpower, supportive supervision and quality services for of prenatal, antenatal and post natal care.</p><br>
    <p><font size="7" color="skyblue">We Include>></font><br>
      1. Health services<br>
         i) Maternal Health care<br>
         ii) Child Health Care(under 5yrs)<br><br>
      2. Government Projects<br>
         i) Yojana<br>
         ii) Child Vaccination</p><br>
     <ul><font size="7" color="skyblue">Our Objectives>></font><br>
        <li>To reduce maternal and childhood mortality and morbidity.</li>
        <li>Regulate fertility.</li>
        <li>Child survival.</li>
        <li>Promote and Protect health of mothers.</li>
        <li>To promote reproductive health.</li>
        <li>Ensure birth of healthy child.</li>
        <li>To ensure the birth of a healthy infant to every expectant mother.</li>
        <li>To promote the healthy Growth and Development of children.</li>
        <li>To identify health problems in mother and children.</li>
        <li>To prevent malnutrition in mothers and children.</li>
        <li>To educate the mothers on improvement of their own and their children's health.</li>
      </ul>  
  </div></div></div>
     
<div id="section3">

  <div class="bg-text1">
    <center><h1><font size="7" color="white"><u>Get In Touch</u></font></h1></center>
    <div class="contact">
    <form class="contact-form">
    <div class="form-group">
    <table>
    <tr>
      <td><b><font size="4" color="white">Name</font></b></td>
      <td><input type="text" name="Name" placeholder="name"></td>
    </tr>
    <tr>
      <td><b><font size="4" color="white">Email</font></b></td>
      <td><input type="email" name="Email" placeholder="email"></td>
    </tr>
     <tr>
      <td><b><font size="4" color="white">Contact</font></b></td>
      <td><input type="number" name="Contact" placeholder="contact"></td>
    </tr>
     <tr>
      <td><b><font size="4" color="white">Message</font></b></td>
      <td><textarea rows="2" name="Message" placeholder="your message"></textarea></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="submit" value="submit"></td>
    </tr>
    </table>
  </div>
   </form>
    </div>
      <div class="contact-info">
        <div class="follow"><font size="" color="black"><b>Address:</b><br>Main Street Colombo,Sri Lanka</font></div>
        <div class="follow"><font size="" color="black"><b>Contact:</b><br>0771753785</font></div>
        <div class="follow"><font size="" color="black"><b>Website:</b><br>www.mchcare.lk</font></div>
      </div></div></div>

       
  
<div class="footer">
  <h1><font size="" color="blue"><b>Thank You...</b></font></h1>
</div>
</form>
</center>
</body>
</html>

<?php
      include("../contact.php");
      ?>