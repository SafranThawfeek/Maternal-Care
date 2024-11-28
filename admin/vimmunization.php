<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
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
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 20px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
body{
  background-image: url(../image/image1013.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.header th{
 font-size: 20px;
 color: black;
 font-weight: bold;
}
 td{
    padding: 20px;
  }

</style>
</head>
<body>
  <center>
<h1>IMMUNIZATION</h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="#">View Information</a></li>
  <li>IMMUNIZATION</li>
  </ul>
 <div class="header">
  <?php 
  session_start();
  include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM immunization";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  
  if ($total !=0) 
       {
          ?>
            
            <center>
            <table border="4">
            <tr>
            <th>Id</th>
            <th>Vaccine</th>
            <th>When to give</th>
            <th>Dose</th>
            <th>Route</th>
            <th>Site</th>
            <th colspan="2"><font color="red">Operations</font></th>
            </tr>
        <?php

           while ($result = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                   <td>" . $result['Id'] . "</td>
                   <td>" . $result['Vaccine'] . "</td> 
                   <td>" . $result['give'] . "</td> 
                   <td>" . $result['Dose'] . "</td>
                   <td>" . $result['Route'] . "</td>
                   <td>" . $result['Site'] . "</td>
                   <td><a href='updateimmunization.php?Id=$result[Id]&Vaccine=$result[Vaccine]&give=$result[give]&Dose=$result[Dose]&Route=$result[Route]&Site=$result[Site]'>Edit</a></td>
                   <td><a href='deleteimmunization.php?Id=$result[Id]' onclick='return checkdelete()'>Delete</a></td>
                </tr>";
       }
                                                                   
}
else
{
  echo "No Information Found";
}

?>
</table>
<script>
  function checkdelete()
  {
    return confirm('Are you sure??');
  }
</script>
</div><br><br>
<a href="addinfo.php"><input type="submit" name="add" value="ADD INFORMATION"></a>
</center>
</body>
</html>

