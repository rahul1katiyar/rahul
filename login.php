<h1>Please enter username and password</h1><br>
<form name="login" method="post" action="index.php?page=admin" >
<p>Username <input name="username" type="text" placeholder="username" maxlength=30 /></p><br>
<p>Password <input name="password" type="password" placeholder="password" maxlength=30 /></p><br>
 <?php
    if(isset($_POST['login']) && !isset($_SESSION['admin'])) {
		?>
		<p><span class="error">Incorrect Username or Password</span></p><br>
		
		<?php
	} 
 ?>
<p><input type="submit" name="login" value="submit" /></p>
</form>