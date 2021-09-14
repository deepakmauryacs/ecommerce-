  <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Register</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index-2.html">Home</a>/</li>
            <li><span>Register</span></li>
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
              <a style="color:red;"><?php echo validation_errors(); ?></a>
              <form action="<?php echo base_url('User/sing_up')?>" method="post" class="main-form full" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Create your account</h2>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for="f-name">User Name</label>
                      <input type="text" id="username"  name="username" required placeholder="First Name">
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="input-box">
                      <label for="login-email">Contact Number </label>
                      <input id="login-email" type="number" name="contact" min="0" required placeholder="Contact Number">
                    </div>
                  </div>
               
                  <div class="col-12">
                    <div class="input-box">
                      <label for="login-email">Email address</label>
                      <input id="login-email" type="email" name="email" required placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input id="login-pass" type="password" name="password" required placeholder="Enter your Password">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for="re-enter-pass">Re-enter Password</label>
                      <input id="re-enter-pass" type="password" name="confirm_password" required placeholder="Re-enter your Password">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="check-box left-side mb-20"> 
                      <span>
                        <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                        <label for="remember_me">Remember Me</label>
                      </span>
                    </div>
                    <button name="submit" type="submit" class="btn-color right-side">Submit</button>
                  </div>
                  <div class="col-12">
                    <hr>
                    <div class="new-account align-center mt-20"> <span>Already have an account with us</span> <a class="link" title="Register with E-commerce" href="<?php echo base_url('Web/login')?>">Login Here</a> </div>
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
