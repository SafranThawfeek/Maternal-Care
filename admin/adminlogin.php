<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("../image/image67.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  height: 100%;

  /* Center and scale the image nicely */ 
}
.header h1{
  padding-right: 40%;
}
/* Add styles to the form container */
.container {
  position: absolute;
  right: 55%;
  top: 15%;
  margin: 20px;
  max-width: 400px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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
<div class="bg-img"><center>
  <br><br><br>
  <div class="header"><h1>ADMIN LOGIN</h1></div>
  <form  action="adminlogin.php" method="POST" class="container">
    <h1>Login here</h1>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your Name" name="Name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    <button type="submit" name="login" class="btn">Login</button><br><br>
  
    <p class="message">Not registered?<a href="adminregister.php">SIGN UP</a></p>

<?php
  session_start();
  error_reporting(0);
   include("../dbconnection/connection.php");
  if (isset($_POST['login'])) 
   {
      $Name=$_POST['Name'];
      $Password=$_POST['Password'];
    
      $query="SELECT * FROM `adminaccount` WHERE Name='$Name' && Password='$Password' ";
      $data=mysqli_query($conn, $query);
      $total=mysqli_num_rows($data);
      
      if (empty($Name) || empty($Password))
       {
      echo "<font size='4' color='green'>Fill in Empty Fields";
      exit();
       }
       elseif (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
      echo "<font size='4' color='red'>Invalid Name";
      exit();
    }
      elseif ($total==1) 
      {
      $_SESSION['Name']=$Name;
      $_SESSION['Password']=$Password;
      header("refresh:0;url=adfeatures.php"); 
      exit();
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