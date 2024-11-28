<!DOCTYPE html>
<html>
<head>
	<title>HW Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
body{
  background-image: url(../image/image64.jpg);
  background-color: black;
  background-attachment: fixed;
  background-repeat: no-repeat;
}
.header p{
  padding-left: 70%;
}
.header h1{
  padding-left: 70%;
  padding-top: 1%;
  color: white;
}
/* Add styles to the form container */
.container {
  position: absolute;
  right: 65%;
  top: 10%;
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
  <br><br><br><br>
  <div class="header">
    <p><img src="../image/image144.jpg" height="80%" width="80%"></p>
    <h1>HEALTH WORKER LOGIN</h1></div>
   <center>   
   <form  action="hwlogin.php" method="POST" class="container">
    <h1>Login here</h1>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your Name" name="Name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    <button type="submit" name="login" class="btn">Login</button><br><br>

    <p class="message">Not registered?<a href="../register/hwregister.php">SIGN UP</a></p>
          
<?php
  session_start();
  include("../dbconnection/connection.php");
  error_reporting(0);
  if (isset($_POST['login'])) 
   {
      $Name=$_POST['Name'];
      $Password=$_POST['Password'];
    
      $query="SELECT * FROM `hworkeraccount` WHERE Name='$Name' && Password='$Password' ";
      $data=mysqli_query($conn, $query);
      $total=mysqli_num_rows($data);

      if (empty($Name) || empty($Password)) {
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
      header("refresh:0;url=../hworker/hwfeatures.php"); 
      }
      else{
        echo "<font size='4' color='red'>Invalid Name or Password";
        exit();
      }
}
?>
</form>
</center>
</body>
</html>

