<!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Update</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="#">Home</a>/</li>
            <li><a href="#">Cart</a>/</li>
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
            <hr>
          </div>
          <div class="checkout-content" >
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-8">
                <div class="heading-part">
                  <h2 class="heading">Update Address</h2>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-8">
                 <form action="<?php echo base_url('Web/update_address'); ?>" method="post"  enctype="multipart/form-data"  class="main-form full">  
               
                  <div class="row mb-20">
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="text" name="name" value="<?php if(!empty($edit_data)) echo( $edit_data->name); ?>" placeholder="Name" required>
                        <input type="hidden" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id); ?>">
                      </div>
                    </div>
                    
                     <div class="col-md-6">
                      <div class="input-box">
                        <input type="text" name="number" value="<?php if(!empty($edit_data)) echo( $edit_data->number); ?>"  placeholder="10-digit mobile number" required>
                      </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="email" name="email" value="<?php if(!empty($edit_data)) echo( $edit_data->email); ?>" required placeholder="Email Address">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="text"  name="pincode" value="<?php if(!empty($edit_data)) echo( $edit_data->pincode); ?>" required placeholder="Pincode">
                      </div>
                    </div>
                 
                   
                    <div class="col-md-12">
                      <div class="input-box">
                        <input type="text" name="locality" value="<?php if(!empty($edit_data)) echo( $edit_data->locality); ?>" required placeholder="Locality">
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="input-box">
                         <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"><?php if(!empty($edit_data)) echo( $edit_data->address); ?>
                         </textarea>
                      </div>
                    </div>
                    

                    <div class="col-md-6">
                      <div class="input-box select-dropdown">
                        <fieldset>
                          <select name="country" class="option-drop" id="shippingcountryid">
                            <option selected="" value="">Select Country</option>
                              <?php
                            if(!empty($info)){
                               foreach ($info as $row)
                                {
                              ?>
                            <option <?php if($row->id ==  $edit_data->id){ echo 'selected="selected"'; } ?>  value="<?php echo $row->id; ?>"> INDIA </option>
                         <?php
                                }
                            }
                         ?>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box select-dropdown">
                        <fieldset>
                          <select name="state" class="option-drop" id="shippingstateid">
                            <option value="">Select a State</option>
                             <?php
                            if(!empty($info)){
                               foreach ($info as $row)
                                {
                              ?>
                            <option <?php if($row->id ==  $edit_data->id){ echo 'selected="selected"'; } ?>  value="<?php echo $row->state; ?>">Andhara Pardesh</option>
                           <?php
                                }
                            }
                           ?>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-box select-dropdown">
                        <fieldset>
                          <select name="city" class="option-drop" id="shippingstateid">
                            <option value="">Select a State</option>
                            <?php
                            if(!empty($info)){
                               foreach ($info as $row)
                                {
                              ?>
                            <option <?php if($row->id ==  $edit_data->id){ echo 'selected="selected"'; } ?>  value="<?php echo $row->city; ?>">Andhara Pradesh</option>
                            <?php
                                }
                            }
                            ?>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="text" name="landmark" value="<?php if(!empty($edit_data)) echo( $edit_data->landmark); ?>" required placeholder="Landmark (Optional)">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="text" name="alternate_contact" value="<?php if(!empty($edit_data)) echo( $edit_data->alternate_contact); ?>" required placeholder="Alternate Phone (Optional)">
                      </div>
                    </div>
                     <div class="col-md-12">
                         <button class="btn btn-primary btn-block my-4" type="submit">Update</button> 
                    </div>
                    
                    
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
  
 