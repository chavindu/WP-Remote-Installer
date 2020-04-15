<?php
  $conn = new mysqli("localhost", "anuclfix_geopos", "anuclfix_geopos", "anuclfix_geopos");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.<br>';

  $conn->close();
?>