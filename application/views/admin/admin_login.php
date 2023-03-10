<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?php echo base_url() ?>admin_asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>admin_asset/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo base_url() ?>admin_asset/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo base_url() ?>admin_asset/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="<?php echo base_url() ?>admin_asset/css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="<?php echo base_url() ?>admin_asset/css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>admin_asset/img/favicon.ico">
        <!-- end: Favicon -->

        <style type="text/css">
            body { background: url(<?php echo base_url() ?>admin_asset/img/bg-login.jpg) !important; }
        </style>

    </head>

    <body>
        <div class="container-fluid-full">
            <div class="row-fluid">
                <div class="login-box">
                    <div class="icons">
                        <a href="<?php echo base_url(); ?>"><i class="halflings-icon home"></i></a>
                        <a href="#"><i class="halflings-icon cog"></i></a>
                    </div>
                    <h2>Login to your account</h2>
                    <h3 style="color:red">
                        <?php
                        $message = $this->session->userdata('message');
                        if ($message) {
                            echo $message;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </h3>
                    <form class="form-horizontal" action="<?php echo base_url() ?>login_check" method="post">
                        <fieldset>

                            <div class="input-prepend" title="Username">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input class="input-large span10" name="email_address" id="username" type="text" placeholder="type username"/>
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
                            </div>
                            <div class="clearfix"></div>

                            <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                            <div class="button-login">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="clearfix"></div>
                        </fieldset>
                    </form>
                    <hr>
                    <h3>Forgot Password?</h3>
                    <p>
                        No problem, <a href="#">click here</a> to get a new password.
                    </p>
                </div><!--/span-->
            </div><!--/row-->
        </div><!--/.fluid-container-->

    </body>
</html>
