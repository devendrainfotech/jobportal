<?php
	function SuccessMessage($heading,$detail="",$information="",$redirecting=""){
		echo'<div class="container">
    	<div class="row">
        <div style="margin-top:70px; margin-bottom:70px;" class="col-sm-6 col-md-6 col-md-offset-3">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <h2><span class="glyphicon glyphicon-ok"></span> <strong>'.$heading.'</strong></h2>
                <hr class="message-inner-separator">
                <blockquote>'.$detail.'</blockquote>
                <p>'.$information.'</p>
                <p>'.$redirecting.'</p>               	
            </div>
        </div>
        </div>
        </div>';				
	}

	function InformationMessage($heading,$detail="",$information="",$redirecting=""){
		echo'<div class="container">
    	<div class="row">
        <div style="margin-top:70px; margin-bottom:70px;" class="col-sm-6 col-md-6 col-md-offset-3">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <h2><span class="glyphicon glyphicon-info-sign"></span> <strong>'.$heading.'</strong></h2>
                <hr class="message-inner-separator">
                <blockquote>'.$detail.'</blockquote>
                <p>'.$information.'</p>
                <p>'.$redirecting.'</p>               	
            </div>
        </div>
        </div>
        </div>';				
	}

	function WarningMessage($heading,$detail="",$information="",$redirecting=""){
		echo'<div class="container">
    	<div class="row">
        <div style="margin-top:70px; margin-bottom:70px;" class="col-sm-6 col-md-6 col-md-offset-3">
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <h2><span class="glyphicon glyphicon-record"></span> <strong>'.$heading.'</strong></h2>
                <hr class="message-inner-separator">
                <blockquote>'.$detail.'</blockquote>
                <p>'.$information.'</p>
                <p>'.$redirecting.'</p>               	
            </div>
        </div>
        </div>
        </div>';				
	}

	function ErrorMessage($heading,$detail="",$information="",$redirecting=""){
		echo'<div class="container">
    	<div class="row">
        <div style="margin-top:70px; margin-bottom:70px;" class="col-sm-6 col-md-6 col-md-offset-3">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <h2><span class="glyphicon glyphicon-hand-right"></span> <strong>'.$heading.'</strong></h2>
                <hr class="message-inner-separator">
                <blockquote>'.$detail.'</blockquote>
                <p>'.$information.'</p>
                <p>'.$redirecting.'</p>               	
            </div>
        </div>
        </div>
        </div>';				
	}
?>
<!--<?php
	SuccessMessage("Successfully Loged IN","you","You have been just signed up please refer to the other message");
	InformationMessage("Successfully Loged IN","you","You have been just signed up please refer to the other message");
	WarningMessage("Successfully Loged IN","you","You have been just signed up please refer to the other message");
	ErrorMessage("Successfully Loged IN","you","You have been just signed up please refer to the other message");
	
?>-->