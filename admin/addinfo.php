<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
  input[type=text], select, textarea 
  {
  width: 150%;
  padding: 3px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 3px;
  margin-bottom: 8px;
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
  background-image: url(../image/image1014.jpg);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 20px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 38%;
  padding: 10px;
  
}

</style>
</head>
<body>

	<form action="addinfo.php" method="post">
	<center><h1>ADD INFORMATION FOR IMMUNIZATION</h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin page</a></li>
  <li><a href="vimmunization.php">View information(Immunization)</a></li>
  <li>Add information(Immunization)</li>
  </ul><br><br><br><br><br><br><br><br><br><br><br>
<div class="bg-text">
<table>
	<tr>
	<td>Vaccine Name</td>
	<td><input type="text" name="Vaccine" style="padding: 20px;" required></td>
	</tr>
	<tr>
	<td>When to give</td>
  <td><input type="text" name="give" style="padding: 20px;" required></td>
	</tr>
  <tr>
	<td>Dose</td>
  <td><input type="text" name="Dose" style="padding: 20px;" required></td>
  </tr>
  <tr>
  <td>Route</td>
  <td><input type="text" name="Route" style="padding: 20px;" required></td>
  </tr>
  <tr>
  <td>Site</td>
  <td><input type="text" name="Site" style="padding: 20px;" required></td>
  </tr>
</table>	
	<br>
	<input type="submit" value="ADD" name="submit"><br>
  </div>
</form>
</body>
</html>

<?php
  include ('../dbconnection/connection.php');

  if (isset($_POST['submit']))
  {
  
  $Vaccine=$_POST['Vaccine'];
  $give=$_POST['give'];
  $Dose=$_POST['Dose'];
  $Route=$_POST['Route'];
  $Site=$_POST['Site'];

  $query="INSERT into immunization VALUES('','$Vaccine','$give','$Dose','$Route','$Site')" ;
  if (mysqli_query($conn, $query)) {
      echo "<script>alert('information successfully added')</script>";
  ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/addinfo.php">
  <?php
    }
    else{
      echo "<font size='4' color='red'>Sorry!! adding info is unsuccessfull";
    }
}

?>