<!DOCTYPE html>
<html>
<head>
	<title> child account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=text], input[type=number], select, textarea
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
  padding: 10px 12px;
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
  background-image: url(../image/image133.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
 .bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 30px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 35%;
  padding: 40px;
}
</style>
</head>
<body>
  <br><center>
	<h1><font color="white">VIEW CHILD ACCOUNT</font></h1>
  <ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/mlogin.php">Login</a></li>
  <li><a href="mfeatures.php">Maternal Page</a></li>
  <li>View Child Account</li>
  </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <form action="vcaccount.php" method="POST">
  <div class="bg-text">
    <table>
    	<tr>
            <td><b><font size="6" color="">Id</font></b></td>
            <td><input type="number" name="Id" placeholder="Enter Id"></td>
        </tr>
        <tr>
            <td><b><font size="6" color="">Child Name</font></b></td>
            <td><input type="text" name="cname" placeholder="Enter child name"></td>
        </tr>
        
   </table><br>
	 <input type="submit" name="search" value="Search"><br>
<?php
  session_start();
  include("../dbconnection/connection.php");
  error_reporting(0);
  if (isset($_POST['search'])) 
   {
      $Id=$_POST['Id'];
      $cname=$_POST['cname'];
    
      $query="SELECT * FROM `cdetails` WHERE Id='$Id' && cname='$cname'";
      $data=mysqli_query($conn, $query);
      $total=mysqli_num_rows($data);

    if (empty($Id) || empty($cname)) {
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
     	$_SESSION['Id']=$Id;
      $_SESSION['cname']=$cname;
      
      header("refresh:0;url=child.php"); 
      }
      else{
        echo "<font size='4' color='red'>Invalid Id or Name";
        exit();
      }
  }

?>
</center>
</div>
</form>
</body>
</html>
