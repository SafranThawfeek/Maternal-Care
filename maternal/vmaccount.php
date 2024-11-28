<!DOCTYPE html>
<html>
<head>
	<title>maternal account</title>
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
  background-color: purple;
  background-image: url(../image/image89.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
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
  padding: 30px;
}
</style>
</head>
<body>
  <br><br><center>
	<h1>VIEW MATERNAL ACCOUNT</h1>
	<ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/mlogin.php">Login</a></li>
  <li><a href="mfeatures.php">Maternal Page</a></li>
  <li>View Maternal Account</li>
  </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <form action="vmaccount.php" method="POST">
  <div class="bg-text">
    <table>
    	<tr>
            <td><b><font size="6" color="">Id</font></b></td>
            <td><input type="number" name="Id" placeholder="Enter Id"></td>
        </tr>
        <tr>
            <td><b><font size="6" color="">Name</font></b></td>
            <td><input type="text" name="Name" placeholder="Enter name"></td>
        </tr>
        
   </table>
	 <input type="submit" name="search" value="Search"><br>
<?php
  session_start();
  include("../dbconnection/connection.php");
  error_reporting(0);
  if (isset($_POST['search'])) 
   {
   	  $Id=$_POST['Id'];
      $Name=$_POST['Name'];
      
      $query="SELECT * FROM `mdetails` WHERE Id='$Id'  && Name='$Name'";
      $data=mysqli_query($conn, $query);
      $total=mysqli_num_rows($data);

    if (empty($Id) || empty($Name)) {
      echo "<font size='4' color='skyblue'>Fill in Empty Fields";
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
      $_SESSION['Name']=$Name;
     
      header("refresh:0;url=maternal.php"); 
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
</body>
</html>
