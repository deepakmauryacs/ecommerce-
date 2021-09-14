  <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Login</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index-2.html">Home</a>/</li>
            <li><span>Login</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- Bread Crumb END --> 

  <!-- CONTAIN START -->
  <section class="checkout-section ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8 ">
               <?php if ($this->session->flashdata('notlogin')): ?>
                 <div class="alert alert-danger alert-dismissible" style="margin-bottom: 0px;border-radius: 0px;text-align: center;">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('notlogin'); ?>  
                 </div>        
                <?php
                endif; 
                ?>
              <a style="color:red;"><?php echo validation_errors(); ?></a>
              <form action="<?php echo base_url('User/login')?>" method="post" class="main-form full" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Customer Login</h2>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for="login-email">Mobile number</label>
                      <input id="login-email" name="contact" type="text"  required placeholder="Mobile number">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input id="login-pass" name="password" type="password" required placeholder="Enter your Password">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="check-box left-side"> 
                      <span>
                        <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                        <label for="remember_me">Remember Me</label>
                      </span>
                    </div>
                    <button name="submit" type="submit" class="btn-color right-side">Log In</button>
                  </div>
                  <div class="col-12"> <a title="Forgot Password" class="forgot-password mtb-20" href="<?php echo base_url('Web/forget'); ?>">Forgot your password?</a>
                    <hr>
                  </div>
                  <div class="col-12">
                    <div class="new-account align-center mt-20"><a class="link" title="Register with Stylexpo" href="<?php echo base_url('Web/signup');?>">Create New Account</a> </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 

