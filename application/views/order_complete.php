  <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Checkout</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index-2.html">Home</a>/</li>
            <li><a href="cart.html">Cart</a>/</li>
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
              <li> <a href="#">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">1</div>
                </div>
                <span>Shipping</span> </a> </li>
              <li> <a href="#">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">2</div>
                </div>
                <span>Order Overview</span> </a> </li>
              <li> <a href="#">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">3</div>
                </div>
                <span>Payment</span> </a> </li>
              <li class="active"> <a href="#">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">4</div>
                </div>
                <span>Order Complete</span> </a> </li>
              <li>
                <div class="step">
                  <div class="line"></div>
                </div>
              </li>
            </ul>
            <hr>
          </div>
          <div class="checkout-content">
            <div class="row">
              <div class="col-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Order Overview</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 mb-sm-30">
                <div id="form-print" class="admission-form-wrapper">
                  <div class="cart-item-table complete-order-table commun-table mb-30">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Product</th>
                            <th>Product Detail</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php  
                                //print_r($orders); echo "<br>"; print_r($shipping_address); echo "<br>"; print_r($orders_item);
                                if(!empty($orders_item)){
                                    foreach($orders_item as $key=>$value){
                                      $product = $this->db->get_where('tbl_product',['id'=>$value['product_id']])->row_array();
                            ?>
                          <tr>
                            <td>
                              <a href="#">
                                <div class="product-image">
                                  <img alt="Stylexpo" src="<?php echo base_url()."uploads/product/".$product['thumbnail_image'] ?>">
                                </div>
                              </a>
                            </td>
                            <td>
                              <div class="product-title"> 
                                <a href="#"><?=$product['product_name'] ?></a>
                                <div class="product-info-stock-sku m-0">
                                  <div>
                                    <label>Price: </label>
                                    <div class="price-box"> 
                                      <span class="info-deta price">Rs.<?=$product['price'] ?></span> 
                                    </div>
                                  </div>
                                </div>
                                <div class="product-info-stock-sku m-0">
                                  <div>
                                    <label>Quantity: </label>
                                    <span class="info-deta"><?=$value['quantity'] ?></span> 
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <?php
                                    }
                                }
                          ?>
                          <!--<tr>
                            <td>
                              <a href="product-page.html">
                                <div class="product-image">
                                  <img alt="Stylexpo" src="images/2.jpg">
                                </div>
                              </a>
                            </td>
                            <td>
                              <div class="product-title"> 
                                <a href="product-page.html">Cross Colours Camo Print Tank half mengo</a>
                                <div class="product-info-stock-sku m-0">
                                  <div>
                                    <label>Price: </label>
                                    <div class="price-box"> 
                                      <span class="info-deta price">$80.00</span> 
                                    </div>
                                  </div>
                                </div>
                                <div class="product-info-stock-sku m-0">
                                  <div>
                                    <label>Quantity: </label>
                                    <span class="info-deta">1</span> 
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>-->
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="complete-order-detail commun-table mb-30">
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td><b>Order Places :</b></td>
                            <td><?=$orders['created_at'] ?></td>
                          </tr>
                          <tr>
                            <td><b>Total :</b></td>
                            <td><div class="price-box"> <span class="price">Rs.<?=$orders['grand_total'] ?></span> </div></td>
                          </tr>
                          <tr>
                            <td><b>Payment :</b></td>
                            <td><?=$orders['payment_type'] ?></td>
                          </tr>
                          <tr>
                            <td><b>Order No. :</b></td>
                            <td>#<?=$orders['billing_id'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="mb-30">
                    <div class="heading-part">
                      <h3 class="sub-heading">Order Confirmation</h3>
                    </div>
                    <hr>
                    <p class="mt-20">Quisque id fermentum tellus. Donec fringilla mauris nec ligula maximus sodales. Donec ac felis nunc. Fusce placerat volutpat risus, ac fermentum ex tempus eget.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="print-btn">
                      <button onclick="printDiv('form-print')" class="btn btn-color" type="button">Print</button>
                      <div class="right-side float-none-xs mt-sm-30"> 
                        <a class="btn btn-black" href="<?php echo base_url()?>">
                          <span><i class="fa fa-angle-left"></i></span>Continue Shopping
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="cart-total-table address-box commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Shipping Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <ul>
                              <li class="inner-heading"> <b><?=$orders['username'] ?>, <?=$orders['contact'] ?></b> </li>
                              <li>
                                <p><?=$shipping_address['address'] ?>,</p>
                              </li>
                              <li>
                                <p><?=$shipping_address['pincode'] ?></p>
                              </li>
                              <li>
                                <!--<p>India</p>-->
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--<div class="cart-total-table address-box commun-table">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Billing Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <ul>
                              <li class="inner-heading"> <b>Denial tom</b> </li>
                              <li>
                                <p>5-A kadStylexpoi aprtment,opp. vasan eye care,</p>
                              </li>
                              <li>
                                <p>Risalabaar,City Road, deesa-405001.</p>
                              </li>
                              <li>
                                <p>India</p>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
  


