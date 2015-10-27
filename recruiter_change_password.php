<?php
	include_once 'userSession.php';
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
?>
<title>Recruiter Change Password</title>
<br>
	<div class="container">
      	<div class="col-md-4"><h3 style="float: right;">Signed in as:</h3></div>
		<div class="col-md-8"><h3><?php echo $login_recruiter_session; ?></h3></div>
    	
      <form class="col-md-4 col-md-offset-4" method="post" action="recruiter_change_password_verify.php">
        <h3 class="form-signin-heading">Enter Your Current Password</h3>
        <label for="inputEmail" class="sr-only">Current Password</label>
        <input name="recCurrentPassword" placeholder="Enter Password" id="inputEmail" class="input-lg form-control" placeholder="Email address" required="" autofocus="" type="password">
        <br>
        <h3 class="form-signin-heading">Enter Your New Password</h3>
        <label for="inputEmail" class="sr-only">Enter Password</label>
        <input name="recNewPassword" placeholder="Enter Password" id="inputEmail" class="input-lg form-control" placeholder="Email address" required="" autofocus="" type="password">
        <br>
        <label for="inputPassword" class="sr-only">nothing</label>
        <input name="recNewRepeatPassword" placeholder="Enter Password Again" id="inputPassword" class="input-lg form-control" placeholder="Password" required="" type="password">
        <br>
        <button name="recChangePassword" class="btn btn-lg btn-primary btn-block" type="submit">Reset Password</button>
      </form>
    </div> <!-- /container -->
<br>
<br>
<br>
<br>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<?php
	include_once './Development/commonfiles/footer.php';
?>