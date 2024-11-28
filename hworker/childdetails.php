<!DOCTYPE html>
<html lang="en">
<head>
  <title>cdetails</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body{
  background-image: url(../image/image97.jpg);
  background-position: center;
  background-size: cover;
  }
  th{
    font-weight: bold;
    font-size: 25px;
    color: green;
  }
  td{
    padding: 20px;
    font-size: 20px;
    color: black;
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
</style>
</head>
<body>
<center><br>
<?php
session_start();
include("../dbconnection/connection.php");
error_reporting(0);
$userarea=$_SESSION['Area'];
if ($userarea==true) 
{
  
}
else
{
  header('location:vchilddetails.php');
}

 $query="SELECT * FROM `cdetails` WHERE Area='$userarea' ";
 $data=mysqli_query($conn, $query);
 $total=mysqli_num_rows($data);

 if ($total !=0) 
  {

  ?>
  <br>
<center> 
<table border="4">
<tr>
  <th>Date</th>
  <th colspan="4"><font color="blue"><h2>Parents Identification</h2></th>
  <th colspan="6"><font color="blue"><h2>Birth Record</h2></th>
  <th colspan="7"><font color="blue"><h2>Health Record</h2></th>
  <th colspan="2"><font color="red"><h2>Operations</h2></th>
</tr><tr>
  <th></th>
  <th>Id</th>
  <th>Mother Name</th>
  <th>Father Name</th>
  <th>Area</th>
  
  <th>Child's Name</th>
  <th>Date Of Birth</th>
  <th>gender</th>
  <th>Birth Weight</th>
  <th>Birth Registration No</th>
  <th>Hospital Address</th>

  <th>Date of Immunization</th>
  <th>Month</th>
  <th>Weight of Child</th>
  <th>Vaccine Name</th>
  <th>Expected date to come and take vaccine</th>
  <th>Actual Date of taking vaccine</th>
  <th>Any Illness??</th>
  </tr>

  <?php

    while ($result = mysqli_fetch_assoc($data)) 
    {
      echo "<tr></tr>
           <tr>
              <td>".$result['Date']."</td>
              <td>".$result['Id']."</td>
              <td>".$result['mname']."</td>
              <td>".$result['fname']."</td>
              <td>".$result['Area']."</td>
              <td>".$result['cname']."</td>
              <td>".$result['DOB']."</td>
              <td>".$result['gender']."</td>
              <td>".$result['bw']."</td>
              <td>".$result['reg']."</td>
              <td>".$result['Hospital']."</td>
              <td>".$result['vdate']."</td>
              <td>".$result['Month']."</td>
              <td>".$result['Weight']."</td>
              <td>".$result['vname']."</td>
              <td>".$result['Expected']."</td>
              <td>".$result['Actual']."</td>
              <td>".$result['Illness']."</td>
              <td><a href='chreport.php?Id=$result[Id]&cname=$result[cname]&vdate=$result[vdate]&Month=$result[Month]&Weight=$result[Weight]&vname=$result[vname]&Expected=$result[Expected]&Actual=$result[Actual]&Illness=$result[Illness]'>Submit Health Report</a></td>
            </tr>";


    }
  }
else
{
  echo "no record found";
}
?>
</table>
<br><br><a href="vchilddetails.php"><input type="submit" name="back" value="BACK"></a>
</center>
</body>
</html>

