<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>SWARN</title>
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
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/font-awesome.min.css"/>-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/fotorama.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/responsive.css">
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery-1.12.3.min.js"></script> 
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
    
<link rel="shortcut icon" href="<?php echo base_url(); ?>/assetes/asetes/images/febonic-removebg-preview.jpg">
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon.html">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon-72x72.html">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon-114x114.html">
</head>
<body class="homepage">
<!--<div class="se-pre-con"></div>-->
<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
  <div class="nl-popup-main">
  <form action="<?php echo base_url('Admin/Subscriber/subscribe') ?>" method="post" class="custom-validation" enctype="multipart/form-data">
    <div class="nl-popup-inner">
      <div class="newsletter-inner">
        <span>Sign up & get 10% off</span>
        <h2 class="main_title">Subscribe Phone</h2>
        <form>
          <input type="number" name="contact_number" min="0" placeholder="Mobile Number Here...">
          <button class="btn btn-black"  title="Subscribe">Subscribe</button>
        </form>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
      </div>
    </div>
    </form>
  </div>
</div>
<div class="main">
 
  <!-- HEADER START -->
  <header class="navbar navbar-custom container-full-sm" id="header">
           <?php  
             $userdata=$this->session->userdata('usersdata');
           ?>
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
                            <p class="cart-price"><?php echo 'Rs. '.$item["price"].''; ?>.00</p>
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
                    <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box"><?php echo 'Rs. '.$this->cart->total().''; ?>.00</strong></span> </p>
                    <?php } ?>
                    <div class="clearfix"></div>
                      <?php if($this->cart->total_items() > 0){ ?>
                      <div class="mt-20"> <a href="<?php echo base_url('Web/cart');?>" class="btn-color btn">Cart</a> <a href="<?php echo base_url('Web/checkout'); ?>" class="btn-color btn right-side">Checkout</a> </div>
                      <?php }else{ ?>
                      <div class="mt-20"> <a href="<?php echo base_url('Web/cart');?>" class="btn-color btn">Continue shopping</a></div>
                      <?php } ?>
                  </div>
                </li>
                <!-- lock icon here-->
                <!--<li class="login-icon"> -->
                <!--  <a href="#"><span></span> </a>-->
                <!--</li>-->
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
                          <a href="<?php echo base_url('Web/login')?>" title="Login">Login</a> or
                          <a href="<?php echo base_url('Web/signup')?>" title="Register">Register</a>
                          <div class="content-dropdown">
                            <ul>
                              <li class="login-icon"><a href="<?php echo base_url('Web/login');?>" title="Login"><i class="fa fa-user"></i> Login</a></li>
                              <li class="register-icon"><a href="<?php echo base_url('Web/signup');?>" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
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
                      <li class="level"><a href="<?php echo base_url('Web/shop');?>" class="page-scroll"><i class="fa fa-plus-square"></i>More Categories</a></li>
                    </ul>
                    <div class="header-top mobile">
                      <div class="">
                        <div class="row">
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
                        <a href="<?php echo base_url('Web/about'); ?>"><span>About Us</span></a>
                      </li>
                       <li>
                        <a href="<?php echo base_url('Web/shop_by_category'); ?>"><span>Shop By Category</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/blog'); ?>"><span>Blog</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/contact'); ?>"><span>Contact</span></a>
                      </li>
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
                         <a href="<?php echo base_url('Web/signup')  ?>">
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
  <!-- CONTAIN START -->
  <section class="main-wrap">
    <!-- BANNER STRAT -->
    <section class="banner-mobile">
      <div class="banner">
        <!--<div class="main-banner owl-carousel">-->
        <div class="home-slider-carousel owl-carousel">
          <div class="item">
            <div class="banner-1"> <img src="<?php echo base_url(); ?>/assetes/asetes/images/banner1.jpg" alt="Image">
              <div class="banner-detail">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-5 col-md-4 col-4"></div>
                    <div class="col-lg-7 col-md-8 col-8">
                      <div class="banner-detail-inner"> 
                        <span class="slogan">UP TO 25% OFF</span>
                        <h1 class="banner-title">More Fashion Styles</h1>
                        <span class="offer">The latest fashion trends online.</span>
                        <a class="btn btn-color" href="shop.html">Shop Now!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="banner-2"> <img src="<?php echo base_url(); ?>/assetes/asetes/images/banner-white-gold.jpg" alt="Image">
              <div class="banner-detail">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-7 col-8">
                      <div class="banner-detail-inner"> 
                        <span class="slogan">new look</span>
                        <h1 class="banner-title"> <span>Men Smart Watches </span></h1>
                        <span class="offer">Most Popular Brand Products 20% off</span> 
                        <a class="btn btn-color" href="shop.html">Shop Now!</a>
                      </div> 
                    </div>
                    <div class="col-lg-3 col-4"></div>              
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="banner-3"> <img src="<?php echo base_url(); ?>/assetes/asetes/images/banner3.jpg" alt="Image">
              <div class="banner-detail">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-5 col-md-4 col-4"></div>
                    <div class="col-lg-7 col-md-8 col-8">
                      <div class="banner-detail-inner"> 
                        <span class="slogan">UP TO 30% OFF</span>
                        <h1 class="banner-title">Get latest Jewellery</h1>
                        <span class="offer">Get the top brands for Jewellery</span>
                        <a class="btn btn-color" href="<?php echo base_url('Web/shop');?>">Shop Now!</a> 
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BANNER END -->
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-3 col-xl-20per mt-30 left-side float-none-sm ">
          <div class="sidebar-block">
            <!--<div class="sidebar-box sidebar-item mb-30 mb-sm-15"> <span class="opener plus"></span>-->
              <!--<div class="sidebar-title">-->
              <!--  <h3>Best Seller</h3>-->
              <!--</div>-->
              <!--<div class="sidebar-contant pro_cat">-->
              <!--  <div class="row">-->
              <!--    <div id="sidebar-product" class="owl-carousel">-->
                    <!--<div class="item">-->
                    <!--  <ul>-->
                        <!--<li>-->
                        <!--  <div class="pro-media"> <a><img alt="T-shirt" src="<?php echo base_url(); ?>/assetes/asetes/images/1.jpg"></a> </div>-->
                        <!--  <div class="pro-detail-info"> <a>Black African Print</a>-->
                        <!--    <div class="rating-summary-block">-->
                        <!--      <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>-->
                        <!--    </div>-->
                        <!--    <div class="price-box"> <span class="price">$80.00</span> </div>-->
                        <!--    <div class="cart-link">-->
                        <!--      <form>-->
                        <!--        <button title="Add to Cart"><span></span>Add To Cart</button>-->
                        <!--      </form>-->
                        <!--    </div>-->
                        <!--  </div>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--  <div class="pro-media"> <a><img alt="T-shirt" src="<?php echo base_url(); ?>/assetes/asetes/images/2.jpg"></a> </div>-->
                        <!--  <div class="pro-detail-info"> <a>Black African Print</a>-->
                        <!--    <div class="rating-summary-block">-->
                        <!--      <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>-->
                        <!--    </div>-->
                        <!--    <div class="price-box"> <span class="price">$80.00</span> </div>-->
                        <!--    <div class="cart-link">-->
                        <!--      <form>-->
                        <!--        <button title="Add to Cart"><span></span>Add To Cart</button>-->
                        <!--      </form>-->
                        <!--    </div>-->
                        <!--  </div>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--  <div class="pro-media"> <a><img alt="T-shirt" src="<?php echo base_url(); ?>/assetes/asetes/images/3.jpg"></a> </div>-->
                        <!--  <div class="pro-detail-info"> <a>Black African Print</a>-->
                        <!--    <div class="rating-summary-block">-->
                        <!--      <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>-->
                        <!--    </div>-->
                        <!--    <div class="price-box"> <span class="price">$80.00</span> </div>-->
                        <!--    <div class="cart-link">-->
                        <!--      <form>-->
                        <!--        <button title="Add to Cart"><span></span>Add To Cart</button>-->
                        <!--      </form>-->
                        <!--    </div>-->
                        <!--  </div>-->
                        <!--</li>-->
                    <!--  </ul>-->
                    <!--</div>-->
                    <!--<div class="item">-->
                    <!--  <ul>-->
                    <!--    <li>-->
                    <!--      <div class="pro-media"> <a><img alt="T-shirt" src="<?php echo base_url(); ?>/assetes/asetes/images/4.jpg"></a> </div>-->
                    <!--      <div class="pro-detail-info"> <a>Black African Print</a>-->
                    <!--        <div class="rating-summary-block">-->
                    <!--          <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>-->
                    <!--        </div>-->
                    <!--        <div class="price-box"> <span class="price">$80.00</span> </div>-->
                    <!--        <div class="cart-link">-->
                    <!--          <form>-->
                    <!--            <button title="Add to Cart"><span></span>Add To Cart</button>-->
                    <!--          </form>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--      <div class="pro-media"><a><img alt="T-shirt" src="<?php echo base_url(); ?>/assetes/asetes/images/5.jpg"></a> </div>-->
                    <!--      <div class="pro-detail-info"> <a>Black African Print</a>-->
                    <!--        <div class="rating-summary-block">-->
                    <!--          <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>-->
                    <!--        </div>-->
                    <!--        <div class="price-box"> <span class="price">$80.00</span> </div>-->
                    <!--        <div class="cart-link">-->
                    <!--          <form>-->
                    <!--            <button title="Add to Cart"><span></span>Add To Cart</button>-->
                    <!--          </form>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--      <div class="pro-media"> <a><img alt="T-shirt" src="<?php echo base_url(); ?>/assetes/asetes/images/6.jpg"></a> </div>-->
                    <!--      <div class="pro-detail-info"> <a>Black African Print</a>-->
                    <!--        <div class="rating-summary-block">-->
                    <!--          <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>-->
                    <!--        </div>-->
                    <!--        <div class="price-box"> <span class="price">$80.00</span> </div>-->
                    <!--        <div class="cart-link">-->
                    <!--          <form>-->
                    <!--            <button title="Add to Cart"><span></span>Add To Cart</button>-->
                    <!--          </form>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </li>-->
                    <!--  </ul>-->
                    <!--</div>-->
                    <!--<div class="item">-->
                    <!--  <ul>-->
                    <!--    <li>-->
                    <!--      <div class="pro-media"> <a><img alt="T-shirt" src="<?php echo base_url(); ?>/assetes/asetes/images/7.jpg"></a> </div>-->
                    <!--      <div class="pro-detail-info"> <a>Black African Print</a>-->
                    <!--        <div class="rating-summary-block">-->
                    <!--          <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>-->
                    <!--        </div>-->
                    <!--        <div class="price-box"> <span class="price">$80.00</span> </div>-->
                    <!--        <div class="cart-link">-->
                    <!--          <form>-->
                    <!--            <button title="Add to Cart"><span></span>Add To Cart</button>-->
                    <!--          </form>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--      <div class="pro-media"> <a><img alt="T-shirt" src="<?php echo base_url(); ?>/assetes/asetes/images/8.jpg"></a> </div>-->
                    <!--      <div class="pro-detail-info"> <a>Black African Print</a>-->
                    <!--        <div class="rating-summary-block">-->
                    <!--          <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>-->
                    <!--        </div>-->
                    <!--        <div class="price-box"> <span class="price">$80.00</span> </div>-->
                    <!--        <div class="cart-link">-->
                    <!--          <form>-->
                    <!--            <button title="Add to Cart"><span></span>Add To Cart</button>-->
                    <!--          </form>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--      <div class="pro-media"> <a><img alt="T-shirt" src="<?php echo base_url(); ?>/assetes/asetes/images/9.jpg"></a> </div>-->
                    <!--      <div class="pro-detail-info"> <a>Black African Print</a>-->
                    <!--        <div class="rating-summary-block">-->
                    <!--          <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>-->
                    <!--        </div>-->
                    <!--        <div class="price-box"> <span class="price">$80.00</span> </div>-->
                    <!--        <div class="cart-link">-->
                    <!--          <form>-->
                    <!--            <button title="Add to Cart"><span></span>Add To Cart</button>-->
                    <!--          </form>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </li>-->
                    <!--  </ul>-->
                    <!--</div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
            <!--</div>-->
              <?php
                    if(!empty($image)){
                    foreach ($image as $row)
                    {
            ?>
            <div class="sidebar-box sub-banner left-banner  mb-30 mb-sm-15 d-none d-lg-block"> 
              <a href="#"> 
                <img src="<?php echo base_url().'uploads/advertisement/'.$row->image_1; ?>" alt="swarn"> 
              </a> 
            </div>
          <?php
                    }
                    }
          ?>
            <div class="sidebar-box sidebar-newsletter client-bg mb-30 mb-sm-15"><span class="opener plus"></span>
              <div class="sidebar-title m-0">
                <h3>Newsletter</h3>
              </div>
              <div class="sidebar-contant">
                <div class="newsletter">
                  <div class="newsletter-inner center-sm">
                    <div class="newsletter-bg">
                      <div class="newsletter-title">
                        <div class="sub-title">Sign up for newsletter and Get upto 50% off</div>
                      </div>
                      <form>
                        <div class="newsletter-box">
                          <input type="email" placeholder="Email Here...">
                          <button title="Subscribe" class="btn-color">Subscribe</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Testimonial Block Start -->
            <div class="sidebar-box sidebar-testimonial client-bg mb-30 mb-sm-15"><span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Testimonial</h3>
              </div>
              <div class="client-main  sidebar-contant">
                <div class="client-inner align-center">
                  <div id="client" class="owl-carousel">
                    <?php
                       if(!empty($test)){
                       foreach ($test as $row)
                       {
                    ?>
                    <div class="item client-detail">
                      <div class="quote right-side">
                        <div class="quote1-img">
                          <img src="<?php echo base_url(); ?>/assetes/asetes/images/quote1.png" alt="Swarn">
                        </div>
                        <p><?php echo  $row->description;?> 
                        </p>
                        <div class="quote2-img">
                          <img src="<?php echo base_url(); ?>/assetes/asetes/images/quote2.png" alt="Swarn">
                        </div>
                      </div>
                      <div class="client-img left-side ">
                        <h4 class="sub-title client-title">- <?php echo $row->name;?> - </h4>
                        <img alt="Image" style="width:70px;height:70px;" src="<?php echo base_url().'uploads/testomonial/'.$row->image; ?>"> 
                      </div>
                    </div>
                    <?php
                       }
                       }
                      ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Information Support -->
            <div class="sidebar-box sidebar-newsletter client-bg mb-30 mb-sm-15"><span class="opener plus"></span>
              <div class="sidebar-title m-0">
                <h3>Support</h3>
              </div>
              <div class="sidebar-contant">
                    <div class="feature-box text-center">
                        <div class="feature-icon feature1"></div>
                        <div class="feature-detail">
                          <div class="ser-title">Free Delivery</div>
                          <div class="ser-subtitle">Above INR 500</div>
                        </div>
                    </div>
                    <div class="feature-box text-center">
                        <div class="feature-icon feature2"></div>
                        <div class="feature-detail">
                          <div class="ser-title">Support</div>
                          <div class="ser-subtitle">Online 24 hours</div>
                        </div>
                    </div>
                    <div class="feature-box text-center">
                        <div class="feature-icon feature3"></div>
                        <div class="feature-detail">
                          <div class="ser-title">Free return</div>
                          <div class="ser-subtitle">Non Offered Product</div>
                        </div>
                    </div>
                    <div class="feature-box text-center">
                        <div class="feature-icon feature4"></div>
                        <div class="feature-detail">
                          <div class="ser-title">Big Saving</div>
                          <div class="ser-subtitle">Offer Sales</div>
                        </div>
                    </div>
              </div>
            </div>
            <!--Testimonial Block End -->
            <!--<div class="sidebar-box d-none d-lg-block  mb-30">-->
            <!--  <div class="video-bg">-->
            <!--    <div class="video-delail align-center">-->
            <!--      <img src="<?php echo base_url(); ?>/assetes/asetes/images/video-bg.jpg" alt="Beaox"> -->
            <!--      <div class="video-delail-inner">-->
            <!--        <div class="video-block">-->
            <!--          <a class="popup-youtube" href="https://player.vimeo.com/video/19228643">-->
            <!--            <img alt="Beaox" src="<?php echo base_url(); ?>/assetes/asetes/images/you-tube-icon.png" draggable="false">-->
            <!--          </a>-->
            <!--        </div>-->
            <!--        <div class="video-subtitle">Must See Video </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </div>
        <div class="col-xl-10 col-lg-9 col-xl-80per  right-side float-none-sm float-right-imp">
          <!-- BANNER STRAT -->
          <section class="banner-main mt-20">
            <div class="banner">
              <!--<div class="main-banner owl-carousel">-->
                <div class="home-slider-carousel owl-carousel">
               <?php 
               if(!empty($slider)){
               foreach ($slider as $row)
               {
               ?>
                <div class="item">
                  <div class="banner-1"><img src="<?php echo base_url().'uploads/slider/'.$row->slider_1; ?>" alt="Image" style="width: 930px; height: 335px;">
                    <div class="banner-detail">
                      <div class="container">
                        <div class="row" style="margin-left: 50px;">
                          <div class="col-lg-5 col-md-4 col-4"></div>
                          <div class="col-lg-7 col-md-8 col-8">
                            <div class="banner-detail-inner"> 
                              <span class="slogan" style="margin-left: 30px;"><?php echo $row->slogan?></span>
                              <h1 class="banner-title"><?php echo $row->title?></h1>
                              <span class="offer"><?php echo $row->offer?></span>
                              <a class="btn btn-color" href="<?php echo base_url('Web/shop');?>">Shop Now!</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
               }
               }
                ?>
                <!--<div class="item">-->
                <!--  <div class="banner-2"> <img src="<?php echo base_url(); ?>/assetes/asetes/images/banner2.jpg" alt="Stylexpo">-->
                <!--    <div class="banner-detail">-->
                <!--      <div class="container">-->
                <!--        <div class="row">-->
                <!--          <div class="col-lg-1"></div>-->
                <!--          <div class="col-lg-7 col-8">-->
                <!--            <div class="banner-detail-inner"> -->
                <!--              <span class="slogan">new look</span>-->
                <!--              <h1 class="banner-title"> <span>Men Smart Watches </span></h1>-->
                <!--              <span class="offer">Most Popular Brand Products 20% off</span>-->
                <!--              <a class="btn btn-color" href="<?php echo base_url('Web/shop');?>">Shop Now!</a> -->
                <!--            </div> -->
                <!--          </div>-->
                <!--          <div class="col-lg-3 col-4"></div>              -->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="item">-->
                <!--  <div class="banner-3"> <img src="<?php echo base_url(); ?>/assetes/asetes/images/banner-white-gold.jpg" alt="Stylexpo">-->
                <!--    <div class="banner-detail">-->
                <!--      <div class="container">-->
                <!--        <div class="row">-->
                <!--          <div class="col-lg-5 col-md-4 col-4"></div>-->
                <!--          <div class="col-lg-7 col-md-8 col-8">-->
                <!--            <div class="banner-detail-inner"> -->
                <!--              <span class="slogan">UP TO 30% OFF</span>-->
                <!--              <h1 class="banner-title">Get latest Jewellery</h1>-->
                <!--              <span class="offer">Get the top brands for Jewellery</span> -->
                <!--              <a class="btn btn-color" href="<?php echo base_url('Web/shop');?>">Shop Now!</a>-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div> -->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
              </div>
            </div>
          </section>
          <!-- BANNER END --> 

          <!-- SUB-BANNER START -->
          <div class="sub-banner-block  pt-70">
            <div class=" center-sm">
              <div class="row">
                  <?php 
                   if(!empty($slide)){
                   foreach ($slide as $row)
                   {
                   ?>
                <div class="col-md-6">
                  <div class="sub-banner sub-banner1" >
                    <img alt="Image" src="<?php echo base_url().'uploads/slider/'.$row->slider_1; ?>">
                    <div class="sub-banner-detail">
                      <!--<div class="sub-banner-title sub-banner-title-color">Most Popular Sunglasses</div>-->
                      <a class="btn btn-color" href="<?php echo base_url();?>">Shop Now!</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-xs-30">
                    <div class="sub-banner sub-banner2">
                      <img alt="Image" src="<?php echo base_url().'uploads/slider/'.$row->slider_2; ?>">
                      <div class="sub-banner-detail">
                        <!--<div class="sub-banner-title sub-banner-title-color">Shoes & Footwear</div>-->
                        <a class="btn btn-color " href="<?php echo base_url('Web/shop');?>">Shop Now!</a>
                      </div>
                    </div>
                </div>
                <?php
                   }
                   }
                ?>
              </div>
            </div>
          </div>
          <!-- SUB-BANNER END -->
          
          <!--  New arrivals Products Slider Block Start  -->
          <section class="pt-70">
            <div class="product-listing">
              <div class="row">
                <div class="col-12">
                  <div class="heading-part mb-30 flex-box">
                    <h2 class="main_title heading"><span>New Arrivals</span></h2>
                    <a href="<?php echo base_url('Web/shop');?>" class="view-link"><b>View More</b></a>
                  </div>
                </div>
              </div>
              <div class="pro_cat">
               <div class="row row-cols-1 row-cols-md-4">
                <?php
                  if(!empty($newarrival)){
                  foreach ($newarrival as $row)
                   {
                ?>
                   <div class="col">
                       <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                   <?php
                     if(!empty($row->gallery_image)){
                    ?>
                    <div class="product-image"><a href="<?php echo base_url()?>Web/product_details/<?php echo $row->id;?>"> <img src="<?php echo base_url().'uploads/product/'.$row->gallery_image; ?>"  alt="Image"> </a>
                    <?php
                     }else{
                    ?>
                    <div class="product-image"><a href="<?php echo base_url()?>Web/product_details/<?php echo $row->id;?>"> <img src="<?php echo base_url() ?>/assetes/asetes/images/noproductimage.png" alt="Image"> </a>
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
                                <button type="button" title="Add to Cart" onclick="addtocart('<?php echo $row->id; ?>','<?php echo $row->product_name; ?>','<?php echo $new_sell_price; ?>','1','<?php echo $row->thumbnail_image; ?>')"><span></span>Add to Cart</button>
                            </li>
                             <?php  
                              $userdata=$this->session->userdata('usersdata');
                             ?>
                            <li class="pro-wishlist-icon ">
                                  <?php
                                  if (!empty($userdata['username'])) {
                                  ?>
                                   <button type="submit" class="btn btn-primary wish" onclick="addtowishlist('<?php echo $row->id; ?>','<?php echo $row->product_name; ?>','<?php echo $new_sell_price; ?>','1','<?php echo $row->thumbnail_image; ?>')"   style="height: 37px;width: 37px;" >
                                     <a type="submit"  title="Wishlist"  style=" margin-top: -8px;margin-left: -6px;"></a>
                                   </button>
                                  <?php
                                  }else{
                                  ?>
                                    <a href="<?php echo base_url()?>/Web/login"  title="Wishlist"></a>
                                  <?php
                                  }
                                  ?>
                                <!--</form>-->
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
                      <div class="bottom-detail cart-button">
                           <ul>
                            <li class="pro-cart-icon">
                              <button type="button" class="btn btn-color" title="Add to Cart" onclick="addtocart('<?php echo $row->id; ?>','<?php echo $row->product_name; ?>','<?php echo $new_sell_price; ?>','1','<?php echo $row->thumbnail_image; ?>')"><span></span>Add to Cart</button>
                            </li>
                          </ul>
                        </div>
                      <?php
                       }else{
                      ?>
                      <div class="price-box"> <span class="price"> ₹ <?php echo $new_sell_price; ?> </span> <del class="price old-price">₹<?php echo $row->price;?></del> </div>
                       <div class="bottom-detail cart-button">
                          <ul>
                            <li class="pro-cart-icon">
                              <button title="Add to Cart" onclick="addtocarts('<?php echo $product_data->id; ?>','<?php echo $product_data->product_name; ?>','<?php echo $new_sell_price; ?>','1','<?php echo $product_data->thumbnail_image; ?>')" class="btn-color"><span></span>Add to Cart</button>
                            </li>
                          </ul>
                        </div>
                      <?php
                       }
                       ?>
                    </div>
                  </div>
                 </div>
                   <!--</div>-->
                    <?php
                 } 
                }
              ?>
              </div>
            </div>
          </section>
          <!--  New arrivals Products Slider Block End  -->
          <!-- Top Categories Start-->
          <section class=" pt-70">
            <div class="row">
              <div class="col-12">
                <div class="heading-part mb-30">
                  <h2 class="main_title heading"><span>Top Categories</span></h2>
                </div>
              </div>
            </div>
            <div class="pro_cat">
              <div class="row">
                <div id="top-cat-pro" class="owl-carousel sell-pro align-center">
                  <?php
                    if(!empty($category)){
                    foreach ($category as $row)
                    {
                  ?>
                  <div class="item ">
                    <div class="item-inner">
                      <img style="height: 200px;" src="<?php echo base_url().'uploads/category/'.$row->banner; ?>" alt="Ecomm">
                      <div class="cate-detail">
                        <div><?php echo $row->category_name; ?></div>
                        <a class="btn btn-white" href="<?php echo base_url()?>Web/shop/<?php echo $row->id;?>">View Products</a>
                      </div>
                    </div>
                  </div>
                  <?php
                     }
                    }
                  ?>
                </div>
              </div>
            </div>
          </section>
          <!-- Top Categories End-->

          <!--  Site Services Features Block Start  -->
          <!--<div class="ser-feature-block">-->
          <!--  <div class="center-xs">-->
          <!--    <div class="row">-->
          <!--      <div class="col-xl-3 col-md-6 service-box">-->
          <!--        <div class="feature-box ">-->
          <!--          <div class="feature-icon feature1"></div>-->
          <!--          <div class="feature-detail">-->
          <!--            <div class="ser-title">Free Delivery</div>-->
          <!--            <div class="ser-subtitle">Above INR 500</div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--      <div class="col-xl-3 col-md-6 service-box">-->
          <!--        <div class="feature-box">-->
          <!--          <div class="feature-icon feature2"></div>-->
          <!--          <div class="feature-detail">-->
          <!--            <div class="ser-title">Support</div>-->
          <!--            <div class="ser-subtitle">Online 24 hours</div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--      <div class="col-xl-3 col-md-6 service-box">-->
          <!--        <div class="feature-box ">-->
          <!--          <div class="feature-icon feature3"></div>-->
          <!--          <div class="feature-detail">-->
          <!--            <div class="ser-title">Free return</div>-->
          <!--            <div class="ser-subtitle">Non Offered Product</div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--      <div class="col-xl-3 col-md-6 service-box">-->
          <!--        <div class="feature-box ">-->
          <!--          <div class="feature-icon feature4"></div>-->
          <!--          <div class="feature-detail">-->
          <!--            <div class="ser-title">Big Saving</div>-->
          <!--            <div class="ser-subtitle">Offer Sales</div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!--  Site Services Features Block End  -->

          <!--small banner Block Start-->
          <!--<section class="pt-70"> -->
          <!--  <div class="row m-0">-->
          <!--    <div class="col-lg-6 p-0">-->
          <!--      <div class="sub-banner small-banner small-banner1">-->
          <!--        <a href="<?php echo base_url('Web/shop');?>">-->
          <!--          <img src="<?php echo base_url(); ?>/assetes/asetes/images/neckless.jpg" alt="Swarn">-->
          <!--        </a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="col-lg-6 p-0 mt-sm-30">-->
          <!--      <div class="sub-banner small-banner small-banner2">-->
          <!--        <a href="<?php echo base_url('Web/shop');?>">-->
          <!--          <img src="<?php echo base_url(); ?>/assetes/asetes/images/spice.jpg" alt="Swarn">-->
          <!--        </a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</section>-->
          <!--small banner Block Start-->
            <div class="sub-banner-block  pt-70">
            <div class=" center-sm">
              <div class="form-row">
                  <?php 
                   if(!empty($slide)){
                   foreach ($slide as $row)
                   {
                   ?>
                <div class="col-md-4">
                  <div class="sub-banner sub-banner1" >
                    <img alt="Image" src="<?php echo base_url().'uploads/slider/'.$row->slider_1; ?>">
                    <div class="sub-banner-detail">
                      <!--<div class="sub-banner-title sub-banner-title-color">Most Popular Sunglasses</div>-->
                      <a class="btn btn-color" href="<?php echo base_url();?>">Shop Now!</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mt-xs-30">
                    <div class="sub-banner sub-banner2">
                      <img alt="Image" src="<?php echo base_url().'uploads/slider/'.$row->slider_2; ?>">
                      <div class="sub-banner-detail">
                        <!--<div class="sub-banner-title sub-banner-title-color">Shoes & Footwear</div>-->
                        <a class="btn btn-color " href="<?php echo base_url('Web/shop');?>">Shop Now!</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 mt-xs-30">
                    <div class="sub-banner sub-banner2">
                      <img alt="Image" src="<?php echo base_url().'uploads/slider/'.$row->slider_2; ?>">
                      <div class="sub-banner-detail">
                        <!--<div class="sub-banner-title sub-banner-title-color">Shoes & Footwear</div>-->
                        <a class="btn btn-color " href="<?php echo base_url('Web/shop');?>">Shop Now!</a>
                      </div>
                    </div>
                </div>
                <?php
                   }
                   }
                ?>
              </div>
            </div>
          </div>
            
          <!--  Special products Products Slider Block Start  -->
          <section class="ptb-70">
            <div class="product-listing">
              <div class="row">
                <div class="col-12">
                  <div class="heading-part mb-30">
                    <h2 class="main_title heading"><span>All Product</span></h2>
                  </div>
                </div>
              </div>
              <div class="pro_cat">
                <div class="row">
                  <div class="owl-carousel best-seller-pro">
                    <?php
                      if(!empty($bestseller)){
                      foreach ($bestseller as $row)
                       {
                     ?>
                    <div class="item">
                    <div class="product-item">
                     <div class="main-label new-label"><span>New</span></div>
                    <?php
                     if(!empty($row->gallery_image)){
                    ?>
                    <div class="product-image"> <a href="<?php echo base_url()?>Web/product_details/<?php echo $row->id;?>"> <img src="<?php echo base_url().'uploads/product/'.$row->gallery_image; ?>" alt="Swarn"> </a>
                    <?php
                     }else{
                    ?>
                    <div class="product-image"> <a href="<?php echo base_url()?>Web/product_details/<?php echo $row->id;?>"> <img src="<?php echo base_url() ?>/assetes/asetes/images/noproductimage.png" alt="Swarn"> </a>
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
                                <button type="button" title="Add to Cart" onclick="addtocart('<?php echo $row->id; ?>','<?php echo $row->product_name; ?>','<?php echo $new_sell_price; ?>','1','<?php echo $row->thumbnail_image; ?>')"><span></span>Add to Cart</button>
             
                            </li>
                             <?php  
                              $userdata=$this->session->userdata('usersdata');
                             ?>
                            <li class="pro-wishlist-icon ">
                                  <?php
                                  if (!empty($userdata['username'])) {
                                  ?>
                                   <button type="submit" class="btn btn-primary wish" onclick="addtowishlist('<?php echo $row->id; ?>','<?php echo $row->product_name; ?>','<?php echo $new_sell_price; ?>','1','<?php echo $row->thumbnail_image; ?>')"   style="height: 37px;width: 37px;" >
                                     <a type="submit"  title="Wishlist"  style=" margin-top: -8px;margin-left: -6px;"></a>
                                   </button>
                                  <?php
                                  }else{
                                  ?>
                                    <a href="<?php echo base_url()?>/Web/login"  title="Wishlist"></a>
                                  <?php
                                  }
                                  ?>
                                <!--</form>-->
                                
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
                      <div class="price-box"> <span class="price"> ₹ <?php echo $row->weight;?></span></div>
                      <?php
                       }else{
                      ?>
                      <div class="price-box"> <span class="price"> ₹ <?php echo $new_sell_price; ?>/<?php echo $row->weight;?> </span> <del class="price old-price">₹<?php echo $row->price;?>/<?php echo $row->weight;?></del> </div>
                      <?php
                       }
                       ?>
                    </div>
                  </div>
                 </div>
                 <?php
                   } 
                   }
                  ?>
                
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END -->

  

  <!-- FOOTER START -->
  <div class="footer">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-middle">
          <div class="row">
               <?php
               
               $sql="SELECT * FROM `tbl_footer` WHERE `id`='1'";
               $footer=$this->db->query($sql)->result();
               if(!empty($footer)){
               foreach ($footer as $row)
                 {
              ?>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <div class="f-logo"> 
                  <a href="<?php echo base_url() ?>" class=""> 
                    <img src="<?php echo base_url().'uploads/footer/'.$row->logo; ?>" style="height: 110px;width: 200px;">
                  </a> 
                </div>
                <div class="footer-block-contant">
                    <p><?php echo $row->description;?></p>
                </div>
              </div>
            </div>
            <?php
                   }
                   }
            ?>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Helpful Links <span></span></h3>
                <ul class="footer-block-contant link">
                   <li><a href="<?php echo base_url();?>">Home</a></li> 
                   <li><a href="<?php echo base_url('Web/shop')?>">Shop</a></li>
                  <li><a href="<?php echo base_url('Web/about');?>">About</a></li>
                  <!--<li><a href="<?php echo base_url('Web/offer');?>">Offer</a></li>-->
                  <li><a href="<?php echo base_url('Web/blog');?>">Blog</a></li>

                </ul>
              </div>
            </div>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Guidance <span></span></h3>
                <ul class="footer-block-contant link">
                  <li><a href="<?php echo base_url('Web/delivery_information')?>"> Delivery information</a></li>
                  <li><a href="<?php echo base_url('Web/privacy');?>"> Privacy Policy</a></li>
                  <li><a href="<?php echo base_url('Web/term');?>"> Terms & Conditions</a></li>
                  <li><a href="<?php echo base_url('Web/contact');?>"> Contact</a></li>
                  <li><a href="<?php echo base_url('Web/contact');?>"> Sitemap</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 f-col">
                <?php
                   if(!empty($footer)){
                   foreach ($footer as $row)
                   {
                 ?>
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">address<span></span></h3>
                <ul class="footer-block-contant address-footer">
                  <li class="item"> <i class="fa fa-map-marker"> </i>
                    <p><?php echo $row->address;?></p>
                  </li>
                  <li class="item"> <i class="fa fa-envelope"> </i>
                    <p> <a href="#"><?php echo $row->email;?> </a> </p>
                  </li>
                  <li class="item"> <i class="fa fa-phone"> </i>
                    <p><?php echo $row->phone;?></p>
                  </li>
                </ul>
              </div>
              <?php
                   }
                  }
              ?>
            </div>
          </div>
        </div>
        
         <div class="bottom" >
          <div class="row" style="margin-botton: 30px; ">
              <div class="col-sm-3" style="text-align: center; border-right: 1px solid black;">
                  <a href="<?php echo base_url('Web/shipping_policy')?>">Shipping/Membership Policy</a>
             </div>
         
              <div class="col-sm-3" style="text-align: center; border-right: 1px solid black;">
                  <a href="<?php echo base_url('Web/cancellation_policy')?>">Cancellation Policy</a>
             </div>
              <div class="col-sm-3" style="text-align: center; border-right: 1px solid black;">
                  <a href="<?php echo base_url('Web/return_policy')?>">Return Policy</a>
          </div>
              <div class="col-sm-3" style="text-align: center; ">
                  <a href="<?php echo base_url('Web/refund')?>">Refund Policy</a>
          </div>
          </div>
          </div>
          
          
        </div>
        <hr>
        <div class="footer-bottom ">
          <div class="row mtb-30">
            <div class="col-lg-6 ">
              <div class="copy-right ">© 2021 All Rights Reserved Swarnstore. Developed By <a href="https://ssak.co.in/">SSAK</a></div>
            </div>
            <div class="col-lg-6 ">
              <div class="footer_social pt-xs-15 center-sm">
                <ul class="social-icon">
                  <li><div class="title">Follow us on :</div></li>
                  <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                  <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                  <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-top">
    <div class="scrollup"></div>
  </div>
  <!-- FOOTER END --> 
