<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
	include_once 'Development/commonfiles/general_function.php';
?>
<title>User Experience</title>
<?php
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
	include_once 'user_profile_tab.php';
?>
<?php
   if(@$_GET['msg']=='true')
      {
    // echo("<html> <body> <blockquote> Action performed successfully </blockquote> </body> </html>");
?>
<script>
    setTimeout(function () {
     window.location.href = "user_Experience.php"; //will redirect whatever url you put
    }, 100);
  </script>
<?php
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
                            Experience Information</a>
                        </h3>
                    </div>

                    
            <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
             
           <table class="table table-striped table-hover table-bordered" style="width: inherit" id="editable-sample">
 		 <thead>
		<tr>
            <th>Company Name</th>
            <th>Designation</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th style="table-layout:fixed;width: 200px;">Job Profile</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
		</thead>
    
    <?php 
        $id=$_SESSION['Userid']; //login user id....
    $query5 = "SELECT * FROM tbl_jobseeker_exp_details WHERE Jobseekerid='".$id."';";
    $result5 = mysqli_query($conn, $query5);
    while($row5=mysqli_fetch_assoc($result5))
    {
    ?>
    <tbody>
     <tr class="">
         <td>
                <?php echo $row5['CompanyName']; ?>
         </td>
         <td>
                <?php echo $row5['Designation'];?>
         </td>
         <td>
                <?php echo  date_format(date_create($row5['Job_StartDate']),'d/m/Y')?>
         </td>
         <td>
                <?php echo date_format(date_create($row5['Job_EndDate']),'d/m/Y')?>    
         </td>
         <td >
                <?php echo $row5['JobDetails']?>    
         </td>
         <td>
         <a href="user_edit_experience.php?id=<?php echo $row5['autoid']?>&mode=E" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> </a>
        </td>
         <td>
         <a href="user_delete_education.php?id=<?php echo $row5['autoid']?>&msg=D&op=Exp" name="userExperiencedelete" class="btn btn-default" onclick="return confirm('Are you sure you wish to delete this Record?');"><span class="glyphicon glyphicon-trash"></span> </a>
        </td>
        </tr>
    
    </tbody>
    <?php
    }
     ?>
               <tbody>
    <tr>
        <td colspan="7">
            <a href="user_edit_experience.php?&mode=N" class="edit btn btn-default "> Add New <span class="glyphicon glyphicon-plus"></span></a>

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