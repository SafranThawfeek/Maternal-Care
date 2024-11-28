<!DOCTYPE html>
<html>
<head>
  <title>View Contact Message</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
body{
  background-image: url(../image/image164.jpg);
  background-position: center;
  
  background-size: cover;
}
.header {
   font-size: 20px;
   color: black;
}
.header th{
  font-size: 30px;
  color: blue;
}
td{
  padding: 30px;
}
</style>
</head>
<body><br>
<center><h1><font size="6" color="blue">VIEW CONTACT MESSAGE</font></h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li>View Contact Message</li>
  </ul>
<br><br><br><br><br>
<div class="header">
<?php 
session_start();
 include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM contact";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  
 if ($total !=0) 
       {
          ?>
           <table border='4'>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Message</th>
            <th><font color="red">Operation</font></th>
            </tr>
        <?php

           while ($row = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                   <td>" . $row['Id'] . "</td>
                   <td>" . $row['Name'] . "</td>  
                   <td>" . $row['Email'] . "</td>
                   <td>" . $row['Contact'] . "</td>
                   <td>" . $row['Message'] . "</td>
                   <td><a href='deletecontact.php?Id=$row[Id]' onclick='return checkdelete()'>Delete</a></td>
                   </tr>";
            }
                                                                   
}
else
{
  echo "no Contact Message found";
}

?>
</table>
<script>
  function checkdelete()
  {
    return confirm('Are you sure??');
  }
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script></center>
</body>
</div>
</html>