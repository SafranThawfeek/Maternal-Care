<!DOCTYPE html>
<html>
<head>
  <title>View Complaint</title>
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
#section {
  height: 700px;
  padding-top: 50px;
  padding-bottom: 50px;
}
body{
  background-image: url("../image/image147.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.header {
   font-size: 30px;
   color: orange;
}
.header th{
  font-size: 35px;
  color: blue;
}
td{
  padding: 20px;
}
</style>
</head>
<body><br>
  
<center><h1><font size="6" color="black">VIEW COMPLAINT</font></h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li>View Complaint</li>
  </ul>
<br><br>
<div class="header">
<?php 
session_start();
 include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM complain";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  
 if ($total !=0) 
       {
          ?>
    
            <table border="4">
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Area</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Complaint</th>
            <th><font color="red">Operation</font></th>
            </tr>
        <?php

           while ($row = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                   <td>" . $row['Id'] . "</td>
                   <td>" . $row['Name'] . "</td> 
                   <td>" . $row['Area'] . "</td> 
                   <td>" . $row['Email'] . "</td>
                   <td>" . $row['Contact'] . "</td>
                   <td>" . $row['Complaint'] . "</td>
                   <td><a href='deletecomplaint.php?Id=$row[Id]' onclick='return checkdelete()'>Delete</a></td>
                   </tr>";
            }
                                                                   
}
else
{
  echo "no Complaint found";
}

?>
</table>
<script>
  function checkdelete()
  {
    return confirm('Are you sure??');
  }
</script>
</div>
</body>
</html>
