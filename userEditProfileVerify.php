<?php
	include './Development/commonfiles/connection.php';
	include_once './userSession.php';
    include_once 'Development/commonfiles/general_function.php';
?>
<title>User Edit Profile</title>
<?php

	if(isset($_POST['userBasicSaveButton'])){
        $jobseeker_id=$_SESSION['Userid'];
		$userfirstname = $_POST['userFirstName'];
		$userlastname = $_POST['userLastName'];
		$userresumeheadline = $_POST['userResumeHeadline'];
		$userjobskill = $_POST['userJobSkill'];
		$userfunctionalarea = $_POST['userFunctionalArea'];
		$userrole = $_POST['userRole'];
		$userdateofbirth = $_POST['userDateofBirth'];
		$useremailid = $_POST['userEmailId'];
		$usermobilenumber = $_POST['userMobileNumber'];
		$usergender = $_POST['userGender'];  	
		$useraddress = $_POST['userAddress'];
		$userpincode = $_POST['userPincode'];
		$contactid=jobseekerinfo($conn,'contact_id');
        //$userdateofbirth1=date_format(date_create(jobseekerinfo($conn,$userdateofbirth)),'Y-m-d');
        $userdateofbirth1=date('Y-d-m',strtotime($userdateofbirth));
		// make a error handling includeing the empty function....:)
		// role remains
		
			//$query = "INSERT INTO `tbljobseekermst`(`firstname`,`lastname`,`resume_headline`,`key_skill`,`functional_aera`,`role`,`dateofbirth`,`emailid`,`pincode`,`mobilenumber`,`address`,`city`) VALUES ('$userfirstname','$userlastname','$userresumeheadline','$userjobskill','$userfunctionalarea','$userrole','$userdateofbirth','$useremailid','$usermobilenumber','$useraddress','$userpincode','$usercity')";
        
			$query ="UPDATE `tbljobseekermst` 
                    SET `firstname` = '$userfirstname',
                        `lastname` = '$userlastname',
                        `resume_headline` = '$userresumeheadline',
                        `key_skill` = '$userjobskill',
                        `functional_area` = '$userfunctionalarea',
                        `dateofbirth` = '$userdateofbirth1',
                        `mobileno` = '$usermobilenumber',
                        `emailid`='$useremailid',
                        `address`='$useraddress',
                        `pincode`='$userpincode',
                        `role` = '$userrole',                        
                        
                        `gender`='$usergender'
                       
                  WHERE `jobseeker_id` = '$jobseeker_id'";
        
          /*  $query1 ="UPDATE `tblcontactmst`
                     SET `address`='$useraddress',
                         `city`='$usercity',
                         `pincode`='$userpincode',
                         `category`='',
                         `nationality`='',
                         `marital_status`=''
                    WHERE `contact_id` ='$contactid'";
            */            
			if(mysqli_query($conn,$query)){
				header('location:user_profile.php');
			}
			else{
				echo mysqli_error($conn);
				echo "not";
			}
	}
// end of the basic information.....
//Start Education Information Insert and update code.....
	if(isset($_POST['userEducationSaveButton'])){
		$userdegree = $_POST['userDegree'];
		$useruniversity = $_POST['userUniversity'];
		$userSpecialization = $_POST['userSpecialization'];
		$userpassingyear = $_POST['userPassingYear'];
        $userPercentage =$_POST['userPercentage'];
        $operationmode=$_POST['Mode'];
        $usereduid=$_POST['eduid'];
        $jobseeker_id1=$_SESSION['Userid'];
		$xyz='NULL';
		if($operationmode == 'N'){
            $query2="INSERT INTO tbl_job_seeker_edu_details (Degree,board_name, specialization , passing_year, jobseekerid,Percentage) VALUES ('$userdegree','$useruniversity','$userSpecialization','$userpassingyear','$jobseeker_id1', '$userPercentage')";
        }
        else
        {
            $query2="UPDATE `tbl_job_seeker_edu_details` SET `Degree`='$userdegree',`board_name`='$useruniversity',`specialization`='$userSpecialization',`passing_year`='$userpassingyear',`Percentage`='$userPercentage' WHERE `autoid`='$usereduid'";
        }
        
        if(mysqli_query($conn,$query2)) {
				header('location:user_Education.php');
			}
			else{
				echo mysqli_error($conn);
				echo "not";
			}
    }
//End Education Information Insert and update code.....
        

//Start Experience Information Insert and update code.....

