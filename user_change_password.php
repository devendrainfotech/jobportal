<?php
	include_once 'usersession.php';
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
?>

<br>
    <div class="container">
      <form class="col-md-4 col-md-offset-4" method="post" action="password_change_request.php">
        <h2 class="form-signin-heading">Enter Your New Password</h2>
        <label for="inputEmail" class="sr-only">Enter Password</label>
        <input placeholder="Enter Password" id="inputEmail" class="input-lg form-control" placeholder="Email address" required="" autofocus="" type="email">
        <br>
        <label for="inputPassword" class="sr-only">nothing</label>
        <input placeholder="Enter Password Again" id="inputPassword" class="input-lg form-control" placeholder="Password" required="" type="password">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Reset</button>
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