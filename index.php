<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
 include("dbconnect.php");
?>
<html>
<head>
<title>Welcome to Rahul Clothing</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
	include("header.php");
	if(!isset($_GET['page']))
	{
		?><div class="banner" ><img src="images/banner.jpg" alt="Chic clothing" /></div>
		<?php
	}
	
	?>
    <div class="maincontent">
 <?php
    if(!isset($_GET['page']))
	{
		include("home.php");
	}
	else
	{
		$page=$_GET['page'];
		include("$page.php");
	}
 ?>
  </div>
   <?php
    include("seccontent.php");
   ?>
	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
