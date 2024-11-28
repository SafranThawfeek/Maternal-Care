<!DOCTYPE html>
<html>
<head><title>healthworker register</title>
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
body{
    background-image: url(../image/image175.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 200%;
    width: 100%;
    }
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 15px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 53%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 25%;
  padding: 40px;
  
}
</style>
</head>
<body>
    <br><br><center> 
 	<h1><b><font size="6" color="">HEALTH WORKER SIGN UP</font></b></h1>
  <form action="hwregister.php" method="post">
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
            <td><b><font size="4" color="">Area</td>
            <td><input type="text" name="Address" placeholder="Address"></td>
       </tr>
        <tr>
            <td><b><font size="4" color="">Email</font></b></td>
            <td><input type="email" name="Email" placeholder="email"></td>
        </tr>
         <tr>
            <td><b><font size="4" color="">Contact</font></b></td>
            <td><input type="number" name="Contact" placeholder="contact"></td>
        </tr>
        <tr>
            <td><b><font size="4" color="">AdhaarNo</td>
            <td><input type="text" name="AdhaarNo" placeholder="Adhaar"></td>
       </tr>
    </table>
    <input type="submit" value="submit" name="submit"><br><br>
    <font size="4" color="">Already Registered?<a href="../login/hwlogin.php"><font size="4" color="blue">LOGIN</a><br><br>
  <?php
  include '../dbconnection/connection.php';
  error_reporting(0);
  if (isset($_POST['submit'])){

  $Name=$_POST['Name'];
  $Password=$_POST['Password'];
  $Address=$_POST['Address'];
  $Email=$_POST['Email'];
  $Contact=$_POST['Contact'];
  $AdhaarNo=$_POST['AdhaarNo'];

  $query="INSERT into hworkeraccount VALUES('','$Name','$Password','$Address' ,'$Email','$Contact','$AdhaarNo')" ;

  if (empty($Name) || empty($Password) || empty($Address) || empty($Email) || empty($Contact) || empty($AdhaarNo)) {
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
      echo "<script>alert('SIGN UP successfully completed')</script>";
  ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/home/homepage.php">
  <?php
    }
    else{
      echo "<font color='red'>Sorry!! SIGN UP is unsuccessfull";
    }
}

?>
</div>
</center>
</form>	
</body>
</html>


