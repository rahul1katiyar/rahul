<?php
    session_start();
	if(!isset($_SESSION['admin'])) {
	   header("Location:index.php?page=admin");
	}
	
?>

<?php
  $delcat_sql="DELETE FROM category WHERE categoryID=".$_GET['categoryID']."";
  $delcat_query=mysqli_query($dbconnect, $delcat_sql);
  
  $delstock_sql="DELETE FROM stock WHERE categoryID=".$_GET['categoryID']."";
  $delstock_query=mysqli_query($dbconnect, $delstock_sql);
  ?>
  
  <h1>Category deleted.</h1><br>
  <p>You have successfully deleted category</p>
  <p><a href="index.php?page=admin">Return to admin.</a></p>

   
   