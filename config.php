<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "televisi";

  $conn = mysqli_connect($host,$user,$pass,$db);

  if(mysqli_connect_error()) {
      echo "Connection Failed";
  } else {
      echo "Connection Successfully";
  }
?>
