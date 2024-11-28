<?php
include("../dbconnection/connection.php");
error_reporting(0);
$Id = $_GET['Id'];
$query = "DELETE FROM notification1 WHERE Id='$Id'";
$data = mysqli_query($conn, $query);
if ($data) 
{
	echo "<script>alert('Deleted')</script>";
	?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/hworker/notif.php">
	<?php
}
else
{
	echo "<font color='red'>Sorry!! Not deleted";
}
?>
