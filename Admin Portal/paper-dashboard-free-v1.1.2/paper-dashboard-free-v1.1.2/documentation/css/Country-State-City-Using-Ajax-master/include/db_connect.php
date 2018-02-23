<?php
//Page from where the database is connected using the config page.

$mysqli = new mysqli('localhost', 'conoehorgan95', '', 'intern_portal');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>