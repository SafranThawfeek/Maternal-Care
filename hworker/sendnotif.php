<!DOCTYPE html>
<html>
<head>
<title>Send Notification</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=text], select, textarea 
  {
  width: 20%;
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
  background-image: url(../image/image59.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  color: white;
}
</style>
</head>
<body>
  <center><h1><font size="" color="">SEND NOTIFICATION</h1>
	<ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker page</a></li>
  <li><font color="black">Send Notification</font></li>
  </ul>
    <form action="sendnotif.php" method="post">
  
	  <label for="name"><font size="" color="">Name</label><br>
    <input type="text" name="Name" placeholder="your name"><br>

    <label for="area">Area</label><br>
    <input type="text" name="Area" placeholder="your area name"><br>
  
    <label for="sub">Subject</label><br>
    <input type="text" name="Subject" placeholder="subject.."><br>

	  <label for="notice">Notification</label><br>
    <textarea name="Notification" placeholder="Write something" style="height: 100px;"></textarea><br>

    <input type="submit" value="Send" name="send"><br><br>
</font>
</form>
</center>
</body>
</html>
<center>

<?php
  include '../dbconnection/connection.php';
  if (isset($_POST['send'])){

  $Name=$_POST['Name'];
  $Area=$_POST['Area'];
  $Subject=$_POST['Subject'];
  $Notification=$_POST['Notification'];

  $query="INSERT into notification VALUES('','$Name','$Area','$Subject','$Notification')" ;

  if (empty($Name) || empty($Area) || empty($Subject) || empty($Notification)) {
      echo "<font size='4' color='skyblue'>Fill in Empty Fields";
      exit();
    }
  
    elseif (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
      echo "<font size='4' color='red'>Invalid Name";
      exit();
    }
    elseif (mysqli_query($conn, $query)) {
      echo "<script>alert('Notification sent successfully')</script>";
  ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/hworker/sendnotif.php">
  <?php
    }
    else{
      echo "<script>alert('Sorry!! Sending Notification is unsuccessfull')";
    ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/hworker/sendnotif.php">
  <?php
 
    }
}
   
?>
</center>