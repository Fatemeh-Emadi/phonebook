<?php 
include "database.php";
  $esm= $_POST["name"];
  $famil= $_POST["family"];
  $mail= $_POST["email"];
  $mobile_no= $_POST["mobile"];
  $phone_no= $_POST["phone"];
  
  mysqli_query($connection,"INSERT INTO contacts(name,family,email,mobile,phone) VALUES ('$esm','$famil','$mail','$mobile_no','$phone_no')");

  header("Location:index.php");

?>


