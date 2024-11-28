<!DOCTYPE html>
<html>
<head>
	<title>Admin Account</title>
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
  background-color: brown;
}
td
  {
  padding: 10px;
  }
.header{
   background-image: url(../image/image102.png);
  background-position: center;
  background-repeat: no-repeat;
  padding: 100px;
}
.xyz{
  color: white;
}
</style>
</head>
<body>
<center>
<div class="header"><h1>ADMIN ACCOUNT</h1></div>
  <ul class="breadcrumb">
  <li><a href="adminhomehome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="vaccount.php">View Account</a></li>
  <li>Admin Account</li>
  </ul>
  </center>
<div class="xyz">
<?php
  include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM adminaccount";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  
  if ($total !=0) 
  {
    ?>

   <center><table border="2">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
        <th>ContactNo</th>
        <th colspan="2">Operations</th>
      </tr>
    
    <?php
    while ($result = mysqli_fetch_assoc($data)) 
    {
      echo "<tr>
              <td>".$result['Id']."</td>
              <td>".$result['Name']."</td>
              <td>".$result['Password']."</td>
              <td>".$result['Email']."</td>
              <td>".$result['ContactNo']."</td>
              <td><a href='update.php?Id=$result[Id]&Name=$result[Name]&Password=$result[Password]&Email=$result[Email]&ContactNo=$result[ContactNo]'>Edit</a></td>
              <td><a href='delete.php?Id=$result[Id]' onclick='return checkdelete()'>Delete</a></td>
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
</div>
</body>
</html>