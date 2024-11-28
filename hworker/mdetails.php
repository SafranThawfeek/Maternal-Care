<!DOCTYPE html>
<html>
<head>
<title>mdetails</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
*{
  box-sizing: border-box;
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
input[type=text],input[type=button],input[type=email],input[type=number], input[type=password], input[type=date], select, textarea 
  {
  width: %;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 2px;
  margin-bottom: 3px;
  resize: vertical;
 }
 input[type=submit],input[type=button] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit],input[type=button]:hover {
  background-color: #45a049;
}
body{
	background-image: url(../image/image184.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.container{
  background-image: url(../image/image89.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  width: 50%;
  font-weight: bold;
}
</style>
</head>
<body>
	<center><h1><b><font size="6" color="white">MATERNAL REGISTRATION</font></b></h1>
	<ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker Page</a></li>
  <li>Register Maternal</li>
  </ul>
  <form action="mdetails.php" method="post">
<div class="container">
<table>
<tr><td><h2>Maternal Identification</h2></td></tr>
<tr>
  <td>Registration Date</td>
  <td><input type="date" name="Date" required></td>
</tr>
<tr>
  <td>Name</td>
  <td><input type="text" name="Name" required></td>
</tr><br>
<tr>
  <td>Age</td>
  <td><input type="number" name="Age" required></td>
</tr><br>
<tr>
  <td>W/O</td>
  <td><input type="text" name="wo" required></td>
</tr>
<tr>
  <td>Address</td>
  <td><input type="text" name="Area" required></td>
</tr><br>
<tr>
  <td>E-mail</td>
  <td><input type="email" name="Email" required></td>
</tr><br>
<tr>
  <td>Contact</td>
  <td><input type="number" name="Contact" required></td>
</tr>
</table>
<table>
<tr>
  <td><h2>Pregnancy Record</h2></td>
</tr>
<tr>
  <td>Date Of last period</td>
  <td><input type="date" name="period" required></td>
</tr><br>
<tr>
  <td>Expected date of delivery</td>
  <td><input type="date" name="delivery" required></td>
</tr><br>
<tr>
  <td>No of Pregnancies/Live births</td>
  <td><input type="text" name="Pregnancies" required></td>
</tr><br>
<tr>
  <td>Last delivery conducted at:</td>
</tr><br>
<tr>
  <td>
    <input type="radio" name="destination" value="Institution">Institution
    <input type="radio" name="destination" value="Home">Home</td>
</tr><br>
<tr>
  <td>
    <input type="radio" name="person" value="Trained person">Trained person
    <input type="radio" name="person" value="Untrained person">Untrained person</td>
</tr>
</table>
<table>
<tr>
<td><h2>Institutional Identification</h2></td>
</tr>
<tr>
  <td>Anganwadi/Block</td>
  <td><input type="text" name="anb" required></td>
</tr><br>
<tr>
  <td>CHC/Clinic</td>
  <td><input type="text" name="CHC" required></td>
</tr><br>
<tr>
  <td>PHC/Town</td>
  <td><input type="text" name="PHC" required></td>
</tr><br>
<tr>
  <td>Hospital Address</td>
  <td><input type="text" name="Hospital" required></td>
</tr>
</table>
<table>
<tr>
<td><h2>Health Report</h2></td>
</tr>
<tr>
  <td>Check-up Date</td>
  <td><input type="date" name="cdate" required></td>
</tr>
<tr>
  <td>Continuing Month</td>
  <td><input type="text" name="Month" required></td>
</tr>
<tr>
  <td>AnteNatal Check-up</td>
  <td><input type="text" name="ANC" required></td>
</tr>
<tr>
  <td>Blood Pressure</td>
  <td><input type="text" name="BP" required></td>
</tr>
<tr>
  <td>Weight</td>
  <td><input type="text" name="Weight" required></td>
</tr>
<tr>
  <td>T.T. Injection</td>
  <td><input type="text" name="TT" required></td>
</tr>
<tr>
  <td>Iron Tablets</td>
  <td><input type="text" name="Iron" required></td>
</tr>
</table><br><br>
<input type="submit" value="SUBMIT" name="submit">
<br><br><br>
<?php
include '../dbconnection/connection.php';
  if (isset($_POST['submit'])){

  $Date=$_POST['Date'];
  $Name=$_POST['Name'];
  $Age=$_POST['Age'];
  $wo=$_POST['wo'];
  $Area=$_POST['Area'];
  $Email=$_POST['Email'];
  $Contact=$_POST['Contact'];
  $period=$_POST['period'];
  $delivery=$_POST['delivery'];
  $Pregnancies=$_POST['Pregnancies'];
  $destination=$_POST['destination'];
  $person=$_POST['person'];
  $anb=$_POST['anb'];
  $CHC=$_POST['CHC'];
  $PHC=$_POST['PHC'];
  $Hospital=$_POST['Hospital'];
  $cdate=$_POST['cdate'];
  $Month=$_POST['Month'];
  $ANC=$_POST['ANC'];
  $BP=$_POST['BP'];
  $Weight=$_POST['Weight'];
  $TT=$_POST['TT'];
  $Iron=$_POST['Iron'];
  
  $query="INSERT into mdetails VALUES('','$Date','$Name','$Age','$wo','$Area' ,'$Email','$Contact','$period','$delivery','$Pregnancies','$destination','$person','$anb','$CHC','$PHC','$Hospital','$cdate','$Month','$ANC','$BP','$Weight','$TT','$Iron')" ;

  if (empty($Date) ||empty($Name) || empty($Age)|| empty($wo) ||  empty($Area) || empty($Email) || empty($Contact)|| empty($period)|| empty($delivery)|| empty($Pregnancies)|| empty($destination)|| empty($person)|| empty($anb)|| empty($CHC)|| empty($PHC)|| empty($Hospital) || empty($cdate) || empty($Month) || empty($ANC) || empty($BP) || empty($Weight) || empty($TT) || empty($Iron)) {
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
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/hworker/mdetails.php">
  <?php
    }
    else{
      echo "<font color='red'>Sorry!! Registration is unsuccessfull";
    }
  }
?>
</div>
</form>
</center> 
</body>
</html>


