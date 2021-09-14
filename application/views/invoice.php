<!DOCTYPE html>
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/fotorama.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assetes/asetes/css/responsive.css">

<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery-1.12.3.min.js"></script>

<link rel="shortcut icon" href="<?php echo base_url(); ?>/assetes/asetes/images/febonic-removebg-preview.jpg">
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon.html">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon-72x72.html">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>/assetes/asetes/images/apple-touch-icon-114x114.html">
</head>
<body >
<div class="main"> 
  <!-- HEADER START -->
   <!-- HEADER END -->
<!-- CONTAIN START -->
  <section class="checkout-section ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="checkout-content">
            <div class="row">
              <div class="col-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Order Overview</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-sm-30">
                <div id="form-print" class="admission-form-wrapper">
                  <div class="cart-item-table complete-order-table commun-table mb-30">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>##</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php  
                                if(!empty($orders_item)){
                                foreach($orders_item as $key=>$value){
                                $product = $this->db->get_where('tbl_product',['id'=>$value['product_id']])->row_array();
                            ?>
                          <tr>
                            <td>
                              <a href="#">
                                <div class="product-image">
                                  <img alt="Image" src="<?php echo base_url() ?>uploads/product/<?=$value['image'] ?>">
                                </div>
                              </a>
                            </td>
                            <td>
                              <div class="product-title"> 
                                <a href="#"><?=$value['product_name'] ?></a>
                              </div>
                            </td>
                            <td>
                               <div class="product-info-stock-sku m-0">
                                  <div>
                                   <label>Quantity: </label>
                                   <span class="info-deta"><?=$value['quantity'] ?></span> 
                                  </div>
                                </div> 
                            </td>
                            <td>
                               <div class="product-info-stock-sku m-0">
                                  <div>
                                    <label>Price: </label>
                                    <div class="price-box">
                                    <span class="info-deta price"><?php echo 'Rs '.$value["sub_total"].' '; ?></span>
                                    </div>
                                  </div>
                                </div>
                            </td>
                          </tr> 
                          <?php
                              }
                            }
                          ?>
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
                            <td><div class="price-box"> <span class="price">₹<?=$orders['grand_total'] ?></span> </div></td>
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
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="print-btn">
                      <button onclick="printDiv('form-print')" class="btn btn-color" type="button">Print</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script src="<?php echo base_url(); ?>/assetes/asetes/js/bootstrap.min.js"></script>  
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery.downCount.js"></script>
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery-ui.min.js"></script> 
<script src="<?php echo base_url(); ?>/assetes/asetes/js/fotorama.js"></script>
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery.magnific-popup.js"></script> 
<script src="<?php echo base_url(); ?>/assetes/asetes/js/owl.carousel.min.js"></script>  
<script src="<?php echo base_url(); ?>/assetes/asetes/js/custom.js"></script>
  </section>
  <!-- CONTAINER END --> 
  <script>
   $(document).ready(function(){
      printDiv('form-print')
   });    
</script>
</body>
</html>
