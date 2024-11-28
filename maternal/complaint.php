<!DOCTYPE html>
<html>
<head>
<title>Complaint-Box</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=text],input[type=number],input[type=email], select, textarea 
  {
  width: 20%;
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
  background-image: url(../image/image148.jpeg);
   background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>
  <center><h1><font size="" color="">Complaint-Box</h1>
  <ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/mlogin.php">Login</a></li>
  <li><a href="mfeatures.php">Maternal page</a></li>
  <li>Complaint-Box</li>
  </ul>
    <form action="complaint.php" method="post">
  
    <label for="name"><font size="" color="">Name</label><br>
    <input type="text" name="Name" placeholder="your name"><br>

    <label for="Area"><font size="" color="">Area</label><br>
    <input type="text" name="Area" placeholder="your Area name"><br>

    <label for="email">Email</label><br>
    <input type="email" name="Email" placeholder="Your email"><br>

    <label for="sub">Contact</label><br>
    <input type="number" name="Contact" placeholder="your contact no"><br>

    <label for="notice">Complaint</label><br>
    <textarea name="Complaint" placeholder="Write your complaint.." style="height: 100px;"></textarea><br>

    <input type="submit" value="submit" name="submit"><br><br>
</font>
</form>
</center>
</body>
</html>
<center>

<?php
session_start();
error_reporting(0);
include '../dbconnection/connection.php';
  if (isset($_POST['submit'])){

  $Name=$_POST['Name'];
  $Area=$_POST['Area'];
  $Email=$_POST['Email'];
  $Contact=$_POST['Contact'];
  $Complaint=$_POST['Complaint'];

  $query="INSERT into complain VALUES('','$Name','$Area','$Email','$Contact','$Complaint')" ;

  if (empty($Name) || empty($Area)|| empty($Email) || empty($Contact) || empty($Complaint)) {
      echo "<font size='4' color='green'>Fill in Empty Fields";
      exit();
    }
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z ]*$/", $Name)) {
      echo "<font size='4' color='red'>Invalid Email and Name";
      exit();
    }
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      echo "<font size='4' color='red'>Invalid Email";
      exit();
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
      echo "<font size='4' color='red'>Invalid Name";
      exit();
    }
    elseif (mysqli_query($conn, $query)) {
      echo "<script>alert('Complaint submitted successfully')</script>";
  ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/maternal/complaint.php">
  <?php
    }
    else{
      echo "<script>alert('Sorry!! Sending Complaint unsuccessfull')</script>";
    ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/maternal/complaint.php">
  <?php
}
}
?>