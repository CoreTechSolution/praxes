<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('admin_assets/css/footable.bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('admin_assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <script type="application/javascript" src="//code.jquery.com/jquery-3.3.1.min.js" />
    <script type="application/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" />
    <script src="<?php echo base_url('admin_assets/js/footable.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/additional-methods.js'); ?>"></script>
</head>
<body>
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="logo">
                    <a href="#"><img src="<?php echo base_url('assets/images/logo.jpg'); ?>"/></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="mainnav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Faq’s</a></li>
                        <li><a href="#">Providers</a></li>
                        <li><a href="#">Organizations</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="login">
                    <a href="<?php echo base_url('login'); ?>">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper1 wrapper1_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="usernavmenu">
                    <ul>
                        <li><a href="<?php echo base_url('users/dashboard'); ?>">Dashboard</a></li>
                        <li><a href="<?php echo base_url('users/manage-staff'); ?>">Manage Staff</a></li>
                        <li><a href="<?php echo base_url('users/logout'); ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9">
			    <?php $this->load->view($content_view); ?>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4>Menu</h4>
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Praxes</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Request Demo</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <h4>Log In</h4>
            </div>
            <div class="col-lg-4">
                <p>&copy; 2018, PRAXES<br/>Terms of Use  I  Privacy Policy</p>
                <h4>Connect with us</h4>
                <ul class="footer_social_link">
                    <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>