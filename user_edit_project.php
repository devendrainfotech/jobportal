<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
    include_once './Development/commonfiles/general_function.php';
?>
<?php
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
    include_once 'user_profile_tab.php';
?>
<title>User Edit Project</title>
<?php
    $mode=$_GET['mode'];
    if(isset($_GET['id'])!=null )
    {
        $autoid=$_GET['id'];
        $query1= "SELECT * FROM `tbl_job_seeker_proj_details` WHERE `autoid` = '$autoid'";
        $result1 = mysqli_query($conn, $query1);
        $row1= mysqli_fetch_assoc($result1);  
    }
?>
<div class="container">
<div class="tab-pane fade in" id="tab2">
        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">  
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion"      href="#collapseOne">
                            Project Information</a>
                        </H3>
                    </div>

                    
            <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">

<form id="defaultForm"  class="form-horizontal fv-form fv-form-bootstrap" method="post" action="userEditProfileVerify.php">
<!-- Form Name -->
 <input type="hidden" name="projid" value="<?php echo $autoid; ?>">
<input type="hidden" name="Mode" value="<?php echo $mode; ?>"/>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Client</label>  
  <div class="col-md-6">
  <input required="" id="textinput" name="userClient" placeholder="Enter Client name" class="form-control input-md" required="" type="text" value="<?php if ($mode=='N'){echo "";}else{echo $row1['client'];} ?>">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-3 control-label" for="selectbasic">Project Title</label>
  <div class="col-md-6">
  <input id="textinput" name="userProjectTitle" placeholder="Enter Project Title" class="form-control input-md" required="" type="text" value="<?php if ($mode=='N'){echo "";}else{echo $row1['project_title'];} ?>">  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-3 control-label" for="selectbasic">Duration</label>
  <div class="col-md-2"> 
                <?php
                    $query3= "SELECT * FROM `tbl_list_mst` WHERE `type`= 'Project_Duration' order by `autoid`";
                    $result3 = mysqli_query($conn,$query3);
                    echo "<select data-fv-notempty-message='The country is required' data-fv-notempty=''data-fv-field='country' id='selectbasic' name='userDuration' class='form-control'>";
                    $selectedid3=$row1['duration'];
                    while($re3=$result3->fetch_assoc())
                    {
                          $dropid3=$re3['autoid'];
                        $value3=$re3['Value'];
                        if($selectedid3==$dropid3)
                        echo'<option value="'.$dropid3.'" selected="selected">'.$value3.'</option>';
                           else
                         echo '<option value="'.$dropid3.'" >'.$value3.'</option>';
                    
                    }
                    echo"</select>";
                ?> 
  </div>
  		<label class="col-md-1 control-label" for="textinput">Location</label>  
  <div class="col-md-3">
  <input required="" id="textinput" name="userLocation" placeholder="Enter Project Location" class="form-control input-md" type="text" value="<?php if ($mode=='N'){echo "";}else{echo $row1['location'];} ?>">
  </div>  		
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-3 control-label" for="text area">Project Details</label>
  <div class="col-md-6">                     
    <textarea required="" class="form-control" id="text area" name="userProjectDetails" value="<?php if ($mode=='N'){echo "";}else{echo $row1['project_details'];} ?>"><?php if ($mode=='N'){echo "";}else{echo $row1['project_details'];} ?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Role</label>  
  <div class="col-md-2">
  <input id="textinput" name="userRole" placeholder="Role played in Project" class="form-control input-md" type="text" value="<?php if ($mode=='N'){echo "";}else{echo $row1['Role'];} ?>">
  </div>
  
  <label class="col-md-1 control-label" for="textinput">Skill Used</label>  
  <div class="col-md-3">
  <input id="textinput" name="userSkillUsed" placeholder="Used Skills in Project" class="form-control input-md" required="" type="text" value="<?php if ($mode=='N'){echo "";}else{echo $row1['skill_used'];} ?>">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for="singlebutton"></label>
  <div style="text-align: center;" class="col-md-5">
    <button id="singlebutton" name="userProjectSaveButton" class="btn btn-primary">Save</button>
  	<button id="btnclear1" name="btnNext1" type="reset"	  class="btn btn-primary">Reset</button>
  </div>
</div>
</form>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
    
    <!--<?php
    $var = $_COOKIE['auth_username'];
	echo $var;
	echo "signed up";
    ?>-->
    <?php
    include_once './Development/commonfiles/footer.php';
	include_once 'user_profile_data_fetch.php';
    ?>