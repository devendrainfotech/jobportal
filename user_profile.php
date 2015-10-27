<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
	include_once 'usercookie.php';
    include_once 'Development/commonfiles/general_function.php';
?>
<title>User Profile</title>
<?php
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
	include_once 'user_profile_tab.php';

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
                            Personal Information</a>
                        </h3>
                    </div>

                    
            <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                            
           <table class="table table-striped table-hover table-bordered" style="width: inherit" id="editable-sample">
        <th style="width: 200px">Full Name</th>
                    <td style="width: 600px"><?php echo jobseekerinfo($conn,'firstname') . " " . jobseekerinfo($conn,'lastname')  ?></td>
			<tr>
				<td>Resume Headline</td>
                <td><?php echo jobseekerinfo($conn,'resume_headline')?></td>
			</tr>
			<tr>
				<td>Job Skill</td>
                <td><?php echo jobseekerinfo($conn,'key_skill')?></td>
                
			</tr>
			<tr>
				<td>Functional Area</td>
                <!-- define above getlist function who gives you list information  -->
                <td><?php echo getlist($conn,jobseekerinfo($conn,'functional_area')) ?></td> 
			</tr>
			<tr>
				<td>Designation / Role </td>
                <td><?php echo getlist($conn,jobseekerinfo($conn,'role')) ?></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
                  <td><?php echo date_format(date_create(jobseekerinfo($conn,'dateofbirth')),'d/m/Y') ?></td>
			</tr>
			<tr>
				<td>Email id</td>
                <td><?php echo jobseekerinfo($conn,'emailid') ?></td>
			</tr>
			<tr>
				<td>Mobile Number</td>
                <td><?php echo jobseekerinfo($conn,'Mobileno') ?></td>
			</tr>
			<tr>
				<td>Gender</td>
                <td><?php if (jobseekerinfo($conn,'Gender')=='M') echo 'Male'; else echo 'Female';  ?></td>
			</tr>
			<tr>
				<td>Address:</td>
             <!--   // define above getContactinfo function who gives you Contact information -->
                <td><?php echo jobseekerinfo($conn,'address')?></td>
			</tr>
			<tr>
				<td>Pincode:</td>
                <td><?php echo jobseekerinfo($conn,'pincode')?></td>
			</tr>
			<!--<tr>
				<td>Home Town / city</td>
                <td><?php echo getCityinfo($conn,jobseekerinfo($conn,'cityid'))?></td>
			</tr>-->
            <td colspan="2" align="center">
            <a class="edit btn btn-primary form-control" style="width: 100px" href="user_edit_profile.php?mode=E">Edit</a>
            </td>
            </tr>
               </tbody>
             
		</table>        
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