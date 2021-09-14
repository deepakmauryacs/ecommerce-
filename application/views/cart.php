<script>
// Update item quantity
function updateCartItem(obj, rowid){
    $.get("<?php echo base_url('Shopping_cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
        if(resp == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
  <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Shopping Cart</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url(); ?>">Home</a>/</li>
            <li><span>Shopping Cart</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- Bread Crumb END -->
  
  <!-- CONTAIN START -->
  <section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
                  <tr>
                    <td>
                      <a href="#">
                        <div class="product-image">
                          <?php $imageURL = !empty($item["image"])?base_url('uploads/product/'.$item["image"]):base_url('https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product02.jpg'); ?>
                            <img src="<?php echo $imageURL; ?>" class="img-fluid">
                        </div>
                      </a>
                    </td>
                    <td>
                      <div class="product-title"> 
                        <a href="#">
                            <?php echo $item["name"]; ?>
                         </a> 
                      </div>
                    </td>
                    <td>
                      <ul>
                        <li>
                          <div class="base-price price-box"> 
                            <span class="price"><?php echo 'Rs '.$item["price"].''; ?></span> 
                          </div>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <div class="input-box select-dropdown">
                          <select  name="quantity_cart"  onchange="updateCartItem(this, '<?php  echo $item["rowid"]; ?>')">
                            <option <?php echo ( $item["qty"] == '1') ? 'selected' : '' ?>   value="1">1</option>
                            <option <?php echo ( $item["qty"] == '2') ? 'selected' : '' ?>  value="2">2</option> 
                            <option <?php echo ( $item["qty"] == '3') ? 'selected' : '' ?>  value="3">3</option>
                            <option <?php echo ( $item["qty"] == '4') ? 'selected' : '' ?> value="4">4</option>
                            <option <?php echo ( $item["qty"] == '5') ? 'selected' : '' ?> value="5">5</option>
                          </select>
                      </div>
                    </td>
                    <td>
                      <div class="total-price price-box"> 
                        <span class="price"><?php echo 'Rs '.$item["subtotal"].' '; ?></span> 
                      </div>
                    </td>
                    <td>
                      <i title="Remove Item From Cart" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('Shopping_cart/removeItem/'.$item["rowid"]); ?>':false;" data-id="100" class="fa fa-trash cart-remove-item"></i>
                    </td>
                  </tr>
                   <?php } }else{ ?>
                    <tr><td colspan="6"><p>Your cart is empty.....</p></td>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-30">
        <div class="row">
          <div class="col-md-6">
            <div class="mt-30"> 
              <a href="<?php echo base_url('Web/shop');?>" class="btn btn-color">
                <span><i class="fa fa-angle-left"></i></span>
                Continue Shopping
              </a> 
            </div>
          </div>
          <div class="col-md-6">
            <div class="mt-30 right-side float-none-xs"> 
              <a class="btn btn-color">Update Cart</a> 
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mtb-30">
        <div class="row">
          <div class="col-md-6 mb-xs-40">
            <div class="estimate">
              <div class="heading-part mb-20">
                <h3 class="sub-heading">Apply Coupon Code</h3>
              </div>
              <form class="full">
                <div class="row">
                  <div class="col-md-9">
                    <div class="input-box">
                      <input id="login-email" name="coupon" class="form-control"  type="text" required="" placeholder="Coupon Code">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-box">
                      <a class="btn btn-color">Apply</a> 
                    </div>
                  </div>
                  </div>
                </div>
              </form>
            </div>
          <?php if($this->cart->total_items() > 0){ ?>
           <div class="col-md-6">
            <div class="cart-total-table commun-table">
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
                      <td>
                        <div class="price-box"> 
                          <span class="price"><?php echo 'Rs '.$this->cart->total().''; ?></span> 
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Shipping</td>
                      <td>
                        <div class="price-box"> 
                          <span class="price">Rs 0.00</span> 
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Amount Payable</b></td>
                      <td>
                        <div class="price-box"> 
                          <span class="price"><b><?php echo 'Rs '.$this->cart->total().''; ?></b></span> 
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <hr>
      <div class="mt-30">
        <div class="row">
          <div class="col-12">
            <div class="right-side float-none-xs"> 
              <a href="<?php echo base_url('Web/checkout'); ?>" class="btn btn-color">Proceed to checkout
                <span><i class="fa fa-angle-right"></i></span>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 


