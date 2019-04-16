<?php
  $dbconnect = mysqli_connect("localhost", "root", "", "project1");
  if(mysqli_connect_errno())
  {
    echo "connection failed";
	exit;
  }

?>