 <?php
 session_start();
 error_reporting(0);
 include("../dbconnection/connection.php");

   if (isset($_POST['submit'])) 
   {
      $Name=$_POST['Name'];
      $Email=$_POST['Email'];
      $Contact=$_POST['Contact'];
      $Message=$_POST['Message'];
  
      $query="INSERT into contact VALUES('','$Name','$Email','$Contact','$Message')" ;

     if (empty($Name) || empty($Email) || empty($Contact) || empty($Message)) {
      echo "<script>alert('Please..Fill in empty fields')</script>";
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/home/homepage.php#section3">
  <?php
    
    }
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z ]*$/", $Name)) {
        echo "<script>alert('Invalid Name and Email')</script>";
        ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/home/homepage.php#section3">
  <?php
        
    }
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Invalid Email')</script>";
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/home/homepage.php#section3">
  <?php
      
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
      echo "<script>alert('Invalid Name')</script>";
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/home/homepage.php#section3">
  <?php
      
    }
    elseif (mysqli_query($conn, $query)) {
      echo "<script>alert('Message sent successfully')</script>";
  ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/home/homepage.php#section3">
  <?php
    }
    else{
      echo "<script>alert('sorry!! Message not sent')</script>";
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/mchcare/home/homepage.php#section3">
  <?php                                              
    }

   }

  ?>
