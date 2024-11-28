<!DOCTYPE html>
<html>
<head>
	<title>View Account</title>
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
}input[type=text],input[type=Password], select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  margin-top: 1px;
  margin-bottom: 1px;
  resize: vertical;
 }
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 35px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 25%;
  padding: 50px;
}
body{
  background-image: url(../image/image56.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>
<center><h1><font color="white">VIEW ACCOUNT</h1>
	<ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker Page</a></li>
  <li><font color="black">View Account</li>
  </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <form  action="vaccount1.php" method="POST">
    <div class="bg-text">
    <table>
        <tr>
            <td><b><font size="6" color="">Name</font></b></td>
            <td><input type="text" name="Name" placeholder="Enter name"></td>
        </tr>
        <tr>
            <td><b><font size="6" color="">Password</font></b></td>
            <td><input type="password" name="Password" placeholder="Enter password"></td>
        </tr>
   </table><br>
    <input type="submit" name="search" value="Search">
<br>
<?php
session_start();
include("../dbconnection/connection.php");
error_reporting(0);

  if (isset($_POST['search'])) 
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
     elseif (!preg_match("/^[a-zA-Z ]*$/", $Name)) 
    {
      echo "<font size='4' color='red'>Invalid Name";
      exit();
    }
     elseif ($total==1)
     {
      $_SESSION['Name']=$Name;
      $_SESSION['Password']=$Password;
      header("refresh:0;url=hworker.php"); 
      }
      else{
        echo "<font size='4' color='red'>Invalid Name or Password";
        exit();
      }
}

?>
</center>
</div>
</form>
</center>
</body>
</html>
