<?php
session_start();
if (isset($_SESSION['admin_name'])) {
	session_destroy();
	header("location:../index.php");
}
?>