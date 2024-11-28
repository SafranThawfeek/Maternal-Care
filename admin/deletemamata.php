<?php
session_start();
include("../dbconnection/connection.php");
error_reporting(0);
$Id = $_GET['Id'];
$query = "DELETE FROM mamata WHERE Id='$Id'";
$data = mysqli_query($conn, $query);
if ($data) 
{
	echo "<script>alert('Information Deleted')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/vmamata.php">
	<?php
}
else
{
	echo "<script>alert('Sorry!! Information not deleted')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/vmamata.php">
	<?php
}
?>
