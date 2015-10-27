<?php
	include_once("header.php");
?>
<div class="col-lg-12 col-sm-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<center><h1 class="panel-title">Error Page</h1></center>
		</div>
		<div class="panel-body">
		Error : <?php echo (isset($_REQUEST['msg']) ? $_REQUEST['msg'] : 'Unknown');?>
		</div>
	</div>
</div>
<?php
	include_once("footer.php");
?>