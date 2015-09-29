          <?php 
		if( isset($_COOKIE["UserId"]) ){
			//header("location:UserProfile.php");
		}
		else{
		
		echo '
          <ul class="nav navbar-nav navbar-right setting-the-navbar-right">
            <!-- Login Button Coding Start Here -->
            <li>
            	<div class="btn-group">
			  	<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Sign In <span class="caret"></span>
			  	</button>
			  	<ul class="dropdown-menu">
			  		<div>
			  	<form class="setting-the-dropdown-menu-margin" Method="POST" action="CheckLogIn.php">
    				<div class="form-group">
				    <label for="exampleInputEmail1">Email Address:</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter the Email id">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password:</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div>
				    <label>
				      <a>Forgot your password ?</a></center>
				    </label>
				  </div>
				  <li role="separator" class="divider"></li>
				  <center><button type="submit" class="btn btn-success">Submit</button></center>
				</div>
    			</form>
  				</ul>
			    <!-- 
				  </form>-->
			  
				</div>
				</li>
				<li>
				<div class="btn-group">
				<a href="RegistrationForm.php" class="btn btn-warning">Register</a>
				</div>
				</li>
				<!-- Login Button Coding ends Here -->
				<!--<li><a href="../navbar/">Default</a></li>
				<li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
				<li><a href="../navbar-fixed-top/">Fixed top</a></li>-->
          </ul>
		  ';
		  }
		  ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>