<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  background-image: url(../image/image120.jpg);
  background-position: center;
  background-size: cover;
}
.header th{
   font-size: 25px;
   color: black;
   font-weight: bold;
}
 td{
    padding: 10px;
  }
</style>
</head>
<body>
  <center>
<h1><font color="white">MAMATA YOJANA</font></h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="#">View Information</a></li>
  <li>Mamata Yojana</li>
  </ul>
 <div class="header">
  <?php 
  session_start();
  include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM mamata";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  
  if ($total !=0) 
       {
          ?>
            
            <table border="4">
            <tr>
            <th>Id</th>
            <th>Conditionality</th>
            <th>Primary Responsibility to ensure service</th>
            <th>Means Of Verification</th>
            <th colspan="2"><font color="red">Operations</font></th>
            </tr>
        <?php

           while ($result = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                   <td>" . $result['Id'] . "</td> 
                   <td>" . $result['Conditionality'] . "</td> 
                   <td>" . $result['Responsibility'] . "</td> 
                   <td>" . $result['Verification'] . "</td> 
                   <td><a href='updatemamata.php?Id=$result[Id]&Conditionality=$result[Conditionality]&Responsibility=$result[Responsibility]&Verification=$result[Verification]'>Edit</a></td>
              <td><a href='deletemamata.php?Id=$result[Id]' onclick='return checkdelete()'>Delete</a></td>
            
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
<a href="addinfo1.php"><input type="submit" name="add" value="ADD INFORMATION"></a>
</center>
</body>
</html>