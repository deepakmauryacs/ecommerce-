<!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Product Details</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a>/</li>
            <li><span>Product Details</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- Bread Crumb END --> 

  <!-- CONTAIN START -->
  <section class="pt-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-5 col-md-5 mb-xs-30">
              <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native"> <a href="#">
                  <img src="<?php echo base_url().'uploads/product/'.$product_data->gallery_image; ?>" alt="image"></a>
                  <a href="#"><img src="<?php echo base_url().'uploads/product/'.$product_data->thumbnail_image; ?>" alt="Image"></a>
                  <a href="#"><img src="<?php echo base_url().'uploads/product/'.$product_data->thumbnail_image1; ?>" alt="Image"></a> 
                  <a href="#"><img src="<?php echo base_url().'uploads/product/'.$product_data->thumbnail_image2; ?>" alt="Image"></a> 
                  <a href="#"><img src="<?php echo base_url().'uploads/product/'.$product_data->thumbnail_image3; ?>" alt="Image"></a>
                  </div>
            </div>
            <div class="col-lg-7 col-md-7">
              <div class="row">
                <div class="col-12">
                  <div class="product-detail-main">
                    <div class="product-item-details">
                      <h1 class="product-item-name"><?php echo $product_data->product_name; ?></h1>
                      <div class="rating-summary-block">
                        <div title="83%" class="rating-result"> <span style="width:83%"></span> </div>
                      </div>
                      
           <?php 
           if($product_data->discount_type=='fix'){
                 //fix
                $price = $product_data->price;
                $dis =   $product_data->discount;
                $new_sell_price= $price - $dis;
             }else{
                //percent
                   $price = $product_data->price;
                   $per=    $product_data->discount;
                   $percentInDecimal = $per / 100;
                   $percent = $percentInDecimal * $price;
                   $new_sell_price= $price - $percent;
             }
           ?>
                     <div class="price-box"> <span class="price"> ₹ <?php echo $new_sell_price; ?> / <?php echo $product_data->weight; ?></span> 
                     <?php
                      if( $new_sell_price !=$product_data->price )
                      {
                     ?>
                     <del class="price old-price"> ₹ <?php echo $product_data->price; ?></del> </div>
                     <?php
                      }
                     ?>
                      <div class="product-info-stock-sku">
                        <div>
                          <label>Availability: </label>
                          <span class="info-deta">In stock</span> 
                        </div>
                    
                      </div>
                      <p><?php echo $product_data->description; ?></p>

                      <?php
                      if(!empty($product_data->size)){
                      ?>
                      <div class="product-size select-arrow input-box select-dropdown mb-20 mt-30">
                        <label>Size</label>
                        <fieldset>
                          <select class="selectpicker form-control option-drop" id="select-by-size">
                            <option value="">Select Size</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                          </select>
                        </fieldset>
                      </div>
                      <?php
                      }
                      ?>
                      <?php
                      if(!empty($product_data->color)){
                      ?>
                      
                      <div class="product-color select-arrow input-box select-dropdown mb-20">
                        <label>Color</label>
                        <fieldset>
                          <select class="selectpicker form-control option-drop" id="select-by-color">
                            <option value="">Select Color</option>
                            <option value="Blue">Blue</option>
                            <option value="Green">Green</option>
                            <option value="Orange">Orange</option>
                            <option value="White">White</option>
                             <option value="Green">Yellow</option>
                            <option value="Orange">Red</option>
                            <option value="White">Black</option>
                          </select>
                        </fieldset>
                      </div>
                      <?php
                      }
                      ?>
                      <div class="mb-20">
                        <div class="product-qty">
                         <label for="qty">Qty:</label>
                          <div class="custom-qty">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                          </div>
                        </div>
                        <!--<div class="product-qty">-->
                        <!--  <label for="qty">Weight:</label>-->
                        <!--   <div class="custom-qty">-->
                        <!--    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>-->
                        <!--    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">-->
                        <!--    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>-->
                        <!--  </div>-->
                        <!--</div>-->
                         <div class="bottom-detail cart-button">
                           <ul>
                            <li class="pro-cart-icon">
                              <button title="Add to Cart" onclick="addtocarts('<?php echo $product_data->id; ?>','<?php echo $product_data->product_name; ?>','<?php echo $new_sell_price; ?>','1','<?php echo $product_data->thumbnail_image; ?>')" class="btn-color"><span></span>Add to Cart</button>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!--<div class="col-lg-3">-->
        <!--  <div class="sub-banner-block align-center">-->
        <!--    <img src="<?php echo base_url(); ?>/assetes/asetes/images/pro-banner.jpg" alt="Stylexpo">-->
        <!--  </div>-->
        <!--</div>-->
    </div>
  </section>

  <section class="ptb-70">
    <div class="container">
      <div class="product-detail-tab">
        <div class="row">
          <div class="col-lg-12">
            <div id="tabs">
              <ul class="nav nav-tabs">
                <li><a class="tab-Description selected" title="Description">Description</a></li>
                <!--<li><a class="tab-Reviews" title="Reviews">Reviews</a></li>-->
              </ul>
            </div>
            <div id="items">
              <div class="tab_content">
                <ul>
                  <li>
                    <div class="items-Description selected ">
                      <div class="Description"> 
                       <p><?php echo $product_data->description; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="items-Reviews">
                      <div class="comments-area">
                        <h4>Comments<span>(2)</span></h4>
                        <ul class="comment-list mt-30">
                          <li>
                            <div class="comment-user"> <img src="<?php echo base_url(); ?>/assetes/asetes/images/comment-user.jpg" alt="Image"> </div>
                            <div class="comment-detail">
                              <div class="user-name">John Doe</div>
                              <div class="post-info">
                                <ul>
                                  <li>Fab 11, 2016</li>
                                  <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                </ul>
                              </div>
                              <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                            </div>
                            
                            <ul class="comment-list child-comment">
                              <li>
                                <div class="comment-user"> <img src="<?php echo base_url(); ?>/assetes/asetes/images/comment-user.jpg" alt="Image"> </div>
                                <div class="comment-detail">
                                  <div class="user-name">John Doe</div>
                                  <div class="post-info">
                                    <ul>
                                      <li>Fab 11, 2016</li>
                                      <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                    </ul>
                                  </div>
                                  <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                              </li>
                              <li>
                                <div class="comment-user"> <img src="<?php echo base_url(); ?>/assetes/asetes/images/comment-user.jpg" alt="Image"> </div>
                                <div class="comment-detail">
                                  <div class="user-name">John Doe</div>
                                  <div class="post-info">
                                    <ul>
                                      <li>Fab 11, 2016</li>
                                      <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                    </ul>
                                  </div>
                                  <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <div class="comment-user"> <img src="<?php echo base_url(); ?>/assetes/asetes/images/comment-user.jpg" alt="Image"> </div>
                            <div class="comment-detail">
                              <div class="user-name">John Doe</div>
                              <div class="post-info">
                                <ul>
                                  <li>Fab 11, 2016</li>
                                  <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                </ul>
                              </div>
                              <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="main-form mt-30">
                        <h4>Review</h4>
                        <form >
                          <div class="row mt-30">
                            <div class="col-md-4 mb-30">
                              <input type="text" placeholder="Name" required>
                            </div>
                            <div class="col-md-4 mb-30">
                              <input type="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-4 mb-30">
                              <input type="text" placeholder="Website" required>
                            </div>
                            <div class="col-12 mb-30">
                              <textarea cols="30" rows="3" placeholder="Review" required></textarea>
                            </div>
                            <div class="col-12 mb-30">
                              <button class="btn btn-color" name="submit" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <section class="pb-70">
    <div class="container">
      <div class="product-listing">
        <div class="row">
          <div class="col-12">
            <div class="heading-part mb-40">
              <h2 class="main_title heading"><span>Related Products</span></h2>
            </div>
          </div>
        </div>
         <div class="pro_cat">
                <div class="row">
                  <div class="owl-carousel best-seller-pro">
                    <?php
                    
                //    print_r($newarrival);
                     //die();
                    
                    //   if(!empty($newarrival)){
                      foreach ($newarrival as $row)
                  //    print_r($rows);
                       {
                     ?>
                    <div class="item">
                    <div class="product-item">
                     <div class="main-label new-label"><span>New</span></div>
                     <div class="product-image"> 
                    <?php
                     if(!empty($row->gallery_image)){
                    ?>
                    <a href="<?php echo base_url()?>Web/product_details/<?php echo $row->id;?>"> <img src="<?php echo base_url().'uploads/product/'.$row->gallery_image; ?>" alt="Image"> </a>
                    <?php
                     }else{
                    ?>
                     <a href="<?php echo base_url()?>Web/product_details/<?php echo $row->id;?>"> <img src="<?php echo base_url() ?>/assetes/asetes/images/noproductimage.png" alt="Image"> </a>
                    <?php
                     }
                    ?>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                                <?php
                                if($row->discount_type=='fix'){
                                $price = $row->price;
                                $dis =   $row->discount;
                                $new_sell_price= $price - $dis;
                                }else{
                                $price = $row->price;
                                $per=$row->discount;
                                $percentInDecimal = $per / 100;
                                $percent = $percentInDecimal * $price;
                                $new_sell_price= $price - $percent;
                                }
                                ?>
                                <button type="button" title="Add to Cart" onclick="addtocart('<?php echo $row->id; ?>','<?php echo $row->product_name; ?>','<?php echo $new_sell_price; ?>','1','<?php echo $row->gallery_image; ?>')"><span></span>Add to Cart</button>
                            </li>
                             <?php  
                              $userdata=$this->session->userdata('usersdata');
                             ?>
                            <li class="pro-wishlist-icon ">
                                  <?php
                                  if (!empty($userdata['username'])) {
                                  ?>
                                   <button type="submit" class="btn btn-primary wish" onclick="addtowishlist('<?php echo $row->id; ?>','<?php echo $row->product_name; ?>','<?php echo $new_sell_price; ?>','1','<?php echo $row->gallery_image; ?>')"   style="height: 37px;width: 37px;" >
                                     <a type="submit"  title="Wishlist"  style=" margin-top: -8px;margin-left: -6px;"></a>
                                   </button>
                                  <?php
                                  }else{
                                  ?>
                                    <a href="<?php echo base_url()?>/Web/login"  title="Wishlist"></a>
                                  <?php
                                  }
                                  ?>
                              </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="<?php echo base_url()?>Web/product_details/<?php echo $row->id;?>"><?php echo $row->product_name;?></a> </div>
                      <?php
                       if($row->discount=='0'){
                      ?>
                      <div class="price-box"> <span class="price"> ₹ <?php echo $row->price;?></span></div><br>
                      <div class="price-box"> <span class="price"><?php echo $row->weight;?></span></div>
                      <?php
                       }else{
                      ?>
                      <div class="price-box"> <span class="price"> ₹ <?php echo $new_sell_price; ?> </span> <del class="price old-price">₹<?php echo $row->price;?></del> </div>
                      <?php
                       }
                       ?>
                    </div>
                  </div>
                 </div>
                 <?php
                    }
                 ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
  </section>
  <!-- CONTAINER END --> 