<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
    include_once './Development/commonfiles/general_function.php';
?>
<?php
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
    include_once 'user_profile_tab.php';
?>
<title>User Edit Education</title>
<?php
    $mode=$_GET['mode'];
   
    if(isset($_GET['id'])!=null )
    {
        $autoid=$_GET['id'];
        $query1= "SELECT * FROM `tbl_job_seeker_edu_details` WHERE `autoid` = '$autoid'";
        $result1 = mysqli_query($conn, $query1);
        $row1= mysqli_fetch_assoc($result1);  
    }
?>
<div class="container">
<div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">  
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"      href="#collapseOne">
                            Education Information</a>
                        </H3>
                    </div>

        
            <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
<form id="defaultForm" class="form-horizontal fv-form fv-form-bootstrap" novalidate="novalidate" method="post" action="userEditProfileVerify.php">
		 	  <input type="hidden" name="eduid" value="<?php echo $autoid; ?>">
            <input type="hidden" name="Mode" value="<?php echo $mode; ?>"/>
            
                    
			<div class="form-group">
				<label class="col-xs-12 control-label" ><br></label>  
                <label class="col-sm-3 control-label" for="txtUniversity">University Name</label>
                <div class="col-md-7">
                <input data-fv-notempty-message="The University name is required and cannot be empty" id="txtUniversity" type="text" name="userUniversity" placeholder="Enter University / Institute Name	" class="form-control" required="" value="<?php if ($mode=='N'){echo "";}else{echo $row1['board_name'];} ?>"  >  
                </div>
              </div>
              
         <div class="form-group">
			  <label class="col-md-3 control-label" for="drpDegree">Degree Name</label>
			  <div class="col-md-3">
                 <?php
                    $query2= "SELECT * FROM `tbl_list_mst` WHERE `type`= 'Degree'";
                    $result2 = mysqli_query($conn,$query2);
                    echo "<select name='userDegree' class='form-control'  required=''>";
                   $selectedid2=$row1['Degree'];
                    while($re2=$result2->fetch_assoc())
                    {
                        $dropid2=$re2['autoid'];
                        $value2=$re2['Value'];
                        if($selectedid2==$dropid2)
                        echo'<option value="'.$dropid2.'" selected="selected">'.$value2.'</option>';
                           else
                         echo '<option value="'.$dropid2.'" >'.$value2.'</option>';
                    }
                    echo"</select>";
                ?> 
                  
				</div>	
            <label class="col-sm-2 control-label" for="txtPercentage">Percentage </label>
			  <div class="col-sm-2">
				<input data-fv-notempty-message="The Percentage is required and cannot be empty" id="txtPercentage" type="text" name="userPercentage" placeholder="Enter Percentage" class="form-control" required="" value="<?php 
if ($mode=='N'){echo "";}else{echo $row1['Percentage'];} ?>" >  
                  </div>    
        </div>
            
        <div class="form-group">
            
			  	<label class="col-sm-3 control-label" for="txtSpecialization">Specialization</label>
			  <div class="col-sm-3">
                  <input data-fv-notempty-message="The Specialization is required and cannot be empty" id="txtSpecialization" type="text" name="userSpecialization" placeholder="Enter Specialization" class="form-control" required="" value="<?php if ($mode=='N'){echo "";}else{ echo $row1['specialization'];} ?>">  
				</div>
            
                 <label class="col-md-2 control-label" for="txtPassingYear">Year of Passing</label>
			  <div class="col-md-2">
                  
                <?php
                    $query3= "SELECT * FROM `tbl_list_mst` WHERE `type`= 'Year' order by `Value` desc";
                    $result3 = mysqli_query($conn,$query3);
                    echo "<select id='drpPassingYear' name='userPassingYear' class='form-control'>";
                    $selectedid3=$row1['passing_year'];
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
                  
        </div>	
			
		
			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="btnsave1"></label>
			  <div class="col-md-8">
				<button id="btnsave1" name="userEducationSaveButton" type="submit"	class="btn btn-primary">Save</button>
				<button id="btnclear1" name="btnNext1" type="reset"	 herf="#tab3" class="btn btn-primary">Reset</button>
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

       
    <!--<?php
    $var = $_COOKIE['auth_username'];
	echo $var;
	echo "signed up";
    ?>-->
    <?php
    include_once './Development/commonfiles/footer.php';
    ?>