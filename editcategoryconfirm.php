<?php
    session_start();
	if(!isset($_SESSION['admin'])) {
	   header("Location:index.php?page=admin");
	}
	$_SESSION['editcategory']['name']=$_POST['name'];
	
?>
<h1>Edit category</h1>
<p>Confirm the category: <?php echo $_SESSION['editcategory']['name']; ?></p>
<p><a href="index.php?page=editcategoryupdate">Confirm</a> |<a href="index.php?page=editcategory"> Oops, Go back</a> | <a href="index.php?page=admin">Return to admin</a></p>
