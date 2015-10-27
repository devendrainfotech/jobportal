<ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo mb_strimwidth($login_recruiter_session,0,15,"...") ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="JobPost.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp;&nbsp;Job Post</a></li>
                <li><a href="Recruiter_edit_profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;&nbsp;My Profile</a></li>
                <li><a href="Recruiter_edit_profile.php"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> &nbsp;&nbsp;Edit Profile</a></li>
                <li><a href="recruiter_change_password.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> &nbsp;&nbsp;Change Password</a></li>
                <li role="separator" class="divider"></li>
                <li><center><a href="logout.php"><input type="submit" name="userLoginSubmit" class="btn btn-danger" value="Sign Out"/></a></center></li>
                
              </ul>
            </li>
          </ul>
