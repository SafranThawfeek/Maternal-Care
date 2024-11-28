<!DOCTYPE html>
<html lang="en">
<head>
  <title>maternal details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
  background-image: url(../image/image79.jpg);
  background-position: center;
  background-size: cover;
  }
  th{
    font-weight: bold;
    font-size: 25px;
    color: orange;
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
  header('location:vmaternaldetails.php');
}
 $query="SELECT * FROM `mdetails` WHERE Area='$userarea' ";
 $data=mysqli_query($conn, $query);
 $total=mysqli_num_rows($data);
      
  if ($total !=0) 
  {

   ?>
   <br>
  <p align="center">
   <img src="../image/image88.jpg" height="20%" width="20%" align="center" vspace="" hspace="">
  </p>
    <br>
<center> <table border="4">
      <tr>
        <th colspan="8"><font color="blue"><h2>Maternal Identification</h2></th>
        <th colspan="5"><font color="blue"><h2>Pregnancy Record</h2></th>
        <th colspan="4"><font color="blue"><h2>Institutional Identification</h2></th>
        <th colspan="7"><font color="blue"><h2>Maternal Health Record</h2></th>
        <th colspan="2"><font color="red"><h2>Operations</h2></th>
       </tr><tr>
        <th>Registration Date</th>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>W/O</th>
        <th>Area</th>
        <th>Email</th>
        <th>Contact</th>

        <th>Date of last period</th>
        <th>Expected date of delivery</th>
        <th>No of Pregnancies/Live births</th>
        <th colspan="2">Last Delivery conducted at:</th>

        <th>Anganwadi/Block</th>
        <th>CHC/Clinic</th>
        <th>PHC/Town</th>
        <th>Hospital Address</th>

        <th>Check-up Date</th>
        <th>Month</th>
        <th>ANC</th>
        <th>BP</th>
        <th>Weight</th>
        <th>TT</th>
        <th>Iron</th>        
        </tr>
    <?php

    while ($result = mysqli_fetch_assoc($data)) 
    {
      echo "<tr></tr>
            <tr>
              <td>".$result['Date']."</td>
              <td>".$result['Id']."</td>
              <td>".$result['Name']."</td>
              <td>".$result['Age']."</td>
              <td>".$result['wo']."</td>
              <td>".$result['Area']."</td>
              <td>".$result['Email']."</td>
              <td>".$result['Contact']."</td>
              <td>".$result['period']."</td>
              <td>".$result['delivery']."</td>
              <td>".$result['Pregnancies']."</td>
              <td>".$result['destination']."</td>
              <td>".$result['person']."</td>
              <td>".$result['anb']."</td>
              <td>".$result['CHC']."</td>
              <td>".$result['PHC']."</td>
              <td>".$result['Hospital']."</td>
              <td>".$result['cdate']."</td>
              <td>".$result['Month']."</td>
              <td>".$result['ANC']."</td>
              <td>".$result['BP']."</td>
              <td>".$result['Weight']."</td>
              <td>".$result['TT']."</td>
              <td>".$result['Iron']."</td>
              <td><a href='mhreport.php?Id=$result[Id]&Date=$result[Date]&Name=$result[Name]&Area=$result[Area]&Month=$result[Month]&ANC=$result[ANC]&BP=$result[BP]&Weight=$result[Weight]&TT=$result[TT]&Iron=$result[Iron]'>Submit Health Report</a></td>
            
            </tr>";
    }
  }
else
{
  echo "no record found";
}
?>
</table>
<br><br><a href="vmaternaldetails.php"><input type="submit" name="back" value="BACK"></a>
</center>
</body>
</html>

