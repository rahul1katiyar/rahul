<?php
     session_start();
	 
	 if(!isset($_SESSION['admin'])) {
		 header("Location:index.php");
	 }
	 //add stock
	 $desc=substr(mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['description']),0,strlen($_SESSION['addstock']['description'])-2);
	// $desc=$_SESSION['addstock']['description'];
	 $enter_sql="INSERT INTO stock (name, categoryID, price, thumbnail, topline, description) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['name'])."', 
	 '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['categoryID'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['price'])."',
	 '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['thumbnail'])."', 
	 '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['topline'])."', '".mysqli_real_escape_string($dbconnect, $desc)."'
	 )";
	 
	echo $enter_sql;
	$enter_query=mysqli_query($dbconnect, $enter_sql);
	 
	 
	 // unset session
  //  unset($_SESSION['addstock']);
?>
<p>New item is entered to stock</p>
<a href="index.php?page=admin">Back to admin.</a></p>