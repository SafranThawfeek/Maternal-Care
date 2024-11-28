<?php
session_start();
include("../dbconnection/connection.php");
error_reporting(0);
$Id = $_GET['Id'];
$query = "DELETE FROM complain WHERE Id='$Id'";
$data = mysqli_query($conn, $query);
if ($data) 
{
	echo "<script>alert('Complaint Deleted')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/vcomplaint.php">
	<?php
}
else
{
	echo "<script>alert('Sorry!! Complaint not deleted')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/vcomplaint.php">
	<?php
}
?>
