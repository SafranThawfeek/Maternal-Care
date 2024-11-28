<?php
session_start();
session_unset(); //start session
session_destroy(); // distroy all the current sessions
header('location:../home/homepage.php');
?>