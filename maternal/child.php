<!DOCTYPE html>
<html lang="en">
<head>
  <title>child</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
    background-color: orange;
  }
  .header{
    font-weight: bold;
    font-size: 25px;
    color: white;
  }
  th{
    color: green;
  }
  td{
    color: white;
    padding: 20px;
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
  <div class="header">
<?php
session_start();
include("../dbconnection/connection.php");
error_reporting(0);
$userid=$_SESSION['Id'];
$userprofile=$_SESSION['cname'];
if ($userid==true) 
{
  
}
else
{
  header('location:vcaccount.php');
}

 $query="SELECT * FROM `cdetails` WHERE Id='$userid' && cname='$userprofile' ";
 $data=mysqli_query($conn, $query);
 $total=mysqli_num_rows($data);
      
  if ($total !=0) 
  {
     echo "WELCOME... ".$_SESSION['cname'];
   ?>
   </div>
   <br>
   <p align="center">
   <img src="../image/image95.jpg" height="20%" width="20%" align="center" vspace="" hspace="">
   </p><br>
  <table border="3">
  <tr>
  <th>Date</th>
  <th colspan="4"><font color="blue"><h2>Parents Identification</h2></th>
  <th colspan="6"><font color="blue"><h2>Birth Record</h2></th>
  <th colspan="7"><font color="blue"><h2>Health Record</h2></th>

  </tr>
  <tr>
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
      echo "<tr>
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
            </tr>";

    }
  }
else
{
  echo "no record found";
}

?>
</table>
<br><br><a href="vcaccount.php"><input type="submit" name="back" value="BACK"></a>
</center>
</body>
</html>