<!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Checkout</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url()?>">Home</a>/</li>
            <li><a href="<?php echo base_url('Web/cart')?>">Cart</a>/</li>
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
              <li> 
                  <a href="#">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">1</div>
                  </div>
                  <span>Shipping</span> 
                </a> 
              </li>
              <li class="active"> 
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
                <div class="cart-item-table commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Product Detail</th>
                          <th>Sub Total</th>
                          <!--<th>Action</th>-->
                        </tr>
                      </thead>
                      <tbody>
                          
                        <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>  
                        <tr>
                          <td><a href="#">
                            <div class="product-image">
                            <?php $imageURL = !empty($item["image"])?base_url('uploads/product/'.$item["image"]):base_url('https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product02.jpg'); ?>
                            <img src="<?php echo $imageURL; ?>" class="img-fluid">
                             </div>
                            </a></td>
                          <td><div class="product-title"> <a href="#">Cross Colours Camo Print Tank half mengo</a>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Name: </label>
                                  <div class="price-box"> <span class="info-deta price"> <?php echo $item["name"]; ?> </span> </div>
                                </div>
                              </div>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Quantity: </label>
                                  <span class="info-deta"><?php echo  $item["qty"];  ?></span> </div>
                              </div>
                            </div></td>
                          <td><div data-id="100" class="total-price price-box"> <span class="price"><?php echo 'Rs. '.$item["subtotal"].' '; ?>.00</span> </div></td>
                        </tr>
                          <?php } }else{ ?>
                           <tr><td colspan="4"><p>Your cart is empty.....</p></td>
                           <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                
                <?php if($this->cart->total_items() > 0){ ?>
                <div class="cart-total-table commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Cart Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Item(s) Subtotal</td>
                          <td><div class="price-box"> <span class="price"><?php echo 'Rs. '.$this->cart->total().''; ?>.00</span> </div></td>
                        </tr>
                         <tr>
                          <td>CGST (9%)</td>
                          <td><div class="price-box"> <span class="price"><?php echo 'Rs. '.($this->cart->total()*9/100).''; ?> </span> </div></td>
                        </tr>
                        <tr>
                          <td>SGST (9%)</td>
                          <td><div class="price-box"> <span class="price"><?php echo 'Rs. '.($this->cart->total()*9/100).''; ?> </span> </div></td>
                        </tr>
                        <tr>
                          <td>Total Tax (18%)</td>
                          <td><div class="price-box"> <span class="price"><?php echo 'Rs. '.($this->cart->total()*9/100 + $this->cart->total()*9/100).''; ?> </span> </div></td>
                        </tr>
                        <tr>
                          <td>Shipping</td>
                          <td><div class="price-box"> <span class="price">Rs 0.00</span> </div></td>
                        </tr>
                        <tr>
                          <td><b>Amount Payable</b></td>
                          <td><div class="price-box"> <span class="price"><b><?php echo 'Rs. '.($this->cart->total()*18/100+$this->cart->total()).''; ?></b></span> </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <?php } ?>
                <div class="right-side float-none-xs"> <a href="<?php echo base_url('Web/payment')   ?>" class="btn btn-color">Next</a> </div>
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
                              <li class="inner-heading"> <b><?php echo $address->name ?> ,<?php echo $address->number ?></b> </li>
                              <li>
                                <p><?php echo $address->address ?></p>
                              </li>
                              <li>
                                <p><?php echo $address->locality ?>,<?php echo $address->pincode ?></p>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 

