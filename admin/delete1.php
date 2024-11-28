<?php
include("../dbconnection/connection.php");
error_reporting(0);
$Id = $_GET['Id'];
$query = "DELETE FROM hworkeraccount WHERE ID='$Id'";
$data = mysqli_query($conn, $query);
if ($data) 
{
	echo "<script>alert('Record Deleted')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/hwaccount.php">
	<?php
}
else
{
	echo "<script>alert('Sorry!! Record not deleted')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/admin/hwaccount.php">
	<?php
}
?>
