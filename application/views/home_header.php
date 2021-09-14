<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Stylexpo</title>
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
<link rel="shortcut icon" href="<?php echo base_url(); ?>/assetes/asetes/images/favicon.png">
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon.html">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon-72x72.html">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon-114x114.html">
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery-1.12.3.min.js"></script> 
</head>
<body class="homepage">
<!--<div class="se-pre-con"></div>-->
<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
  <div class="nl-popup-main">
    <div class="nl-popup-inner">
      <div class="newsletter-inner">
        <span>Sign up & get 10% off</span>
        <h2 class="main_title">Subscribe Emails</h2>
        <form action="<?php echo base_url('Admin/Contact/add_subscription'); ?>" method="post" class="custom-validation" enctype="multipart/form-data">
          <input type="email" placeholder="Email Here..." name="contact_number" >
          <button type="submit" class="btn-black" title="Subscribe">Subscribe</button>
        </form>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
      </div>
    </div>
  </div>
</div>
<div class="main">
  <?php if ($this->session->flashdata('success')): ?>
         <div class="alert alert-success alert-dismissible" style="margin-bottom: 0px;border-radius: 0px;text-align: center;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $this->session->flashdata('success'); ?>  
         </div>        
  <?php
    endif; 
  ?>
  <!-- HEADER START -->
  <header class="navbar navbar-custom container-full-sm" id="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="top-link top-link-left select-dropdown">
              <fieldset>
                <select name="speed" class="countr option-drop">
                  <option selected="selected">English</option>
                  <option>Frence</option>
                  <option>German</option>
                </select>
                <select name="speed" class="currenc option-drop">
                  <option selected="selected">USD</option>
                  <option>EURO</option>
                  <option>POUND</option>
                </select>
              </fieldset>
            </div>
          </div>
         <?php  
          $userdata=$this->session->userdata('usersdata');
         ?>
          <div class="col-6">
            <div class="top-right-link right-side">
              <ul>
                <li class="login-icon content">
                  <a class="content-link">
                  <span class="content-icon"></span> 
                  </a> 

                 <?php
                    if (!empty($userdata['username'])) {
                 ?>
                  <a href="<?php echo base_url('User/logout'); ?>" title="Login">Logout</a> 
                 <?php
                 }else{
                 ?>
                 <a href="<?php echo base_url('Web/login'); ?>" title="Login">Login</a> or
                 <a href="<?php echo base_url('Web/signup'); ?>" title="Register">Register</a>
                 <?php
                 }
                 ?>
                  <div class="content-dropdown">
                    <ul>
                         <?php
                          if (!empty($userdata['username'])) {
                          ?>
                 
                      <li class="login-icon"><a href="<?php echo base_url('User/logout'); ?>" title="Login"><i class="fa fa-user"></i> Logout</a></li>
                      
                      <?php
                      }else{
                      ?>
                      <li class="login-icon"><a href="<?php echo base_url('Web/login'); ?>" title="Login"><i class="fa fa-user"></i> Login</a></li>
                      <li class="register-icon"><a href="<?php echo base_url('Web/register'); ?>" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
                 
                    <?php
                     }
                     ?>
                      
                    </ul>
                  </div>
                </li>
                <li class="track-icon">
                  <a href="#" title="Track your order"><span></span> Track your order</a>
                </li>
                <li class="gift-icon">
                  <a href="#" title="Gift card"><span></span> Gift card</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle">
      <div class="container">
        <hr>
        <div class="row">
          <div class="col-xl-3 col-md-3 col-xl-20per">
            <div class="header-middle-left">
              <div class="navbar-header float-none-sm">
                <a class="navbar-brand page-scroll" href="<?php echo base_url('Web/index'); ?>">
                  <img alt="Stylexpo" src="<?php echo base_url(); ?>/assetes/asetes/images/logo.png">
                </a> 
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6 col-xl-60per">
            <div class="header-right-part">
              <div class="category-dropdown select-dropdown">
                <fieldset>
                  <select id="search-category" class="option-drop" name="search-category">
                    <option value="">All Categories</option>
                    <option value="20">Electronics</option>
                    <option value="26">■ PC</option>
                    <option value="43">&nbsp;&nbsp;&nbsp;- Dell Inspiron</option>
                    <option value="44">&nbsp;&nbsp;&nbsp;- Hp Notebook</option>
                    <option value="47">&nbsp;&nbsp;&nbsp;- Sony Vio</option>
                    <option value="55">&nbsp;&nbsp;&nbsp;- Samsung Tablet</option>
                    <option value="27">■ Mac</option>
                    <option value="48">&nbsp;&nbsp;&nbsp;- Desktop Mac</option>
                    <option value="49">&nbsp;&nbsp;&nbsp;- Laptop Mac</option>
                    <option value="50">&nbsp;&nbsp;&nbsp;- Samsung Mac</option>
                    <option value="38">&nbsp;&nbsp;&nbsp;- Android tablets</option>
                    <option value="51">■ Laptops</option>
                    <option value="52">&nbsp;&nbsp;&nbsp;- Accer laptop</option>
                    <option value="56">&nbsp;&nbsp;&nbsp;- apple ipad</option>
                    <option value="53">&nbsp;&nbsp;&nbsp;- HP Laptop</option>
                    <option value="54">&nbsp;&nbsp;&nbsp;- DELL Laptop</option>
                    <option value="18">jewellery</option>
                    <option value="25">Components</option>
                    <option value="29">■ Mice and Trackballs</option>
                    <option value="28">■ Monitors</option>
                    <option value="35">&nbsp;&nbsp;&nbsp;- Desktop</option>
                    <option value="36">&nbsp;&nbsp;&nbsp;- LED</option>
                    <option value="30">■ Printers</option>
                    <option value="31">■ Scanners</option>
                    <option value="32">■ Web Cameras</option>
                    <option value="57">Books</option>
                    <option value="17">Interior</option>
                    <option value="24">Fashion</option>
                    <option value="33">House Hold</option>
                    <option value="34">Accessories</option>
                  </select>
                </fieldset>
              </div>
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
          <div class="col-xl-3 col-md-3 col-xl-20per">
            <div class="right-side float-left-xs header-right-link">
              <ul>
                <li class="compare-icon">
                  <a href="<?php echo base_url('Web/compare'); ?>">
                    <span></span>
                  </a>
                </li>
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
                  <a href="#"> <span><small class="cart-notification"><?php echo count($this->cart->contents()); ?></small></span> 

                  </a>
                  <div class="cart-dropdown header-link-dropdown">
            
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
                      <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="<?php echo base_url('Web/checkout'); ?>" class="btn-color btn right-side">Checkout</a> </div>
                      <?php }else{ ?>
                      <div class="mt-20"> <a href="cart.html" class="btn-color btn">Continue shopping</a></div>
                      <?php } ?>
                  </div>
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
              <div id="cat" class="cat-dropdown" style="display: block;">
                <div class="sidebar-contant">
                  <div id="menu" class="navbar-collapse collapse" >
                    <div class="top-right-link mobile right-side">
                      <ul>
                        <li class="login-icon content">
                          <a class="content-link">
                          <span class="content-icon"></span> 
                          </a> 
                          <a href="<?php echo  base_url('Web/login'); ?>" title="Login">Login</a> or
                          <a href="<?php echo base_url('Web/register'); ?>" title="Register">Register</a>
                          <div class="content-dropdown">
                            <ul>
                              <li class="login-icon"><a href="<?php echo  base_url('Web/login'); ?>" title="Login"><i class="fa fa-user"></i> Login</a></li>
                              <li class="register-icon"><a href="<?php echo base_url('Web/register'); ?>" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
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
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a href="shop.html" class="page-scroll"><i class="fa fa-female"></i>Fashion</a>
                        <div class="megamenu mobile-sub-menu "  style="width:430px;">
                          <div class="megamenu-inner-top">
                            <ul class="sub-menu-level1">
                              <li class="level2">
                                <a href="shop.html"><span>Kids Fashion</span></a>
                                <ul class="sub-menu-level2 ">
                                  <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Blazer & Coat</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Shoes</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Trousers</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Purse</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Wallets</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Skirts</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Tops</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sleepwear</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Jeans</a></li>
                                </ul>
                              </li>
                              <li  class="level2">
                                <div class="sub-menu-slider d-none d-lg-block ">
                                  <div class="row">
                                    <div class="owl-carousel sub_menu_slider">
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="<?php echo base_url(); ?>/assetes/asetes/images/2.jpg" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="<?php echo base_url('Web/compare'); ?>" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> 
                                          </div>
                                          <div class="price-box"> <span class="price">$80.00</span>  
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="<?php echo base_url(); ?>/assetes/asetes/images/6.jpg" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="<?php echo base_url('Web/whislist'); ?>" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="<?php echo base_url('Web/compare'); ?>" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>              
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="<?php echo base_url(); ?>/assetes/asetes/images/8.jpg" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="<?php echo base_url('Web/whislist'); ?>" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="<?php echo base_url('Web/compare'); ?>" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>  
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="<?php echo base_url(); ?>/assetes/asetes/images/10.jpg" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="<?php echo base_url('Web/whislist'); ?>" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="<?php echo base_url('Web/compare'); ?>" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>                  
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span> 
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="<?php echo base_url(); ?>/assetes/asetes/images/16.jpg" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="<?php echo base_url('Web/whislist'); ?>" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="<?php echo base_url('Web/compare'); ?>" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="level">
                        <a href="shop.html" class="page-scroll"><i class="fa fa-camera-retro"></i>Cameras</a>
                      </li>
                      <li class="level">
                        <a href="shop.html" class="page-scroll">
                          <i class="fa fa-desktop"></i>computers<div class="menu-label"><span class="hot-menu"> Hot </span></div> 
                        </a>
                      </li>
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a href="shop.html" class="page-scroll"><i class="fa fa-clock-o"></i>Wathches</a>
                          <div class="megamenu mobile-sub-menu" style="width:775px;" >
                            <div class="megamenu-inner-top">
                              <ul class="sub-menu-level1">
                                <li class="level2">
                                  <a href="shop.html"><span>Men Fashion</span></a>
                                  <ul class="sub-menu-level2">
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Dresses</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Jeans</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Skirts</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Tops</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sleepwear</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Jeans</a></li>
                                  </ul>
                                </li>
                                <li class="level2">
                                  <a href="shop.html"><span>Women Fashion</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Blazer & Coat</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Shoes</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Phone Cases</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Trousers</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Purse</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Wallets</a></li>
                                  </ul>
                                </li>
                                <li class="level2 d-none d-lg-block">
                                  <a href="<?php echo base_url('Web/shop'); ?>">
                                    <img src="<?php echo base_url(); ?>/assetes/asetes/images/drop_banner.jpg" alt="Stylexpo">
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                      </li>
                      <li class="level">
                        <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll">
                          <i class="fa fa-shopping-bag"></i>Bags<div class="menu-label"><span class="new-menu"> New </span></div>
                        </a>
                      </li>
                      <li class="level sub-megamenu ">
                        <span class="opener plus"></span>
                        <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-tablet"></i>Smartphones</a>
                        <div class="megamenu mobile-sub-menu"  style="width:630px;">
                            <div class="megamenu-inner-top">
                              <ul class="sub-menu-level1">
                                <li class="level2">
                                  <a href="<?php echo base_url('Web/shop'); ?>"><span>Women Clothings</span></a>
                                  <ul class="sub-menu-level2">
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Dresses</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Jeans</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Skirts</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Tops</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sleepwear</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Jeans</a></li>
                                  </ul>
                                </li>
                                <li class="level2">
                                  <a href="<?php echo base_url('Web/shop'); ?>"><span>Men Clothings</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Blazer & Coat</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Shoes</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Phone Cases</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Trousers</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Purse</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Wallets</a></li>
                                  </ul>
                                </li>
                                <li class="level2">
                                  <a href="<?php echo base_url('Web/shop'); ?>"><span>Juniors kid</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Blazer & Coat</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Shoes</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Phone Cases</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Trousers</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Purse</a></li>
                                    <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Wallets</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                        </div>
                      </li>
                      <li class="level">
                        <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-bed"></i>Home & Furniture</a>
                      </li>
                      <li class="level "><a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-headphones"></i>Headphone</a></li>
                      <li class="level">
                        <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-microphone"></i>Accessories</a>
                      </li>
                      <li class="level">
                        <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-heartbeat"></i>Beauty & Health</a>
                      </li>
                      <li class="level"><a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-bolt"></i>Printers & Ink</a></li>
                      <li class="level"><a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-plus-square"></i>More Categories</a></li>
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
                        <a href="<?php echo base_url('Web/index'); ?>"><span>Home</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/shop'); ?>"><span>Shop</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/about'); ?>"><span>About Us</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/about'); ?>"><span>Blog</span></a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('Web/contact'); ?>"><span>Contact</span></a>
                      </li>
                      <li class="level dropdown ">
                        <span class="opener plus"></span>
                        <a href="#" class="page-scroll"><span>Pages</span></a>
                        <div class="megamenu mobile-sub-menu">
                          <div class="megamenu-inner-top">
                            <ul class="sub-menu-level1">
                              <li class="level2">
                                <ul class="sub-menu-level2 ">
                                  <li class="level3"><a href="<?php echo base_url('Web/account'); ?>"><span>■</span>Account</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/checkout');?>"><span>■</span>Checkout</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/compare'); ?>"><span>■</span>Compare</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/whislist'); ?>"><span>■</span>Wishlist</a></li>
                                  <li class="level3"><a href="404.html"><span>■</span>404 Error</a></li>
                                  <li class="level3"><a href="single-blog.html"><span>■</span>Single Blog</a></li>
                                  <li class="level3"><a href="<?php echo base_url('Web/product'); ?>"><span>■</span>Product Details</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-3 col-xl-20per d-none d-lg-block">
            <div class="right-side float-left-xs header-right-link">
              <div class="offer-btn right-side">
                <a href="<?php echo base_url('Web/shop'); ?>" class="gift-offer" >
                  <i class="fa fa-gift"></i> Offers
                </a>
              </div>
            </div>
          </div>
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
          <li class="account">
            <a class="popup-with-form" href="#account_popup"><span class="icon"></span><span class="icon-text">Account</span></a>
          </li>
          <li class="search">
            <a class="popup-with-form" href="#search_popup"><span class="icon"></span><span class="icon-text">Search</span></a>
          </li>
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
              <li class="level sub-megamenu">
                <span class="opener plus"></span>
                <a href="shop.html" class="page-scroll"><i class="fa fa-female"></i>Fashion (10)</a>
                <div class="megamenu  mega-sub-menu">
                  <div class="megamenu-inner-top">
                    <ul class="sub-menu-level1">
                      <li class="level2">
                        <ul class="sub-menu-level2 ">
                          <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Blazer & Coat</a></li>
                          <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Shoes</a></li>
                          <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Trousers</a></li>
                          <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Purse</a></li>
                          <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Wallets</a></li>
                          <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Skirts</a></li>
                          <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Tops</a></li>
                          <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sleepwear</a></li>
                          <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Jeans</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="level">
                <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-camera-retro"></i>Cameras (70)</a>
              </li>
              <li class="level">
                <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-desktop"></i>computers (10)</a>
              </li>
              <li class="level sub-megamenu">
                <span class="opener plus"></span>
                <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-clock-o"></i>Wathches (15)</a>
                  <div class="megamenu mega-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2">
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Dresses</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Jeans</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Skirts</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Tops</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sleepwear</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Jeans</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Blazer & Coat</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Shoes</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Phone Cases</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Trousers</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Purse</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Wallets</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
              </li>
              <li class="level">
                <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-shopping-bag"></i>Bags (18)</a>
              </li>
              <li class="level sub-megamenu ">
                <span class="opener plus"></span>
                <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-tablet"></i>Smartphones (20)</a>
                <div class="megamenu mega-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2">
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Dresses</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Jeans</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Skirts</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Tops</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sleepwear</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Jeans</a></li>
                          </ul>
                        </li>
                        <li class="level2">
                          <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Blazer & Coat</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Sport Shoes</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Phone Cases</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Trousers</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Purse</a></li>
                            <li class="level3"><a href="<?php echo base_url('Web/shop'); ?>"><span>■</span>Wallets</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                </div>
              </li>
              <li class="level">
                <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-heart"></i>Software</a>
              </li>
              <li class="level "><a href="shop.html" class="page-scroll"><i class="fa fa-headphones"></i>Headphone (12)</a></li>
              <li class="level">
                <a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-microphone"></i>Accessories (70)</a>
              </li>
              <li class="level"><a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-bolt"></i>Printers & Ink</a></li>
              <li class="level"><a href="<?php echo base_url('Web/shop'); ?>" class="page-scroll"><i class="fa fa-plus-square"></i>More Categories</a></li>
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
                      <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="<?php echo base_url('Web/checkout'); ?>" class="btn-color btn right-side">Checkout</a> </div>
                      <?php }else{ ?>
                      <div class="mt-20"> <a href="cart.html" class="btn-color btn">Continue shopping</a></div>
            <?php } ?>
          </div>
        </div>
        <div id="account_popup" class="white-popup-block mfp-hide popup-position">
          <div class="popup-title">
            <h2 class="main_title heading"><span>Account</span></h2>
          </div>
          <div class="popup-detail">
            <div class="row">
              <div class="col-lg-4">
                <a href="<?php echo base_url('Web.account');?>">
                  <div class="account-inner mb-30">
                    <i class="fa fa-user"></i><br/>
                    <span>Account</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="<?php echo base_url('Web/register'); ?>">
                  <div class="account-inner mb-30">
                    <i class="fa fa-user-plus"></i><br/>
                    <span>Register</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="<?php echo base_url('Web/cart'); ?>">
                  <div class="account-inner mb-30">
                    <i class="fa fa-shopping-bag"></i><br/>
                    <span>Shopping</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="account.html#step4">
                  <div class="account-inner">
                    <i class="fa fa-key"></i><br/>
                    <span>Change Pass</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="account.html#step3">
                  <div class="account-inner">
                    <i class="fa fa-history"></i><br/>
                    <span>history</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="<?php echo base_url('Web/login');?>">
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