</div>
<script src="<?php echo base_url(); ?>/assetes/asetes/js/bootstrap.min.js"></script>  
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery.downCount.js"></script>
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery-ui.min.js"></script> 
<script src="<?php echo base_url(); ?>/assetes/asetes/js/fotorama.js"></script>
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery.magnific-popup.js"></script> 
<script src="<?php echo base_url(); ?>/assetes/asetes/js/owl.carousel.min.js"></script>  
<script src="<?php echo base_url(); ?>/assetes/asetes/js/custom.js"></script>
<script>
   function addtocart(id,name, price,qty,gallery_image){
      // alert(id+name+price+qty+thumbnail_image);
       $.ajax({
           url:"<?php echo base_url() ?>Shopping_cart/insertCart",
           type:"GET",
           data:{id:id, name:name, price:price, qty:qty,gallery_image:gallery_image,refresh:"No"},
           success:function(succ){
               if(succ=="ProductnotAdded"){
                   alert("Product not Added.");
               }else{
                  // alert(" Success: You have added Product to your shopping cart!");
                   swal("Product Added To Cart !", 
                      "Success: You have added product to your shopping cart!", 
                      "success")
                   $(".cart-notification").html(succ);
                   // window.location.reload();
               }
           }
       });
   }
   
    function addtowishlist(id,name, price,qty,thumbnail_image){
     // alert(id+name+price+qty+thumbnail_image);
       $.ajax({
           url:"<?php echo base_url() ?>Wishlist/add_wishlist",
           type:"GET",
           data:{id:id, name:name, price:price, qty:qty,thumbnail_image:thumbnail_image,refresh:"No"},
           success:function(succ){
           document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
           window.location.reload();
             //  alert(succ);
            //  $("#wishlistmsg").html('<div class="alert alert-success alert-dismissible" style="margin-bottom: 0px;border-radius: 0px;text-align: center;"><button type="button" class="close" data-dismiss="alert">&times;</button>'+succ+'</div>');

            //   if(succ=="ProductnotAdded"){
            //       alert("Product not Added.");
            //   }else{
            //       alert(" Success: You have added Product to your shopping cart!");
            //       $(".cart-notification").html(succ);
            //       window.location.reload();
                   
            //   }
           }
       });
   }
</script>
<script>
  /* ------------ Newslater-popup JS Start ------------- */
//   $(window).load(function() {
//     $.magnificPopup.open({
//       items: {src: '#newslater-popup'},type: 'inline'}, 0);
//   });
    /* ------------ Newslater-popup JS End ------------- */
</script>
</body>
</html>
