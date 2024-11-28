<!DOCTYPE html>
<html>
<head>
	<title>View Notification</title>
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
body{
  background-image: url(../image/image99.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-size: cover;
  
}
</style>
</head>
<body>

	<center><h1><font size="" color="">View Notification</h1>

	<ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li>View Notification</li>
  </ul>
  </center>

</body>
</html>

<style>
  td
  {
    padding: 20px;
  }
</style>

<?php 
    
  include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM notification";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  

  if ($total !=0) 
       {
          ?>
            <center>
            <table>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Area</th>
            <th>Subject</th>
            <th>Notification</th>
            <th>Operation</th>
            </tr>
        <?php

           while ($row = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                   <td>" . $row['Id'] . "</td> 
                   <td>" . $row['Name'] . "</td> 
                   <td>" . $row['Area'] . "</td> 
                   <td>" . $row['Subject'] . "</td>
                   <td>" . $row['Notification'] . "</td> 
                   <td><a href='deletenotif.php?Id=$row[Id]' onclick='return checkdelete()'>Delete</a></td>
                </tr>";
            }
                                                                   
}
else
{
  echo "No Notification Found";
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