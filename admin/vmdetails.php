<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style>
  <meta name="viewport" , initial-scale=1">
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
  body{
      background-image: url(../image/image300.jpg);
      background-size: cover;
      color: white;
    }
  th{
      color: blue;
      font-weight: bold;
      font-size: 25px;
    }
  td
  {
    padding: 20px;
    color: black;
    font-weight: bold;
    font-size: 20px;
  }
  ul.breadcrumb {
  padding: 10px 15px;
  list-style: none;
  background-color: ;
}
ul.breadcrumb li {
  display: inline;
  font-size: 20px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: white;
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
</style>
</head>
<body>
<center><h1><font size="" color="white">MATERNAL DETAILS</h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php"><font size="" color="black">Home</font></a></li>
  <li><a href="adminlogin.php"><font size="" color="black">Login</font></a></li>
  <li><a href="adfeatures.php"><font size="" color="black">Admin Page</font></a></li>
  <li><a href="#"><font size="" color="black">View Details</font></a></li>
  <li>Maternal Details</li>
  </ul></center>
  
<?php
  include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM mdetails";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  

  if ($total !=0) 
  {
    ?>

   <center> <table border="3">
      <tr>
        <th colspan="8"><font color="brown" size="5"><h2>Maternal Identification</h2></th>
        <th colspan="5"><font color="brown" size="5"><h2>Pregnancy Record</h2></th>
        <th colspan="4"><font color="brown" size="5"><h2>Institutional Identification</h2></th>
        <th colspan="7"><font color="brown" size="5"><h2>Maternal Health Record</h2></th>
       <th colspan="2"><font color="red" size="5"><h2>Operations</h2></th>
      </tr><br><br>
      <tr>
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
              <td><a href='updatemdetails.php?Id=$result[Id]&Date=$result[Date]&Name=$result[Name]&Age=$result[Age]&wo=$result[wo]&Area=$result[Area]&Email=$result[Email]&Contact=$result[Contact]&period=$result[period]&delivery=$result[delivery]&Pregnancies=$result[Pregnancies]&destination=$result[destination]&person=$result[person]&anb=$result[anb]&CHC=$result[CHC]&PHC=$result[PHC]&Hospital=$result[Hospital]&cdate=$result[cdate]&Month=$result[Month]&ANC=$result[ANC]&BP=$result[BP]&Weight=$result[Weight]&TT=$result[TT]&Iron=$result[Iron]'>UPDATE</a></td>
              <td><a href='deletemdetails.php?Id=$result[Id]' onclick='return checkdelete()'>Delete</a></td>
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
</body>
</html>