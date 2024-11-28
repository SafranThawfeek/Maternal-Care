<?php
session_start();
include("../dbconnection/connection.php");
error_reporting(0);
$Id = $_GET['Id'];
$query = "DELETE FROM mdetails WHERE Id='$Id'";
$data = mysqli_query($conn, $query);
if ($data) 
{
	echo "<script>alert('Record Deleted')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/vmdetails.php">
	<?php
}
else
{
	echo "<script>alert('Sorry!! Record not deleted')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/vmdetails.php">
	<?php
}
?>
