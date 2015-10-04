	<?php
		include_once 'index.php'; 
		if( isset($_COOKIE["UserId"]) ){
			header("location:UserProfile.php");
		}
		else{
			include_once './Development/commonfiles/header.php';
			include_once './Development/commonfiles/searchbar.php';
		}
	?>
	<form method="post" action="CheckRegistration.php">
		<h2>Create a new account ?</h2>
			<input type="text" placeholder="First Name" class="form-control" />
			<input type="text" placeholder="Middle Name" class="form-control" />
			<input type="text" placeholder="Last Name" class="form-control" />
			<input type="email" placeholder="Email Id" class="form-control" />
			<input type="password" placeholder="Password" class="form-control" />
			<input type="text" placeholder="Mobile No" class="form-control" />
			<input type="text" placeholder="Question" class="form-control" />
			<input type="text" placeholder="Answer" class="form-control" />

			<input type="submit" class="btn btn-warning" />
			<input type="Reset" class="btn btn-info" />
	</form>
<?php
	include_once './Development/commonfiles/footer.php';
?>