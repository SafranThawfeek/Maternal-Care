<!DOCTYPE html>
<html>
<head>
<title>Admin Registration</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=text],input[type=password],input[type=email],input[type=number], select, textarea 
  {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 2px;
  margin-bottom: 4px;
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
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 15px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 26%;
  padding: 40px;
}
body{
  background-image: url(../image/image176.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body><form method="POST" action="adminregister.php">
<br><br><br>
<center><h1><b><font size="6" color="white">ADMIN &nbsp; SIGN UP</font></b></h1>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
<div class="bg-text">
<table>
		<tr>
			<td><b><font size="4" color="">Name</font></b></td>
			<td><input type="text" name="Name" placeholder="name"></td>
		</tr>
		<tr>
			<td><b><font size="4" color="">Password</font></b></td>
			<td><input type="password" name="Password" placeholder="password"></td>
		</tr>
		<tr>
			<td><b><font size="4" color="">Email</font></b></td>
			<td><input type="text" name="Email" placeholder="email"></td>
		</tr>
    <tr>
			<td><b><font size="4" color="">ContactNo</font></b></td>
			<td><input type="text" name="ContactNo" placeholder="contact"></td>
		</tr>
	</table>
	<br>
    <input type="submit" value="submit" name="submit"><br><br>
    <font size="4" color="">Already Registered?
    <a href="adminlogin.php"><font size="4" color="white">LOGIN</a><br>

<?php
	include '../dbconnection/connection.php';
	error_reporting(0);
	if (isset($_POST['submit']))
	{
   
	$Name=$_POST['Name'];
	$Password=$_POST['Password'];
	$Email=$_POST['Email'];
	$ContactNo=$_POST['ContactNo'];

    $query="INSERT into adminaccount VALUES('','$Name','$Password','$Email','$ContactNo')" ;

	if (empty($Name) || empty($Password) || empty($Email) || empty($ContactNo)) {
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
    	echo "<script>alert('Registration successfully completed')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/adminhome.php">
	<?php
    }
    else{
    	echo "<font size='4' color='red'>Sorry!! Registration is unsuccessfull";
    }
}
?>
</center>
</div>
</form>
</body>
</html>
