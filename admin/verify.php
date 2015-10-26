<?php	
	if( isset( $_REQUEST['admin_name'] ) ){
		if( isset( $_REQUEST['admin_password'] ) ){
		$name = $_REQUEST['admin_name'];
		$password = $_REQUEST['admin_password'];
		
		//$con = mysqli_connect("fdb7.biz.ht","1936711_job","jobportal123","1936711_job",3306);
		$con = mysqli_connect("localhost","root","","JobPortal");
		if(mysqli_connect_errno()){
			echo "Failed to connect to mysql".mysqli_connect_error();
		}
		else{
			echo "<br/>Connected!!<br/>";
			$query = "select * from adminmst where admin_name='$name' and password='$password'";
			echo $query;
			$result = mysqli_query($con,$query);

			if( mysqli_num_rows($result) > 0 ){
				//setcookie('admin_name', $name, time() + (86400 * 30), "/");
				session_start();
				$_SESSION['admin_name'] = $name;
				//header("location:profile.php");
				echo("<script>location.href = 'profile.php';</script>");
			}
			else{
				echo("<script>location.href = 'index.php?msg=error';</script>");
				//header("location:index.php?msg=error");
			}
		}
		}
	}
?>