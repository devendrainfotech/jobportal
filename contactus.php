<?php 
	include_once 'userSession.php';
	include_once './Development/commonfiles/header.php';
?>
<title>Contact Us</title>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="contactusVerify.php">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group">
                        	<label class="col-md-3 control-label" for="textinput">First Name:</label>
                            <div class="col-md-8">
                                <input name="contactFirstName" required="" id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textinput">Last Name:</label>
                            <div class="col-md-8">
                                <input name="contactLastName"  id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textinput">Email Address:</label>
                            <div class="col-md-8">
                                <input name="contactEmailAddress" required="" id="email" name="email" type="email" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textinput">Mobile Number:</label>
                            <div class="col-md-8">
                                <input name="contactMobileNumber" required="" id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textinput">Your Message:</label>
                            <div class="col-md-8">
                                <textarea name="contactMessage" required="" class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button name="contactSubmit" type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
</style>
<?php
	include_once './Development/commonfiles/footer.php';
?>