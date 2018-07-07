<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "reno";

  $conn = mysqli_connect($host,$user,$pass,$db);

  if(mysqli_connect_error()) {
      echo "Error ".mysqli_connect_error();
  } else {
      echo "Success";
  }
?>