<!DOCTYPE html>
<html>
<head>
	<title>View Notice</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}
  input[type=text], input[type=email], select, textarea 
  {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
 }

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 13px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
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
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 20px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 25%;
  padding: 50px;
}
</style>
</head>
<body>
<center><h1>View Notice</h1>
  <ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/hwlogin.php">Login</a></li>
  <li><a href="hwfeatures.php">Health worker Page</a></li>
  <li><a href="viewnotif1.php">View Notification</a></li>
  <li>View Notice</li>
  </ul>

  <form  action="vnotif.php" method="POST"><br>
   <div class="bg-text">
    Name  <input type="text" name="Name" placeholder="Enter your name"><br><br>
    Email  <input type="email" name="Email" placeholder="Enter your email"><br><br>
    <input type="submit" name="search" value="Search">
  </div>
</form>
</body>
</html>
<?php 
  session_start();
  include("../dbconnection/connection.php");
  error_reporting(0);
  if (isset($_POST['search'])) 
   {
      $Name=$_POST['Name'];
      $Email=$_POST['Email'];
    
      $query="SELECT * FROM `notification1` WHERE Name='$Name' && Email='$Email' ";
      $data=mysqli_query($conn, $query);
      $total=mysqli_num_rows($data);

   if (empty($Name) || empty($Email)) 
   {
     echo "<font size='4' color='green'>Fill in Empty Fields";
      exit();
    
     }
   elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z ]*$/", $Name)) 
     {
      echo "<font size='4' color='red'>Invalid Email and Name";
      exit();
    }
   elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
      echo "<font size='5' color='red'>Invalid Email";
      exit();
    }

    elseif (!preg_match("/^[a-zA-Z ]*$/", $Name)) 
    {
      echo "<font size='5' color='red'>Invalid Name";
      exit();
    }
     elseif($total!=0)
     {
      $_SESSION['Name']=$Name;
      $_SESSION['Email']=$Email;
      header("refresh:0;url=notif.php"); 
      }
    else{
      echo "<font size='4' color='red'>Invalid Name or Email";
      exit();

    }
 }
 ?>