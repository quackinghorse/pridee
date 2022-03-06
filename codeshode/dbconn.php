<?php 
  $db_host = "localhost";
  $db_name = "secure_pass";
  $db_pass = "";
  $db_user = "root";
 
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 
  if (!$conn){
    die ('Failed to connect with server');
  }   
?>