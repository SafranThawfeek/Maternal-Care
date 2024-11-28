<!DOCTYPE html>
<html>
<head>
	<title>HW Account</title>
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
}
td
 {
  padding: 10px;
 }
body{
  background-color: skyblue;
}
.header{
  background-image: url(../image/image139.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
  padding: 100px;
}
</style>
</head>
<body>

	<center>
   <div class="header"><h1><font color="blue">HEALTH WORKER ACCOUNT</font></h1></div> 
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="vaccount.php">View Account</a></li>
  <li>Health worker Account</li>
  </ul>
  </center>

<?php
  include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM hworkeraccount";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  

  if ($total !=0) 
  {
    ?>

   <center> <table border="2">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Password</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact</th>
        <th>AdhaarNo</th>
        <th colspan="2">Operations</th>
      </tr>
    
    <?php

    while ($result = mysqli_fetch_assoc($data)) 
    {
      echo "<tr>
              <td>".$result['Id']."</td>
              <td>".$result['Name']."</td>
              <td>".$result['Password']."</td>
              <td>".$result['Address']."</td>
              <td>".$result['Email']."</td>
              <td>".$result['Contact']."</td>
              <td>".$result['AdhaarNo']."</td>
              <td><a href='update1.php?Id=$result[Id]&Name=$result[Name]&Password=$result[Password]&Address=$result[Address]&Email=$result[Email]&Contact=$result[Contact]&AdhaarNo=$result[AdhaarNo]'>Edit</a></td>
              <td><a href='delete1.php?Id=$result[Id]' onclick='return checkdelete()'>Delete</a></td>
            </tr>";


    }
  }
else
{
  echo "no record found";
}
?>
</table>

<script>
  function checkdelete()
  {
    return confirm('Are you sure??');
  }
</script>
</center>
</body>
</html>