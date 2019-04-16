<?php
    session_start();
	if(!isset($_SESSION['admin'])) {
	   header("Location:index.php?page=admin");
	}
	
?>
<h1>Confirm category to delete</h1><br>

<?php
  $delcat_sql="SELECT * FROM category WHERE categoryID=".$_GET['categoryID']."";
  $delcat_query=mysqli_query($dbconnect, $delcat_sql);
  $delcat_rs=mysqli_fetch_assoc($delcat_query);
  
  $check_sql="SELECT * FROM stock WHERE categoryID=".$_GET['categoryID']."";
  $check_query=mysqli_query($dbconnect, $check_sql);
  $count=mysqli_num_rows($check_query);
  ?>

    <?php   if($count>0)
		   echo "Warning! There are " .$count. " items in the stock" ;
	
	
	?>
  
   <p> <?php echo "You have selected " .$delcat_rs['name']. "?"; ?></p>
   <p><a href ="index.php?page=deletecategory&categoryID=<?php echo $_GET['categoryID']; ?>">Yes, delete it!</a> | <a href="index.php?page=deletecategoryselect">No, Go Back</a> | <a href="index.php?page=admin">Back to Admin</a></p>