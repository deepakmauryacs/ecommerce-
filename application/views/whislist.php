 <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Wishlist</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a>/</li>
            <li><span>Wishlist</span></li>
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
        <div class="col-12 ">
          <div class="cart-item-table commun-table wishlist">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Stock Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                   if(!empty($wishlist)){
                   foreach ($wishlist as $row)
                  {
                 ?>
                  <tr>
                    <td>
                      <a href="#">
                      <div class="product-image"><img alt="Image" src="<?php echo base_url(); ?>/uploads/product/<?php echo $row->image; ?>"></div>
                      </a>
                    </td>
                    <td>
                      <div class="product-title"> 
                        <h4><a href="#"><?php echo $row->name; ?></a></h4>
                      </div>
                    </td>
                    <td>
                      <ul>
                        <li>
                          <div class="base-price price-box"> <span class="price"><?php echo $row->price; ?></span> </div>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <div class="input-box select-dropdown">
                        <fieldset>
                          <select data-id="100" class="quantity_cart option-drop" name="qty">
                            <option selected="" value="<?php echo $row->qty; ?>"><?php echo $row->qty; ?></option>
                          </select>
                        </fieldset>
                      </div>
                    </td>
                    <td class="out_stock availability">In Stock</td>
                    <td>
                      <a  onclick="wishlisttocart('<?php echo $row->product_id; ?>','<?php echo $row->name; ?>','<?php echo $row->price; ?>','1','<?php echo $row->image; ?>')" class="btn btn-color" >
                        <i title="Shopping Cart" class="fa fa-shopping-cart" aria-hidden="true"></i>
                      </a> 
                     <!--<a href="#" class="btn btn-color" >-->
                     <!-- <i title="Remove Item From Cart" data-id="100" style="color:white;" class="fa fa-trash cart-remove-item"></i>-->
                     <!--</a>-->
                    </td>
                  </tr>
                  <?php
                   }
                   }else{
                  ?>
                   <tr>
                     <td colspan="6">No Product In Wishlist.</td>  
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
      <div class="mb-30">
        <div class="row">
          <div class="col-md-6">
            <div class="mt-30"> 
              <a href="<?php echo base_url('Web/shop')  ?>" class="btn btn-color">
                <span><i class="fa fa-angle-left"></i></span>Continue Shopping
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
  
  <script>
   function wishlisttocart(id,name, price,qty,thumbnail_image){
      // alert(id+name+price+qty+image);
       $.ajax({
           url:"<?php echo base_url() ?>Shopping_cart/wistlisttoinsertCart",
           type:"GET",
           data:{id:id, name:name, price:price, qty:qty,thumbnail_image:thumbnail_image,refresh:"No"},
           success:function(succ){
               if(succ=="ProductnotAdded"){
                   alert("Product not Added.");
               }else{
                   alert(" Success: You have added Product to your shopping cart!");
                   $(".cart-notification").html(succ);
                   window.location.reload();
               }
           }
       });
   }
</script>
 
