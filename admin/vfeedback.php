<!DOCTYPE html>
<html>
<head>
  <title>View Feedback</title>
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
  background-image: url(../image/image154.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.header th{
  font-size: 25px;
  color: blue;
}
.header{
  font-size: 20px;
}
td{
  padding: 20px;
}
</style>
</head>
<body>
<center><h1><font size="6" color="">VIEW FEEDBACK</font></h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li>View Feedback</li>
  </ul>
<br><br>
<div class="header">
<?php 
  include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM feedback";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  

  if ($total !=0) 
       {
          ?>
    
            <table border='4'>
            <tr>
            <th>Id</th>
            <th>UserType</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Feedback</th>
            <th>Suggestions</th>
            <th><font color="red">Operation</font></th>
            </tr>
        <?php

           while ($row = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                   <td>" . $row['Id'] . "</td>
                   <td>" . $row['usertype'] . "</td>
                   <td>" . $row['name'] . "</td>  
                   <td>" . $row['email'] . "</td>
                   <td>" . $row['phone'] . "</td>
                   <td>" . $row['feedback'] . "</td>
                   <td>" . $row['suggestions'] . "</td>
                   <td><a href='deletefeed.php?Id=$row[Id]' onclick='return checkdelete()'>Delete</a></td>
                   </tr>";
            }
                                                                   
}
else
{
  echo "no feedback found";
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