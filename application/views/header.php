
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Swarn</title>
<!-- SEO Meta
  ================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="global">
<meta name="revisit-after" content="2 Days">
<meta name="robots" content="ALL">
<meta name="rating" content="8 YEARS">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/fotorama.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/responsive.css">

<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery-1.12.3.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

<link rel="shortcut icon" href="<?php echo base_url(); ?>/assetes/asetes/images/febonic-removebg-preview.jpg">
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon.html">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon-72x72.html">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon-114x114.html">
</head>
<body >
    	 
<div class="se-pre-con"></div>
<div class="main"> 
  <!-- HEADER START -->
  <header class="navbar navbar-custom container-full-sm" id="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
            <?php  
             $userdata=$this->session->userdata('usersdata');
           ?>
        </div>
      </div>
    </div>
    <div class="header-middle">
      <div class="container">
        <hr>
        <div class="row">
            <?php
               
               $sql="SELECT * FROM `tbl_footer` WHERE `id`='1'";
               $footer=$this->db->query($sql)->result();
               if(!empty($footer)){
               foreach ($footer as $row)
                 {
              ?>
          <div class="col-xl-3 col-md-3 col-xl-20per">
            <div class="header-middle-left">
              <div class="navbar-header float-none-sm">
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>">
                  <img src="<?php echo base_url().'uploads/footer/'.$row->logo; ?>" style="width: 130px;height: 120px;">
                </a> 
              </div>
            </div>
          </div>
          <?php
                 }
               }
          ?>
          <div class="col-xl-6 col-md-6 col-xl-60per mb-md-0 mb-3">
              <div class="main-search">
                <div class="header_search_toggle desktop-view">
                  
                    <div class="search-box">
                        <form method="post" action="<?=base_url('Web/shop/0')?>"> 
                            <input class="input-text" type="text" placeholder="Search entire store here..." name="search_qry" id="search_qry" value="">
                            <button class="search-btn" type="submit"></button>
                        </form>
                      
                    </div>
                  
                </div>
              </div>
              
        
          </div>
         
         <div class="col-xl-3 col-md-3 col-xl-20per">
            <div class="right-side float-left-xs header-right-link">
              <ul>
                
                <li class="wishlist-icon">
                  <a href="<?php echo base_url('Web/whislist'); ?>">
                    <span>
                 <?php
                 $userdata=$this->session->userdata('usersdata');
                 if (!empty($userdata['username'])) {
                 ?>
                 
                    <small class="cart-notification">
                    <?php
                  
                    $id=$userdata['id'];
                    $query = $this->db->query("SELECT * FROM `tbl_wishlist` WHERE `user_id`=$id");
		            echo !empty($query->num_rows())?$query->num_rows():0;
		             ?>
		             </small>
		             
		            <?php
                 }else{
                ?>
                  <small class="cart-notification">0</small>
                <?php
                 }
                ?>
		             
		             
		             </span>
                  </a>
                </li>
                <li class="cart-icon"> 
                  <a href="#"><span><small class="cart-notification"><?php echo count($this->cart->contents()); ?></small></span> 

                  </a>
                  <div class="cart-dropdown header-link-dropdown">
            
                   <ul class="cart-list link-dropdown-list">
                      <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
                      <li> 
                      <a class="close-cart" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('Shopping_cart/removeItem/'.$item["rowid"]); ?>':false;"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"><?php $imageURL = !empty($item["image"])?base_url('uploads/product/'.$item["image"]):base_url('https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product02.jpg'); ?>
                         <img src="<?php echo $imageURL; ?>" class="img-fluid"></a>
                          <div class="media-body"><span><a href="#"><?php echo $item["name"]; ?></a></span>
                            <p class="cart-price"><?php echo 'Rs '.$item["price"].''; ?>.00</p>
                            <div class="product-qty">
                              <label>Qty:</label>
                              <div class="custom-qty">
                                <input type="text" name="qty" maxlength="8" value="<?php  echo $item["qty"]; ?>"  onchange="updateCartItem(this, '<?php  echo $item["rowid"]; ?>')"   title="Qty" class="input-text qty">
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <?php } }else{ ?>
                      <p class="cart-sub-totle"><span class="pull-left">Your cart is empty.....</span> </p>
                      <?php } ?>
                    </ul>
                    
                    <?php if($this->cart->total_items() > 0){ ?>
                    <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box"><?php echo 'Rs '.$this->cart->total().''; ?>.00</strong></span> </p>
                    <?php } ?>
                    <div class="clearfix"></div>
                      <?php if($this->cart->total_items() > 0){ ?>
                      <div class="mt-20"> 
                      <a href="<?php echo base_url('Web/cart');?>" class="btn-color btn">Cart</a> 
                      <a href="<?php echo base_url('Web/checkout'); ?>" class="btn-color btn right-side">Checkout</a> </div>
                      <?php }else{ ?>
                      <div class="mt-20"> <a href="<?php echo base_url('Web/cart');?>" class="btn-color btn">Continue shopping</a></div>
                      <?php } ?>
                  </div>
                </li>
                <li class="login-text">
                    <?php
                    if (!empty($userdata['username'])) {
                     ?>
                      <a href="<?php echo base_url('User/logout'); ?>" title="Login">Logout</a> 
                     <?php
                     }else{
                     ?>
                    <a href="<?php echo base_url('Web/login');?>">Login</a> /
                    <a href="<?php echo base_url('Web/signup');?>">Register</a>
                    <?php
                     }
                     ?>
                </li>
                <li class="side-toggle">
                  <?php if($this->cart->total_items() > 0){ ?>
                  <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                  <?php } ?>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="header-bottom"> 
      <div class="container">
        <div class="row position-r">
          <div class="col-xl-2 col-lg-3 col-xl-20per position-s">
            <div class="sidebar-menu-dropdown home">
              <a class="btn-sidebar-menu-dropdown"><span></span> Categories </a>
              <div id="cat" class="cat-dropdown">
                <div class="sidebar-contant">
                  <div id="menu" class="navbar-collapse collapse" >
                    <div class="top-right-link mobile right-side">
                      <ul>
                        <li class="login-icon content">
                          <a class="content-link">
                          <span class="content-icon"></span> 
                          </a> 
                          <a href="<?php echo base_url('Web/login');?>" title="Login">Login</a> or
                          <a href="<?php echo base_url('Web/register');?>" title="Register">Register</a>
                          <div class="content-dropdown">
                            <ul>
                              <li class="login-icon"><a href="<?php echo base_url('Web/login');?>" title="Login"><i class="fa fa-user"></i> Login</a></li>
                              <li class="register-icon"><a href="<?php echo base_url('Web/register');?>" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="track-icon">
                          <a title="Track your order"><span></span> Track your order</a>
                        </li>
                        <li class="gift-icon">
                          <a href="#" title="Gift card"><span></span> Gift card</a>
                        </li>
                      </ul>
                    </div>
                    <ul class="nav navbar-nav ">
                    <?php
                     if(!empty($category)){
                      foreach ($category as $row)
                      {
                      ?>
                      <li class="level">
                        <a href="<?=base_url('Web/shop/'.$row->id)?>" class="page-scroll"><?php echo $row->icon; ?> <?php echo $row->category_name; ?></a>
                      </li>
                     <?php
                      }
                     }
                     ?> 
                    <li class="level"><a href="#" class="page-scroll"><i class="fa fa-plus-square"></i>More Categories</a></li>
                    </ul>
                    <div class="header-top mobile">
                      <div class="">
                        <div class="row">
                          <div class="col-12">
                            <div class="top-link top-link-left select-dropdown ">
                              <fieldset>
                                <select name="speed" class="country option-drop">
                                  <option selected="selected">English</option>
                                  <option>Frence</option>
                                  <option>German</option>
                                </select>
                                <select name="speed" class="currency option-drop">
                                  <option selected="selected">USD</option>
                                  <option>EURO</option>
                                  <option>POUND</option>
                                </select>
                              </fieldset>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="top-link right-side">
                              <div class="help-num" >Need Help? : 03 233 455 55</div>
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
          <div class="col-xl-6 col-lg-6 col-xl-60per">
            <div class="bottom-inner">
              <div class="position-r">          
                <div class="nav_sec position-r">
                  <div class="mobilemenu-title mobilemenu">
                    <span>Menu</span>
                    <i class="fa fa-bars pull-right"></i>
                  </div>
                  <div class="mobilemenu-content">
                    <ul class="nav navbar-nav" id="menu-main">
                      <li class="active">
                        <a href="<?php echo base_url(); ?>"><span>Home</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/shop'); ?>"><span>Shop</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/about');?>"><span>About Us</span></a>
                      </li>
                       <li>
                        <a href="<?php echo base_url('Web/shop_by_category'); ?>"><span>Shop By Category</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/blog');?>"><span>Blog</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/contact');?>"><span>Contact</span></a>
                      </li>
                      <!--<li class="level dropdown ">-->
                      <!--  <span class="opener plus"></span>-->
                      <!--  <a href="#" class="page-scroll"><span>Pages</span></a>-->
                      <!--  <div class="megamenu mobile-sub-menu">-->
                      <!--    <div class="megamenu-inner-top">-->
                      <!--      <ul class="sub-menu-level1">-->
                      <!--        <li class="level2">-->
                      <!--          <ul class="sub-menu-level2 ">-->
                      <!--            <li class="level3"><a href="<?php echo base_url('Web/account');?>"><span>■</span>Account</a></li>-->
                      <!--            <li class="level3"><a href="<?php echo base_url('Web/checkout');?>"><span>■</span>Checkout</a></li>-->
                      <!--            <li class="level3"><a href="<?php echo base_url('Web/compare');?>"><span>■</span>Compare</a></li>-->
                      <!--            <li class="level3"><a href="<?php echo base_url('Web/wishlist');?>"><span>■</span>Wishlist</a></li>-->
                      <!--            <li class="level3"><a href="#"><span>■</span>404 Error</a></li>-->
                      <!--            <li class="level3"><a href="#"><span>■</span>Single Blog</a></li>-->
                      <!--            <li class="level3"><a href="#"><span>■</span>Product Details</a></li>-->
                      <!--          </ul>-->
                      <!--        </li>-->
                      <!--      </ul>-->
                      <!--    </div>-->
                      <!--  </div>-->
                      <!--</li>-->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="col-xl-4 col-lg-3 col-xl-20per d-none d-lg-block">-->
          <!--  <div class="right-side float-left-xs header-right-link">-->
          <!--    <div class="offer-btn right-side">-->
          <!--      <a href="<?php echo base_url('Web/offer');?>" class="gift-offer" >-->
          <!--        <i class="fa fa-gift"></i> Offers-->
          <!--      </a>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
    </div>

    <div class="popup-links ">
      <div class="popup-links-inner">
        <ul>
          <li class="categories">
            <a class="popup-with-form" href="#categories_popup"><span class="icon"></span><span class="icon-text">Categories</span></a>
          </li>
          <li class="cart-icon">
            <a class="popup-with-form" href="#cart_popup"><span class="icon"></span><span class="icon-text">Cart</span></a>
          </li>
          <li class="search">
            <a class="popup-with-form" href="#search_popup"><span class="icon"></span><span class="icon-text">Search</span></a>
          </li>
          <!--<li class="scroll scrollup">-->
          <!--  <a href="#"><span class="icon"></span><span class="icon-text">Scroll-top</span></a>-->
          <!--</li>-->
           <li class="scroll scrollup">
            <a href="#"><span class="icon"></span><span class="icon-text">Scroll-top</span></a>
          </li>
        </ul>
      </div>
      <div id="popup_containt">
        <div id="categories_popup" class="white-popup-block mfp-hide popup-position">
          <div class="popup-title">
            <h2 class="main_title heading"><span>categories</span></h2>
          </div>
          <div class="popup-detail">
            <ul class="cate-inner">
               <?php
                 if(!empty($category)){
                    foreach ($category as $row)
                 {
               ?>
                      <li class="level">
                        <a href="<?=base_url('Web/shop/'.$row->id)?>" class="page-scroll"><?php echo $row->icon; ?> <?php echo $row->category_name; ?></a>
                      </li>
                <?php
                      }
                    }
                 ?>
              <li class="level"><a href="#" class="page-scroll"><i class="fa fa-plus-square"></i>More Categories</a></li>
            </ul>
          </div>  
        </div>
        <div id="cart_popup" class="white-popup-block mfp-hide popup-position">
          <div class="popup-title">
            <h2 class="main_title heading"><span>cart</span></h2>
          </div>
          <div class="popup-detail">
                    <div class="cart-dropdown ">
              <ul class="cart-list link-dropdown-list">
                   <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
                      <li> 
                      <a class="close-cart" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('Shopping_cart/removeItem/'.$item["rowid"]); ?>':false;"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"><?php $imageURL = !empty($item["image"])?base_url('uploads/product/'.$item["image"]):base_url('https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product02.jpg'); ?>
                         <img src="<?php echo $imageURL; ?>" class="img-fluid"></a>
                          <div class="media-body"><span><a href="#"><?php echo $item["name"]; ?></a></span>
                            <p class="cart-price"><?php echo 'Rs '.$item["price"].''; ?></p>
                            <div class="product-qty">
                              <label>Qty:</label>
                              <div class="custom-qty">
                                <input type="text" name="qty" maxlength="8" value="<?php  echo $item["qty"]; ?>"  onchange="updateCartItem(this, '<?php  echo $item["rowid"]; ?>')"   title="Qty" class="input-text qty">
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      
                      <?php } }else{ ?>
                      <p class="cart-sub-totle"> <span class="pull-left">Your cart is empty.....</span> </p>
                      <?php } ?>
              </ul>
              <?php if($this->cart->total_items() > 0){ ?>
                    <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box"><?php echo 'Rs '.$this->cart->total().''; ?></strong></span> </p>
                    <?php } ?>
                    <div class="clearfix"></div>
                      <?php if($this->cart->total_items() > 0){ ?>
                      <div class="mt-20"> <a href="<?php echo base_url('Web/cart');?>" class="btn-color btn">Cart</a> <a href="<?php echo base_url('Web/checkout'); ?>" class="btn-color btn right-side">Checkout</a> </div>
                      <?php }else{ ?>
                      <div class="mt-20"> <a href="<?php echo base_url('Web/shop');?>" class="btn-color btn">Continue shopping</a></div>
               <?php } ?>
            </div>
          </div>
        </div>
                 <div id="account_popup" class="white-popup-block mfp-hide popup-position">
          <div class="popup-title">
            <h2 class="main_title heading"><span>Account</span></h2>
          </div>
           <?php  
             $userdata=$this->session->userdata('usersdata');
           ?>
          <div class="popup-detail">
            <div class="row">
              <div class="col-lg-4">
                         <?php
                          if (!empty($userdata['username'])) {
                          ?> 
                         <a href="<?php echo base_url('web/account')  ?>">
                         <?php
                          }else{
                          ?>
                         <a href="<?php echo base_url('Web/login')  ?>">
                          <?php
                          }
                          ?>
                  <div class="account-inner mb-30">
                    <i class="fa fa-user"></i><br/>
                    <span>Account</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                  
                  <?php
               //   print_r($userdata['username']);
                  if (!empty($userdata['username'])) {
                  ?> 
                 <a href="<?php echo base_url('Web/login')  ?>">
                 <?php
                  }else{
                  ?>
                 <a href="<?php echo base_url('Web/signup')  ?>">
                  <?php
                  }
                  ?>
              
                  <div class="account-inner mb-30">
                    <i class="fa fa-user-plus"></i><br/>
                    <span>Register</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="<?php echo base_url('Web/shop')  ?>">
                  <div class="account-inner mb-30">
                    <i class="fa fa-shopping-bag"></i><br/>
                    <span>Shopping</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#">
                  <div class="account-inner">
                    <i class="fa fa-key"></i><br/>
                    <span>Change Pass</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#">
                  <div class="account-inner">
                    <i class="fa fa-history"></i><br/>
                    <span>history</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="<?php echo base_url('User/logout')  ?>">
                  <div class="account-inner">
                    <i class="fa fa-share-square-o"></i><br/>
                    <span>log out</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="search_popup" class="white-popup-block mfp-hide popup-position">
          <div class="popup-title">
            <h2 class="main_title heading"><span>Search</span></h2>
          </div>            
          <div class="popup-detail">
            <div class="main-search">
              <div class="header_search_toggle desktop-view">
                <form>
                  <div class="search-box">
                    <input class="input-text" type="text" placeholder="Search entire store here...">
                    <button class="search-btn"></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- HEADER END -->