if(isset($_POST['userExperienceSaveButton'])){
		$CompanyName = $_POST['userCompanyName'];
		$currentjob = $_POST['currentjob'];
		$userdesignation = $_POST['userDesignation'];
        $userstartdate =  date('Y-d-m',strtotime($_POST['userstartdate']));
        $userenddate = date('Y-d-m',strtotime($_POST['userenddate']));
		$userjobdescription = $_POST['userjobdescription'];
        $operationmode=$_POST['Mode'];
        $userexpid=$_POST['expid'];
        $jobseeker_id1=$_SESSION['Userid'];
		$xyz1='NULL';
		if($operationmode == 'N'){
            $query3="INSERT INTO tbl_jobseeker_exp_details (CompanyName,Designation, Job_StartDate,Job_EndDate,JobDetails,IsCurrentJob,jobseekerid) VALUES ('$CompanyName','$userdesignation','$userstartdate','$userenddate', '$userjobdescription','$currentjob','$jobseeker_id1')";
        }
        else
        {
            $query3="UPDATE `tbl_jobseeker_exp_details` SET `CompanyName`='$CompanyName',`Designation`='$userdesignation',`Job_StartDate`='$userstartdate',`Job_EndDate`='$userenddate',`JobDetails`='$userjobdescription',`IsCurrentJob`='$currentjob' WHERE `autoid`='$userexpid'";
        }
        
        if(mysqli_query($conn,$query3)) {
				header('location:user_Experience.php');
			}
			else{
				echo mysqli_error($conn);
				
			}
    }

        

//End Experience Information Insert and update code.....

//Start Experience Information Insert and update code.....

if(isset($_POST['userProjectSaveButton'])){
			$userclient = $_POST['userClient'];
			$userprojecttitle = $_POST['userProjectTitle'];
			$userduration = $_POST['userDuration'];
			$userlocation = $_POST['userLocation'];
			$userprojectdetails = $_POST['userProjectDetails'];
			$userrole = $_POST['userRole'];
			$userskillused = $_POST['userSkillUsed'];
	        $operationmode=$_POST['Mode'];
        $userprojid=$_POST['projid'];
        $jobseeker_id1=$_SESSION['Userid'];
		$xyz1='NULL';
		if($operationmode == 'N'){
            $query4="INSERT INTO tbl_job_seeker_proj_details (client,project_title,     duration,location,project_details,role,skill_used,jobseekerid) VALUES ('$userclient','$userprojecttitle','$userduration','$userlocation', '$userprojectdetails','$userrole','$userskillused','$jobseeker_id1')";
        }
        else
        {
            $query4 = "UPDATE `tbl_job_seeker_proj_details` SET `client` = '$userclient',`project_title` = '$userprojecttitle',`duration` = '$userduration',`location` = '$userlocation',`project_details` = '$userprojectdetails',`role` = '$userrole',`skill_used` = '$userskillused' WHERE `autoid`='$userprojid'";
        }
        
        if(mysqli_query($conn,$query4)) {
				header('location:user_Project.php');
			}
			else{
				echo mysqli_error($conn);
				
			}		
	}
//End Experience Information Insert and update code.....

	


if(isset($_POST['RecruiterProfileSaveButton'])){
        $recruiterid=$_SESSION['recruiter_id'];
		$userFirstName = $_POST['userFirstName'];
		$userLastName = $_POST['userLastName'];
		$userCompanyName=$_POST['userCompanyName'];
		$CompanyAddress = $_POST['CompanyAddress'];
		$userDesignation = $_POST['userDesignation'];
		$userDateofBirth = $_POST['userDateofBirth'];
		$useremailid = $_POST['userEmailId'];
		$userMobileNumber = $_POST['userMobileNumber'];
		
		
        //$userdateofbirth1=date_format(date_create(jobseekerinfo($conn,$userdateofbirth)),'Y-m-d');
        $userdateofbirth1=date('Y-d-m',strtotime($userDateofBirth));
		// make a error handling includeing the empty function....:)
		// role remains
		
			//$query = "INSERT INTO `tbljobseekermst`(`firstname`,`lastname`,`resume_headline`,`key_skill`,`functional_aera`,`role`,`dateofbirth`,`emailid`,`pincode`,`mobilenumber`,`address`,`city`) VALUES ('$userfirstname','$userlastname','$userresumeheadline','$userjobskill','$userfunctionalarea','$userrole','$userdateofbirth','$useremailid','$usermobilenumber','$useraddress','$userpincode','$usercity')";
        
			$query1 ="UPDATE `tblrecruitermst` 
                    SET `firstname` = '$userFirstName',
                        `lastname` = '$userLastName',
                        `company` = '$userCompanyName',
                        `companyaddress` = '$CompanyAddress',
                        `designation` = '$userDesignation',
                        `dateofbirth` = '$userdateofbirth1',
                        `mobilenumber` = '$userMobileNumber',
                        `companyemailid`='$useremailid'
                  WHERE `recruiterid` = '$recruiterid'";
        
           
                        
			if(mysqli_query($conn,$query1) && mysqli_query($conn,$query1) ){
				header('location:recruiterhomepage.php');
			}
			else{
				echo mysqli_error($conn);
				echo "not";
			}
	}
// end of the basic information.....

?>