<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
</head>

<body>
    <div class="container">
        <div>
            <form method="post" action="<?php echo base_url() ?>User_controller/new_register">
                <div class="form-group">
                    <div id="formdiv">
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>User Name </strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input class="form-control-register" type="text" name="username" placeholder="Name" style="margin-left:0px;font-family:Roboto, sans-serif;">
                            </div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Email </strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input class="form-control-register" type="Email" name="email" placeholder="Email" style="margin-left:0px;font-family:Roboto, sans-serif;">
                            </div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Password</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input class="form-control-register" type="Password" name="password" placeholder="Password" style="margin-left:0px;font-family:Roboto, sans-serif;">
                            </div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Confirm Password</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input class="form-control-register" type="Password" name="confirmpassword" placeholder="Password" style="margin-left:0px;font-family:Roboto, sans-serif;">
                            </div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Company Name</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1" style="font-family:Roboto, sans-serif;">
                                <input class="form-control-register " name="companyname" type="text" placeholder="Company Name" style="margin-left:0px;">
                            </div>
                        </div>
                        
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-12 col-md-4 offset-md-4">
                                <button class="btn btn-light btn-lg" type="reset" style="font-family:Roboto, sans-serif;">Clear </button>
                                <button class="btn btn-light btn-lg" type="submit" style="margin-left:16px;">Submit </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url() ?> assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>