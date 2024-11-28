<!DOCTYPE html>
<html>
<head><title>maternal sign up</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=text],input[type=email],input[type=number], input[type=password], select, textarea 
  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 2px;
  margin-bottom: 3px;
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
body{
	background-image: url(../image/image174.jpg);
   background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  height: 100%;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 10px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 30%;
  padding: 30px;
}
</style>
</head>
<body><br><br><br>
<center><h1><b><font size="6" color="Black">MATERNAL SIGN UP</font></b></h1>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="bg-text">
<form action="maternalregister.php" method="post">
<table>
    <tr>
	<td><b><font size="4" color="">Name</font></b></td>
	<td><input type="text" name="Name" placeholder="Name"></td>
	</tr>
    <tr>
	<td><b><font size="4" color="">w/o</font></b></td>
	<td><input type="text" name="w/o" placeholder="Wife of"></td>
	</tr>
    
    <tr>
	<td><b><font size="4" color="">Area</font></b></td>
	<td><input type="text" name="Area" placeholder="Address"></td>
	</tr>
    <tr>
	<td><b><font size="4" color="">Email</font></b></td>
	<td><input type="email" name="Email" placeholder="email"></td>
	</tr>
    <tr>
	<td><b><font size="4" color="">Contact</font></b></td>
	<td><input type="number" name="Contact" placeholder="contact"></td>
	</tr>
</table>	
	<input type="submit" value="SUBMIT" name="submit"><br><br>
	<font size="4" color="">Already registered?<a href="../login/mlogin.php"><font size="4" color="blue">LOGIN</a></font>
</form>
<br><br>

<?php
	include '../dbconnection/connection.php';
	if (isset($_POST['submit'])){

	$Name=$_POST['Name'];
	$wo=$_POST['w/o'];
	$Area=$_POST['Area'];
	$Email=$_POST['Email'];
	$Contact=$_POST['Contact'];

	$query="INSERT into maternalaccount VALUES('','$Name','$wo','$Area','$Email','$Contact')" ;

	if (empty($Name) || empty($wo)  || empty($Area) || empty($Email) || empty($Contact)) {
    	echo "<font size='4' color='skyblue'>FILL IN EMPTY FIELDS";
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
    	echo "<script>alert('Sign Up successfully completed')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/home/homepage.php">
	<?php
    }
    else{
    	echo "<font color='red'>Sorry!! Sign Up is unsuccessfull";
    }
  }
?>
</div>
</body>
</center>
</html>
