<ul class="nav navbar-nav navbar-right">
     
     
     <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo mb_strimwidth($login_session,0,15,"...") ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <!--<li><a href="#"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> &nbsp;&nbsp;Notification</a></li>-->
                <li><a href="managejobs.php"><span class="glyphicon glyphicon-ok"></span> &nbsp;&nbsp;Applied Jobs</a></li>
                <li><a href="managejobs.php"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;Saved Jobs</a></li>
                <li><a href="user_edit_profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;&nbsp;Edit Profile</a></li>
                <li><a href="user_change_password.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Change Password</a></li>
                <!--<li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> &nbsp;&nbsp;Manage Jobs</a></li>
                --><li role="separator" class="divider"></li>
                <li><center><a href="logout.php"><input type="submit" name="userLoginSubmit" class="btn btn-danger" value="Sign Out"/></a></center></li>
                
              </ul>
            </li>
            
       <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge">74</span></a>
              <ul class="dropdown-menu">
                <!-- diiferent notification coding goes here.... 
              </ul>
            </li>-->
     
          </ul>