<!DOCTYPE html>
<html>
<head>
	<title>CHILD VACCINATION</title>
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
.main{
  padding: 100px;
  padding-top: 0px;
  height: 100%;
  text-align: justify;
  font-size: 20px;
}
.main1{
  margin: 0;
  background-image: url(../image/image109.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  padding: 100px;
  height: 100%;
  text-align: center;
  font-size: 20px;
}
.main1 th{
  font-weight: bold;
  font-size: 35px;
  color: skyblue;
}
.main1 h3{
  font-weight: bold;
  font-size: 40px;
  color: blue;
}
body{
  background-image: url(../image/image115.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  font-size: 20px;
  color: white;
}
td{
 padding: 20px;
 font-weight: bold;
 font-size: 25px;
 color: black;
}
</style>
</head>
<body>
	<center><h1>CHILD VACCINATION</h1>
	<ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/mlogin.php">Login</a></li>
  <li><a href="mfeatures.php">Maternal Page</a></li>
  <li><a href="#">View Information</a></li>
  <li><a href="facility.php">GOVT Facillities</a></li>
  <li><font color="black">CHILD VACCINATION</font></li>
  </ul></center>
  <br>
  
  <div class="main">
  <p>
    Vaccination or immunisation is one of the most well known and effective methods of preventing child hood diseases. 
    Universal Immunisations Programme(UIP) is established in India in 1985. Since then morbidity and mortality due to vaccine preventable diseases have declined over the years all districts of the State.
  </p>
  <p>
    OBJECTIVES:<br><br>
    To prevent infant from 6 killer diseases like Diptheria, T.B., Polio, Whooping, Cough, Tetanus, and Measles.
  </p>
  <p>
    ACTIVITIES:<br><br>
    Routine Immunisation Schedule -<br>
    This is a National immunisations schedule which is followed by all the states.<br><br>
    Special Immunisation Week -<br>
    To immunise infants, pregnant mothers and children in unriched areas, in areas where immunisation services are not given for 2 shifts and dropout population, immunisation services are undertaken in a campaign method twice in a year.<br><br>
    Intensified Pulse Polio Immunisation -<br>
    GOI launched the pulse polio immunisation programme in an effect to eradicate polio from the country and to free children from the danger of this dreaded disease.<br><br>
    Supply of sufficient Vaccine -<br>
    GOI provide all types of vaccine as per requirement by the state. The vaccine are stored, transported and utillised under cold chain system as per GOI norm.<br><br>
    Use of Immunisation card and Counter foil - <br>
    One immunisation card is used for each vaccinated mother/child. The name of vaccine given, the date of vaccination is mentioned in the card. A counter foil of the card is maintained at the sub centre by the health worker/ Vaccinator to follow up the child in case the original card is not produced by the child's parent.<br><br>
    Maintenance of cold chain system -<br>
    To preserve the potency of the vaccine the vaccine are transported and stored under cold chain system in specific range of temperature.<br><br>
    Use of Auto-Disposable Syrings -<br>
    For injectable vaccine such systems are supplied by GOI which is launched after syringe use. Such system prevents from misuse of any niddles and syringes so that Adverse Effect to immunisations are prevented.<br><br>
    Training to HW(F) -<br>
    The staff utillized in immunisation programme are given training on vaccine use, cold chain and injection safety from time to time before any special immunisation schedule.<br><br>
    Adverse Effect of Immunisation -<br>
    All health staffs are trained on detection and management of Adverse Effect on Immunisation.<br><br>
    Survey of vaccine preventable disease -<br>
    Collecting information from vaccine preventable diseases is used as guide for immunisation strategy. <br>
    </p>
    </div>
   
    <div class="main1">
    <h3>National Immunization Schedule</h3>
   
  <?php 
  include("../dbconnection/connection.php");
  error_reporting(0);
  $query = "SELECT * FROM immunization";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  

  if ($total !=0) 
       {
          ?>
            <center>
            <table>
            <tr>
            <th>Vaccine</th>
            <th>When to give</th>
            <th>Dose</th>
            <th>Route</th>
            <th>Site</th>
            </tr>
        <?php

           while ($row = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                   <td>" . $row['Vaccine'] . "</td> 
                   <td>" . $row['give'] . "</td> 
                   <td>" . $row['Dose'] . "</td>
                   <td>" . $row['Route'] . "</td>
                   <td>" . $row['Site'] . "</td>

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