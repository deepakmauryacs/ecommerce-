<!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Checkout</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a>/</li>
            <li><a href="<?php echo base_url('Web/cart');?>">Cart</a>/</li>
            <li><span>Checkout</span></li>
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
          <div class="checkout-step mb-40">
            <ul>
              <li class="active"> 
                <a href="#">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">1</div>
                  </div>
                  <span>Shipping</span> 
                </a> 
              </li>
              <li> 
                <a href="#">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">2</div>
                  </div>
                  <span>Order Overview</span> 
                </a> 
              </li>
              <li> 
                <a href="#">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">3</div>
                  </div>
                  <span>Payment</span> 
                </a> 
              </li>
              <li> 
                <a href="#">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">4</div>
                  </div>
                  <span>Order Complete</span> 
                </a> 
              </li>
              <li>
                <div class="step">
                  <div class="line"></div>
                </div>
              </li>
            </ul>
            <hr>
           </div>
        <?php 
        $data=$this->session->userdata('usersdata');
         if(!empty($data)){
        ?>
          <div class="checkout-content" >
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-8">
                <div class="heading-part">
                  <h2 class="heading">Delivery Address</h2>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-8">
                  <div class="row mb-20">
                   <form action="<?php echo base_url('Checkout/conf_address'); ?>" method="post"  enctype="multipart/form-data" >
                    <div class="col-12 mb-20">
                          <?php 
                            // $data=$this->session->userdata('usersdata');
                            // $id=$data['id'];
                          //  print_r($data);
                          ?>
                           <?php
                            if(!empty($address)){
                            foreach ($address as $row)
                            {
                           ?>
                           <div class="row">
                           <div class="col-sm-9">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="shipping_address" id="exampleRadios1" value="<?php echo $row->id; ?><"  required>
                              <label class="form-check-label" for="exampleRadios1">
                               <span><?php echo $row->name; ?></span> <span><?php echo $row->number; ?></span> <br>
                                <span><?php echo $row->address; ?> </span>
                              </label>
                            </div>
                            </div>
                            <div class="col-sm-3">
                             <button class="btn btn-primary btn-block my-4" type="submit"><a href="<?php echo base_url(); ?>Web/edit_address/<?php echo $row->id;?>">Edit</a></button>
                            </div>
                            </div>
                          <?php
                             }
                            }
                          ?>
                         
                         <button class="btn btn-danger btn-block my-4" type="submit"> Deliver Here </button>
                       </div>
                      </form>
                   </div>
                 <form action="<?php echo base_url('User/address'); ?>" method="post"  enctype="multipart/form-data"  class="main-form full">  
               
                  <div class="row mb-20">
                    <div class="col-12 mb-20">
                      <div class="heading-part">
                            <h3 class="heading">ADD A NEW ADDRESS</h3>
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="text" name="name"  placeholder="Name" required>
                      </div>
                    </div>
                    
                     <div class="col-md-6">
                      <div class="input-box">
                        <input type="tel" name="number" min="0" placeholder="10-digit mobile number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="email" name="email" required placeholder="Email Address">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="number"  min="0" name="pincode" required placeholder="Pincode">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-box">
                        <input type="text" name="locality" required placeholder="Locality">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-box">
                         <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">
                             Address (Area and Street)
                         </textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box select-dropdown">
                        <fieldset>
                          <select onchange="getState(this.value)" name="country" class="option-drop" id="shippingcountryid">
                            <option selected="" value="">Select Country</option>
                             <?php
                              foreach ($country as $key => $value) {
                             ?>
                            <option value="<?php echo $value->id ;?>"><?php echo $value->name;?></option>
                            <?php }  ?>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box select-dropdown">
                        <fieldset>
                          <select name="state" onchange="getState(this.value)" class="option-drop" id="shippingstateid">
                            <option value="">Select a State</option>
                             <?php
                              foreach ($state as $key => $value) {
                             ?>
                            <option value="<?php echo $value->id ;?>"><?php echo $value->name;?></option>
                            <?php }  ?>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-box select-dropdown">
                        <fieldset>
                          <select name="city" onchange="getState(this.value)" class="option-drop" id="shippingstateid">
                            <option value="">Select a City</option>
                             <?php
                              foreach ($city as $key => $value) {
                             ?>
                            <option value="<?php echo $value->id ;?>"><?php echo $value->name;?></option>
                              <?php }  ?>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="text" name="landmark" required placeholder="Landmark (Optional)">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="number" min="0" name="alternate_contact" required placeholder="Alternate Phone (Optional)">
                      </div>
                    </div>
                     <div class="col-md-12">
                         <button class="btn btn-primary btn-block my-4" type="submit">Save Address</button> 
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
         <?php
         }
         else{
         ?>
         <section class="checkout-section">
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
                      <form action="<?php echo base_url('User/checkout_login')?>" method="post" class="main-form full" enctype="multipart/form-data">
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
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </section>
         <?php
         }
         ?>
        </div>
      </div>
    </div>
  </section>
  
 <script>
   function getState(country_id){
                if(country_id>0){
                    $.ajax({
                        type: "POST", 
                        url: '<?=base_url('WebStudent/getState');?>',
                        dataType:'json',
                        data: {country_id:country_id}, 
                        beforeSend:function() {},
                        success:function(responce) 
                        {
                          $('#state').html(responce);
                        },
                        error:function() 
                        {
                          Command: toastr["error"]("BOOM.....", "Error...");
                        },
                        complete:function() { }
                    });
                }else{
                    $('#state').html('<option value="0">Select State</option>');
                }
            }
 </script>