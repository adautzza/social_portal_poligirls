<?php
// enter host, username, pass and database
// empty pass on localhost
$con = mysqli_connect("localhost","root","","register");
// check conn
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
