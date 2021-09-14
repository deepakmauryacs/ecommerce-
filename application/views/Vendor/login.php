<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="http://demo.harnishdesign.net/html/oxyy/images/favicon.png" rel="icon" />
<title>Vendor Dashboard Login </title>
<meta name="description" content="Login and Register Form Html Template">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
========================= -->
<link rel='stylesheet' href='<?php echo base_url() ?>assetes/dashboard/login/css/font_family.css' type='text/css'>



<!-- Stylesheet
========================= -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assetes/dashboard/login/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assetes/dashboard/login/css/all.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assetes/dashboard/login/css/stylesheet.css" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>
<body>

<!-- Preloader -->
<div class="preloader preloader-dark">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register bg-dark">
  <div class="container">
    <div class="row no-gutters min-vh-100 py-5"> 
      <!-- Welcome Text
      ========================= -->
      <div class="col-lg-7 shadow-lg">
        <div class="hero-wrap d-flex align-items-center rounded-lg rounded-right-0 h-100">
          <div class="hero-mask opacity-9 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('<?php echo base_url() ?>assetes/dashboard/login/img/login-bg.jpg');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row no-gutters">
              <div class="col-10 col-lg-10 mx-auto">
                <div class="logo mt-5 mb-5 mb-lg-0"> <a href="#" title="Oxyy"><img src="<?php echo base_url() ?>assetes/dashboard/login/img/login_logo.png"  style="height: 150px;"alt="Oxyy"></a> </div>
              </div>
            </div>
            <div class="row no-gutters my-auto">
              <div class="col-10 col-lg-10 mx-auto">
                <h1 class="text-11 text-white mb-3">Welcome back!</h1>
                <p class="text-5 text-white line-height-4 mb-4">Get access to your Orders, Wishlist and Recommendations.</p>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End --> 
      
      <!-- Login Form
      ========================= -->
      <div class="col-lg-5 shadow-lg d-flex align-items-center rounded-lg rounded-left-0 bg-dark">
        <div class="container my-auto py-5">
          <div class="row">
            <div class="col-11 col-lg-10 mx-auto">
              <h3 class="text-white text-center mb-4">Sign In</h3>
                 <?php if ($this->session->flashdata('adminnotlogin')): ?>
                 <div class="alert text-white bg-danger alert-dismissible" role="alert">
                 <div class="iq-alert-text"> <?php echo $this->session->flashdata('adminnotlogin'); ?></div>
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <i class="ri-close-line"></i>
                 </button>
                 </div>
                <?php endif; ?>
              <form id="loginForm" action="<?php echo base_url() ?>Vendor/Vendor_login/vendor_login" class="form-dark" method="post">
                <div class="form-group">
                  <label class="text-light" for="emailAddress">Email Address</label>
                  <input type="email" class="form-control" name="email" id="emailAddress" required placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label class="text-light" for="loginPassword">Password</label>
                  <input type="password" class="form-control" name="password" id="loginPassword" required placeholder="Enter Password">
                </div>
               <!--  <div class="row">
                  <div class="col-sm text-2 text-right"><a class="btn-link" href="http://demo.harnishdesign.net/html/oxyy/forgot-Password-2.html">Forgot Password ?</a></div>
                </div> -->
                <button class="btn btn-primary btn-block my-4" type="submit">Sign In</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End --> 
    </div>
  </div>
</div>

<!-- Video Modal
========================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-transparent border-0">
      <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body p-0">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal end --> 

<!-- Script --> 
<script src="<?php echo base_url() ?>assetes/dashboard/login/js/jquery.min.js"></script> 
<script src="<?php echo base_url() ?>assetes/dashboard/login/js/bootstrap.bundle.min.js"></script> 
<!-- Style Switcher --> 
<script src="<?php echo base_url() ?>assetes/dashboard/login/js/switcher.min.js"></script> 
<script src="<?php echo base_url() ?>assetes/dashboard/login/js/theme.js"></script>
</body>
</html>