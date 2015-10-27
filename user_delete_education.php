<?php
	include './Development/commonfiles/connection.php';
	include_once './userSession.php';
    include_once 'Development/commonfiles/general_function.php';
?>
<?php
	include_once './Development/commonfiles/header.php';
?>
<title>User Delete Education</title>
<?php
if (($_REQUEST['op'])!="" && ($_REQUEST['id'])!="" && ($_REQUEST['msg'])!="")
{
$autoid=$_REQUEST['id'];// echo $autoid;
$op=$_REQUEST['op'];//operation 


    if($op=='Edu'){
     $query="DELETE FROM `tbl_job_seeker_edu_details` WHERE `autoid`='$autoid'";
     if(mysqli_query($conn, $query)){    
        
              echo "<script>window.location.href='user_Education.php?msg=true';</script>";
      
			}
			else{
				echo mysqli_error($conn);
			}
        
    }
   if ($op=='Exp')
    {       
      $query1="DELETE FROM `tbl_jobseeker_exp_details` WHERE `autoid`='$autoid'";
        if(mysqli_query($conn, $query1)){
              echo "<script>window.location.href='user_Experience.php?msg=true';</script>";
			}
			else{
				echo mysqli_error($conn);
			}
        
    }
    if ($op=='Proj')
    {       
      $query1="DELETE FROM `tbl_job_seeker_proj_details` WHERE `autoid`='$autoid'";
        if(mysqli_query($conn, $query1)){
              echo "<script>window.location.href='user_Project.php?msg=true';</script>";
			}
			else{
				echo mysqli_error($conn);
			}
    }   
    }
?>