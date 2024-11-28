<!DOCTYPE html>
<html>
<head><title>give feedback</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css">
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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
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
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.agileits_w3layouts{
  background-image: url(../image/image157.jpg);
}
</style>
</head>
<body class="agileits_w3layouts">
<center><h1 class="agile_head text-center"><font color="black">Feedback Form</h1>
  <ul class="breadcrumb">
  <li><a href="../home/homepage.php">Home</a></li>
  <li><a href="../login/mlogin.php">Login</a></li>
  <li><a href="mfeatures.php">Maternal Page</a></li>
  <li>Give Feedback</li>
  </ul>
  </center> 
    <div class="w3layouts_main wrap">
    <h3>Please help us to serve you better by taking a couple of minutes. </h3>
      <form action="gfeedback1.php" method="post" class="agile_form">
      <h2>How satisfied were you with our Service?</h2>
       <ul class="agile_info_select">
         <li><input type="radio" name="view" value="excellent" id="excellent" required> 
            <label for="excellent">excellent</label>
              <div class="check w3"></div>
         </li>
         <li><input type="radio" name="view" value="good" id="good"> 
            <label for="good"> good</label>
              <div class="check w3ls"></div>
         </li>
         <li><input type="radio" name="view" value="neutral" id="neutral">
           <label for="neutral">neutral</label>
             <div class="check wthree"></div>
         </li>
         <li><input type="radio" name="view" value="poor" id="poor"> 
            <label for="poor">poor</label>
              <div class="check w3_agileits"></div>
         </li>
       </ul>    
      <h2>If you have specific feedback, please write to us...</h2>
      <textarea placeholder="Additional comments" class="w3l_summary" name="comments" ></textarea>
      <label for="usertype"><font size="" color="white">User Type</font></label>
      <select name="usertype">
      <option value="Health worker">Health worker</option>
      <option value="Maternal">Maternal</option>
      </select>
      <input type="text" placeholder="Your Name" name="name"  required/>
      <input type="email" placeholder="Your Email" name="email" required/>
      <input type="text" placeholder="Your Number" name="num" required /><br>
      <center><input type="submit" name="submit" value="submit" class="agileinfo" /></center>
    </form>
  </div>

</body>
</html>

<?php 
session_start();
error_reporting(0);
include '../dbconnection/connection.php';
if (isset($_POST['submit']))
{

$usertype = $_POST['usertype'];
$name = $_POST['name'];
$email = $_POST['email'];
$num = $_POST['num'];
$view = $_POST['view'];
$comments = $_POST['comments'];

$query="INSERT into feedback VALUES('','$usertype','$name','$email','$num','$view','$comments')" ;

if (mysqli_query($conn, $query)) {
    echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

