<!DOCTYPE html>
<html>
<head>
	<title>M Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0px;
  font-family: Arial, Helvetica, sans-serif;
}*{
  box-sizing: border-box;
}
body{
  background-image: url(../image/image65.jpg);
  background-color: black;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
.header p{
  padding-left: 65%;
}
.header h1{
  padding-left: 65%;
  color: white;
}
/* Add styles to the form container */
.container {
  position: absolute;
  right: 65%;
  top: 15%;
  margin: 20px;
  max-width: 400px;
  padding: 16px;
  background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
</style>
</head>
<body> 
<div class="bg-img">
<center><br><br><br>
<div class="header">
  <p><img src="../image/image88.jpg" height="70%" width="70%"></p>
  <h1>MATERNAL &nbsp;LOGIN</h1></div>

  <form action="mlogin.php" method="POST" class="container">
    <h1>Login here</h1>
    <label for="Id"><b>ID</b></label>
    <input type="number" placeholder="Enter Id" name="Id" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your Name" name="Name" required>

    <button type="submit" name="login" class="btn">Login</button><br><br>
  
    <p class="message">Not registered?<a href="../register/maternalregister.php">SIGN UP</a></p>
<?php
   session_start();
   error_reporting(0);
   include("../dbconnection/connection.php");
  if (isset($_POST['login'])) 
   {
      $Id=$_POST['Id'];
      $Name=$_POST['Name'];
      
      $query="SELECT * FROM `mdetails` WHERE Id='$Id' && Name='$Name'";
      $data=mysqli_query($conn, $query);
      $total=mysqli_num_rows($data);

     if (!preg_match("/^[a-zA-Z ]*$/", $Name)) 
      {
      echo "<font size='4' color='red'>Invalid Name";
      exit();
      }

     elseif ($total==1)
     {
      $_SESSION['Id']=$Id;
      $_SESSION['Name']=$Name;      
      header("refresh:0;url=../maternal/mfeatures.php"); 
     }
     else
     {
      echo "<font size='4' color='red'>Invalid Name or Password";
      exit();
     }
   }
?>
</form>
</center>
</div>
</body>
</html> 




