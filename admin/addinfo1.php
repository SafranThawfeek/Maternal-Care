<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
  input[type=text], select, textarea 
  {
  width: 100%;
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
  background-image: url(../image/image121.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 25px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 20px;
}
</style>
</head>
<body>
  <center><h1>ADD INFORMATION FOR MAMATA YOJANA</h1>
	<ul class="breadcrumb">
  <li><a href="homepage.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin page</a></li>
  <li><a href="vmamata.php">View Info(Mamata Yojana)</a></li>
  <li>Add Info(Mamata Yojana)</li>
  </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="bg-text">
   <form action="addinfo1.php" method="POST">
   	<table>
      <tr>
      <td><b>Conditionality</b></td>
      <td><input type="text" name="Conditionality" style="padding: 20px;"></td>
      </tr>
      <tr>
      <td><b>Primary Responsibility to ensure service</b></td>
      <td><input type="text" name="Responsibility" style="padding: 20px;"></td>
      </tr>
      <tr>
      <td><b>Means Of Verification</b></td>
      <td><input type="text" name="Verification" style="padding: 20px; width: 500px; "></td>
      </tr>
    </table>
   	 <input type="submit" name="ADD" value="ADD">
   </form>
<br>
<?php
  session_start();
  include("../dbconnection/connection.php");
  error_reporting(0);
  if (isset($_POST['ADD']))
  {
  $Conditionality=$_POST['Conditionality'];
  $Responsibility=$_POST['Responsibility'];
  $Verification=$_POST['Verification'];
  $query="INSERT into mamata VALUES('','$Conditionality','$Responsibility','$Verification')" ;

  if (empty($Conditionality) || empty($Responsibility) || empty($Verification)) {
      echo "<font size='4' color='skyblue'>Fill in Empty Fields";
      exit();
    }
  
  elseif (mysqli_query($conn, $query)) {
      echo "<script>alert('INFORMATION ADDED SUCCESSFULLy')</script>";
  ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/addinfo1.php">
  <?php
    }
    else{
      echo "<script>alert('Sorry!! INFORMATION NOT ADDED SUCCESSFULLy')";
    ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/addinfo1.php">
  <?php
 
    }
  }
?>
</center>
</div>
</body>
</html>