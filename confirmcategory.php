 <?php
 session_start();
	if(!isset($_SESSION['admin'])) {
	   header("Location:index.php?page=admin");
	}
	
	if(!isset($_POST['submit'])) {
		header("Location:index.php?page=admin");
	}
	
	$_SESSION['addcategory']['name']=$_POST['name'];
?>	
<p>Confirm category name</p>
<p>You enter: <?php echo $_POST['name'];?></p><br>
<p><a href="index.php?page=entercategory">Correct, Continue</a> | <a href="index.php?page=addcategory">Oops, Go back</a></p>
