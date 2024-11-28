<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
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
    background-image: url(../image/image16.jpg);
    background-position: center;
    background-size: cover;
}
th{
  color: green;
  font-weight: bold;
  font-size: 20px;
}
td
  {
    color: white;
    padding: 20px;
    font-weight: bold;
    font-size: 15px;
  }
</style>
</head>
<body>
  <center><h1><font size="" color="black">CHILD DETAILS</h1>
  <ul class="breadcrumb">
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="adminlogin.php">Login</a></li>
  <li><a href="adfeatures.php">Admin Page</a></li>
  <li><a href="#">View Details</a></li>
  <li>Child Details</li>
  </ul></center>

<?php
  include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM cdetails";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  

  if ($total !=0) 
  {
    
  ?>

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
      echo"<tr></tr>
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
              
              <td><a href='updatecdetails.php?Id=$result[Id]&mname=$result[name]&fname=$result[fname]&Area=$result[Area]&cname=$result[cname]&DOB=$result[DOB]&gender=$result[gender]&bw=$result[bw]&reg=$result[reg]&Hospital=$result[Hospital]&vdate=$result[vdate]&Month=$result[Month]&Weight=$result[Weight]&vname=$result[vname]&Expected=$result[Expected]&Actual=$result[Actual]&Illness=$result[Illness]'>UPDATE</a></td>
             <td><a href='deletecdetails.php?Id=$result[Id]' onclick='return checkdelete()'>Delete</a></td>
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