<?php
	$dbhost="localhost";
	$dbuser='root';
	$db='mchcare';
$conn=mysqli_connect('$dbhost','$dbuser','','$db');
	if (mysqli_connect_error($conn)) {
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	echo "connected";
}

	
	

?>