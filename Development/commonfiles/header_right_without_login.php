<ul class="nav navbar-nav navbar-right setting-the-navbar-right">
            <li>
            	<div class="btn-group">
			  	<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Sign In <span class="caret"></span>
			  	</button>
<ul class="dropdown-menu">
			  		<div>

			  	<form class="setting-the-dropdown-menu-margin" method="post" action="userLoginVerify.php">
    				<div class="form-group">
				    <!--<label for="exampleInputEmail1">Email Address:</label>-->
				    <input type="email" class="form-control" id="exampleInputEmail1" name="userEmailid" placeholder="Enter the Email id" required="">
				  </div>
				  <div class="form-group">
				    <!--<label for="exampleInputPassword1">Password:</label>-->
				    <input type="password" class="form-control" id="exampleInputPassword1" name="userPassword" placeholder="Enter Password" required="">
				  </div>
				 <!-- <div>
				    <label>
				      <input type="checkbox" name="rememberme" value="1"> Remember me
				    </label>
				 </div>-->
				  <div>
				    <label>
				      <a href="userforgotpassword.php">Forgot your password ?</a></center>
				    </label>
				  </div>
				  <li role="separator" class="divider"></li>
				  <center><input type="submit" name="userLoginSubmit" class="btn btn-success" value="Sign In"/></center>
				  <!--<span><?php echo $error; ?></span>-->
				</div>
    			</form>
  				</ul>
			    <!-- 
				  </form>-->
			  
				</div>
				</li>
				<li>
				<div class="btn-group">
				<a href="userregister.php" class="btn btn-warning">Register</a>
				</div>
				</li>
				<!-- Login Button Coding ends Here -->
				<!--<li><a href="../navbar/">Default</a></li>
				<li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
				<li><a href="../navbar-fixed-top/">Fixed top</a></li>-->	    
          </ul>