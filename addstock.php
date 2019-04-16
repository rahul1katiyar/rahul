<?php
  session_start();
  if(!isset($_SESSION['admin'])) {
	  header("Location:index.php");
  }
  
  if(!isset($_SESSION['addstock'])) {
	  $_SESSION['addsock']['name']="";
	   $_SESSION['addsock']['categoryID']="1";
	    $_SESSION['addsock']['price']="";
		 $_SESSION['addsock']['topline']="";
		  $_SESSION['addsock']['description']="";
		  $_SESSION['addsock']['thumbnail']="noimage.jpg";
  }  else {
	  if($_SESSION['addstock']['thumbnail'] != "noimage.jpg") {
		  unlink("images/".$_SESSION['addstock']['thumbnail']);  
	  }
  }
  $add_sql="SELECT * FROM category";
  $add_query=mysqli_query($dbconnect, $add_sql);
  $add_rs=mysqli_fetch_assoc($add_query);
     

  ?>
  <div class="maincontent">
    <p><a href="index.php?page=admin">Back to admin</a></p>
    <h1>Enter details for new stock item</h1>
    <form method="post" action="index.php?page=confirmaddstock" enctype="multipart/form-data">
     <p>Stock item name:  <input type="text" name="name" value="<?php echo $_SESSION['addstock']['name']; ?>" /></p>
     <p>Thumbnail image: <input type="file" name="fileToUpload" id="fileToUpload" /></p>
     <p>Category: <select name="categoryID">
	 <?php 
	 do {
		 ?>
		 <option value="<?php echo $add_rs['categoryID']; ?>"
		  <?php
		    if($add_rs['categoryID']==$_SESSION['addstock']['categoryID']) {
				echo "selected==selected";
			}?>
		 > <?php echo $add_rs['name'] ;?></option>
		
		<?php 
	 }  while($add_rs=mysqli_fetch_assoc($add_query));
	 ?>
	 
	 </select></p>
     <p>Price: $ <input type="text" name="price" value="<?php echo $_SESSION['addstock']['price']; ?>" /></p>
     <p>Topline: <input type="text" name="topline" value="<?php echo $_SESSION['addstock']['topline']; ?>"/></p>
     <p>Description: <textarea name="description" cols=60 rows=5 ><?php echo $_SESSION['addstock']['description']; ?></textarea></p>
     <input type="submit" name="submit" value="submit"	/>  
  </div>