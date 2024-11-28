<!DOCTYPE html>
<html>
<head>
	<title>MAMATA</title>
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
.header{
  background-image: url(../image/image117.jpg);
  background-repeat: no-repeat;
  background-position: center;
}
.main{
  padding: 100px;
  height: 100%;
  text-align: justify;
  font-size: 20px;
}
.main1{
  padding: 100px;
  height: 100%;
  text-align: center;
  font-size: 20px;
}
.main1 th{
  font-size: 25px;
  font-weight: bold;
  
}
body{
  background-image: url(../image/image167.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  font-size: 20px;
  color: white;
}
td{
   padding: 20px;
}
</style>
</head>
<body>
	<div class="header"><center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
	<ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker Page</a></li>
  <li><a href="#">View Information</a></li>
  <li><a href="facility1.php">GOVT Facillities</a></li>
  <li>MAMATA YOJANA</li>
  </ul></center></div> 
<div class="main">
Mamata<br><br>
To alleviate the issue of maternal and infant undernutrition, Government of Odisha has launched a state specific scheme for pregnant women and lactating mothers called MAMATA- a conditional cash transfer maternity benefit scheme. This scheme provides monetary support to the pregnant and lactating women to enable them to seek improved nutrition and promote health seeking behaviour.<br><br>

<ul>Objective:
<li>To provide partial wage compensation for pregnant and nursing mothers so that they are able to rest adequately during their pregnancy and after delivery.</li>
<li>To increase utilisation of maternal and child health services, especially antenatal care, postnatal care and immunisation.</li>
<li>To improve mother and child care practices, especially exclusive breastfeeding and complementary feeding of infants.</li>
</ul>
Target Group:<br><br>
Pregnant and lactating woman of 19 & above age group, for the first two live births except those who avail maternity benefit (who are themselves employees or wives of employees of State Govt/Central Govt/PSUs).
</div>
<div class="main1">
    
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
            <center>
            <table>
            <tr>
            <th>Conditionality</th>
            <th>Primary Responsibility to ensure service</th>
            <th>Means Of Verification</th>
            </tr>
        <?php

           while ($row = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                   <td>" . $row['Conditionality'] . "</td> 
                   <td>" . $row['Responsibility'] . "</td> 
                   <td>" . $row['Verification'] . "</td> 
                </tr>";
            }
                                                                   
}
else
{
  echo "No Information Found";
}

?>
</table>
</div>
</center>
</body>
</html>