<ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $login_session; ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> &nbsp;&nbsp;Notification</a></li>
                <li><a href="user_profile.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> &nbsp;&nbsp;My Mail Box</a></li>
                <li><a href="user_edit_profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;&nbsp;Edit Profile</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> &nbsp;&nbsp;Setting</a></li>
                <li role="separator" class="divider"></li>
                <li><center><a href="logout.php"><input type="submit" name="userLoginSubmit" class="btn btn-danger" value="Sign Out"/></a></center></li>
                
              </ul>
            </li>
          </ul>