 <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Account</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>Account</span></li>
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
        <div class="col-lg-3">
          <div class="account-sidebar account-tab mb-sm-30">
            <div class="dark-bg tab-title-bg">
              <div class="heading-part">
                <div class="sub-title"><span></span> My Account</div>
              </div>
            </div>
            <div class="account-tab-inner">
              <ul class="account-tab-stap">
                <li id="step1" class="active"> <a href="javascript:void(0)">My Dashboard<i class="fa fa-angle-right"></i> </a> </li>
                <li id="step2"> <a href="javascript:void(0)">Account Details<i class="fa fa-angle-right"></i> </a> </li>
                <li id="step3"> <a href="javascript:void(0)">My Order List<i class="fa fa-angle-right"></i> </a> </li>
                <li id="step4"> <a href="javascript:void(0)">Change Password<i class="fa fa-angle-right"></i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div id="data-step1" class="account-content" data-temp="tabdata">
            <div class="row">
              <div class="col-12">
                <div class="heading-part heading-bg mb-30">
                  <h2 class="heading m-0">Account Dashboard</h2>
                </div>
              </div>
            </div>
            <?php  
              $userdata=$this->session->userdata('usersdata');
            ?>
            <div class="mb-30">
              <div class="row">
                <div class="col-12">
                  <div class="heading-part">
                    <h3 class="sub-heading">Hello, <?php echo $userdata['username'] ?></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-0">
              <div class="row">
                <div class="col-12 mb-20">
                  <div class="heading-part">
                    <h3 class="sub-heading">Account Information</h3>
                  </div>
                  <hr>
                </div>
                <div class="col-md-6">
                  <div class="cart-total-table address-box commun-table">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Account Information</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><ul>
                                <li class="inner-heading"> <b><?php echo $userdata['username'] ?></b> </li>
                                <li>
                                  <p><?php echo $userdata['email'] ?>,</p>
                                </li>
                                <li>
                                  <p><?php echo $userdata['contact'] ?>.</p>
                                </li>
                              </ul></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="data-step2" class="account-content" data-temp="tabdata" style="display:none">
            <div class="row">
              <div class="col-12">
                <div class="heading-part heading-bg mb-30">
                  <h2 class="heading m-0">Account Details</h2>
                </div>
              </div>
            </div>
            <div class="m-0">
              <form class="main-form full">
                <div class="mb-20">
                  <div class="row">
                    <div class="col-12 mb-20">
                      <div class="heading-part">
                        <h3 class="sub-heading">ACCOUNT INFORMATION</h3>
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="text" value="<?php echo $userdata['username'] ?>"  required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="email" value="<?php echo $userdata['email'] ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <input type="text" value="<?php echo $userdata['contact'] ?>"  required>
                      </div>
                    </div>
                    
                     <div class="col-md-12">
                        <button class="btn-color" type="submit" name="submit">Update</button>
                    </div>
                    
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div id="data-step3" class="account-content" data-temp="tabdata" style="display:none">
            <div id="form-print" class="admission-form-wrapper">
              <div class="row">
                <div class="col-12">
                  <div class="heading-part heading-bg mb-30">
                    <h2 class="heading m-0">My Orders</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-xs-30">
                  <div class="cart-item-table commun-table">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Order Number </th>
                            <th>## </th>
                            <th>Productm Details</th>
                            <th>Total</th>
                            <th>## </th>
                          </tr>
                        </thead>
                        <tbody>
                             <?php
                                 $sql="SELECT * FROM `tbl_order_items` WHERE `customer_id`='".$userdata['id']."'  LIMIT 5";
                                 $data=$this->db->query($sql)->result();
                                   $i=1;
                                   foreach ($data as $row)  
                                   {  
                                    $originalDate = $row->created_at;
                                    $newDate = date("d-m-Y", strtotime($originalDate));
                                ?> 
                            
                          <tr>
                            <td>
                              <a href="<?php echo base_url()  ?>Web/product_details/<?php echo $row->product_id; ?>">
                                <div>
                                   <p> <?php echo $row->billing_id  ?> </p>
                                </div>
                              </a>
                            </td>
                            <td>
                              <a href="<?php echo base_url()  ?>Web/product_details/<?php echo $row->id; ?>">
                                <div>
                                  <img alt="<?php echo $row->product_name; ?>" src="<?php echo base_url().'uploads/product/'.$row->image; ?>" style="height: 70px;width: 53px;">
                                </div>
                               </a>
                            </td>
                            <td>
                              <div class="product-title"> 
                                <a href="#"><?php echo $row->product_name; ?></a> 
                              </div>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Quantity: </label>
                                  <span class="info-deta"><?php echo $row->quantity; ?></span> 
                                </div>
                              </div>
                            </td>
                            <td>
                             <p>₹ <?php echo $row->sub_total; ?></p>
                            </td>
                           
                            <td>
                              <a href="<?php echo base_url()  ?>Web/invoice/<?php echo $row->billing_id; ?>" style="font-size: 11px;width: 108px;" class="btn btn-color" type="button">Print Invoice</a>
                            </td>
                          </tr>
                          <?php
                            }
                           ?>
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="print-btn text-center mt-30">
                  <button onclick="printDiv('form-print')" class="btn btn-color" type="button">Print</button>
                </div>
              </div>
           </div>
          </div>
          <div id="data-step4" class="account-content" data-temp="tabdata" style="display:none">
            <div class="row">
              <div class="col-12">
                <div class="heading-part heading-bg mb-30">
                  <h2 class="heading m-0">Change Password</h2>
                </div>
              </div>
            </div>
            <form class="main-form full">
              <div class="row">
                <div class="col-12">
                  <div class="input-box">
                    <label for="old-pass">Old-Password</label>
                    <input type="password" placeholder="Old Password" required id="old-pass">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-box">
                    <label for="login-pass">Password</label>
                    <input type="password" placeholder="Enter your Password" required id="login-pass">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-box">
                    <label for="re-enter-pass">Re-enter Password</label>
                    <input type="password" placeholder="Re-enter your Password" required id="re-enter-pass">
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn-color" type="submit" name="submit">Change Password</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 