<?php
include("../dbconnection/connection.php");
$_GET['Id'];
$_GET['Area'];
$_GET['cname'];
$_GET['Date'];
$_GET['Month'];
$_GET['Weight'];
$_GET['vname'];
$_GET['Expected'];
$_GET['Actual'];
$_GET['Illness'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="updatecreport.php" method="GET">
<table>
<tr>
   <td>Id</td>
   <td><input type="number" name="Id" required value="<?php echo $_GET['Id'];?>"/></td>
</tr>
<tr>
   <td>Area</td>
   <td><input type="text" name="Area" required value="<?php echo $_GET['Area'];?>"/></td>
</tr>
<tr>
   <td>Child Name</td>
   <td><input type="text" name="cname" required value="<?php echo $_GET['cname'];?>"/></td>
</tr>
<tr>
  <td>Date</td>
  <td><input type="date" name="Date" required value="<?php echo $_GET['Date'];?>"/></td>
</tr>
<tr>
  <td>Month</td>
  <td><input type="text" name="Month" required value="<?php echo $_GET['Month'];?>"/></td>
</tr>
<tr>
  <td>Weight</td>
  <td><input type="text" name="Weight" required value="<?php echo $_GET['Weight'];?>"/></td>
</tr>
<tr>
  <td>Vaccine Name</td>
  <td><input type="text" name="vname" required value="<?php echo $_GET['vname'];?>"/></td>
</tr>
<tr>
  <td>Expected date to come and take vaccine</td>
  <td><input type="date" name="Expected" required value="<?php echo $_GET['Expected'];?>"/></td>
</tr>
<tr>
  <td>Actual Date of taking vaccine</td>
  <td><input type="date" name="Actual" required value="<?php echo $_GET['Actual'];?>"/></td>
</tr>
<tr>
  <td>Any Illness??</td>
  <td><input type="text" name="Illness" required value="<?php echo $_GET['Illness'];?>"/></td>
</tr>
</table>
<input type="submit" name="submit" value="SUBMIT">
</form>

<?php 

  if ($_GET['submit'])
 {
  
  $Id=$_GET['Id'];
  $Area=$_GET['Area'];
  $cname=$_GET['cname']; 
  $Date=$_GET['Date'];
  $Month=$_GET['Month'];
  $Weight=$_GET['Weight'];
  $vname=$_GET['vname'];
  $Expected=$_GET['Expected'];
  $Actual=$_GET['Actual'];
  $Illness=$_GET['Illness'];
  
 $query = "UPDATE chealthreport SET Id='$Id',Area='$Area',cname='$cname',Date='$Date',Month='$Month',Weight='$Weight',vname='$vname',Expected='$Expected',Actual='$Actual',Illness='$Illness' WHERE Id='$Id'";
 $data =mysqli_query($conn, $query);
 if ($data) {
  echo "updated";
 }
 else{
 	echo "not updated";
 }
}
?>
</body>
</html>
