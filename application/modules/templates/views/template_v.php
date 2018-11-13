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

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
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
                    <a href="#">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner_content">
                    <h1>Apogee</h1>
                    <h3>The New Electronic Treatment Practice</h3>
                    <h6>For Social Service Agencies and Professionals</h6>

                    <form method="POST" action="" class="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="search" placeholder="Enter a client’s stressor (e.g., tantrum, anxiety, rules) and receive an intervention "/>
                            <button><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="what">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><span>What’s an</span> Electronic Treatment Practice?</h2>
                <h4>It’s a web-based software and it contains</h4>
            </div>
        </div>
        <div class="what_cols">
            <div class="row">
                <div class="col-lg-4">
                    <div class="what_col">
                        <div class="what_img"><img src="<?php echo base_url('assets/images/skill.png'); ?>"/></div>
                        <p>A Generator of skills for your client and interventions for you to use</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="what_col">
                        <div class="what_img"><img src="<?php echo base_url('assets/images/library.png'); ?>"/></div>
                        <p>Library of Praxes’ extensive practice material for parents, children, and youth</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="what_col">
                        <div class="what_img"><img src="<?php echo base_url('assets/images/doc.png'); ?>"/></div>
                        <p>Treatment Organizer with service, progress, outcome, and transition planners</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="op">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Organizations</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <img src="<?php echo base_url('assets/images/organization.png'); ?>"/>
                    </div>
                    <div class="col-lg-9">
                        <p>Learn how Apogee can help your staff become more efficient and improve treatment outcomes.</p>
                        <a class="read_more" href="#"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>Provider</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <img src="<?php echo base_url('assets/images/provider.png'); ?>"/>
                    </div>
                    <div class="col-lg-9">
                        <p>Discover how Apogee helps you spend more time with your client and less time with documentation and preparation.</p>
                        <a class="read_more" href="#"> Read More</a>
                    </div>
                </div>
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
<script type="application/javascript" src="//code.jquery.com/jquery-3.3.1.min.js" />
<script type="application/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" />
</html>
