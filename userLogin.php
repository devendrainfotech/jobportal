<?php
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
?>

<form action="userLoginVerify.php" method="post">
	<input type="email" name="userEmailid" placeholder="enter the username" required=""/><br />
	<input type="password" name="userPassword" placeholder="enter the password" required=""/><br />
	<input type="submit" name="userLoginSubmit" value="Sign In" />
</form>