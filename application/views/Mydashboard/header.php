<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="<?php echo base_url() ?>assetes/mydashboard/images/febonic-removebg-preview.jpg">
      <title>SWARN</title>
      <!-- Bootstrap 4.1.3-->
      <link rel="stylesheet"  href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/bootstrap/css/bootstrap.css">
      <!-- Bootstrap-extend-->
      <link rel="stylesheet"  href="<?php echo base_url() ?>assetes/mydashboard/css/bootstrap-extend.css">
      <!-- font awesome -->
      <link rel="stylesheet"  href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/font-awesome/css/font-awesome.css">
      <!-- ionicons -->
      <link rel="stylesheet"  href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/Ionicons/css/ionicons.css">
      <!-- theme style -->
      <link rel="stylesheet"  href="<?php echo base_url() ?>assetes/mydashboard/css/master_style.css">
       <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/css/custom.css">
      <!-- Minimal-art Admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/css/skins/_all-skins.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/jvectormap/jquery-jvectormap.css">
      <!-- Morris charts -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/morris.js/morris.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/Ionicons/css/ionicons.min.css">
      <!-- Glyphicons -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/glyphicons/glyphicon.css">
      <!-- daterange picker -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
      <!-- bootstrap datepicker --> 
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_plugins/iCheck/all.css">
      <!-- Bootstrap Color Picker -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
      <!-- Bootstrap time Picker -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css">
      <!-- Select2 -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_components/select2/dist/css/select2.min.css">
      <!-- google font -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
      
      <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
      <!-- jQuery 3 -->
    	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   </head>
    

 
   <body class="hold-transition skin-orange-light sidebar-mini">
      <div class="wrapper">
      <header class="main-header">
         <!-- Logo -->
         <a href="<?php echo base_url('Admin/Admin');?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!--<span class="logo-mini"><img src="<?php echo base_url() ?>assetes/mydashboard/images/minimal.png"  alt=""></span>-->
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>SWARN</b> ADMIN</span>
         </a>
         <!-- Header Navbar-->
         <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                    <?php 
                       $data=$this->session->userdata('userdata'); 
                    ?> 
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <img src="<?php echo base_url() ?>assetes/mydashboard/images/user2-160x160.jpg" class="user-image rounded-circle" alt="User Image">
                     </a>
                     <ul class="dropdown-menu scale-up">
                        <li class="user-header">
                           <img src="<?php echo base_url() ?>assetes/mydashboard/images/user2-160x160.jpg" class="float-left rounded-circle" alt="User Image">
                           <p>
                              Admin
                              <a href="<?php echo base_url('Admin/Admin/profile')  ?>" class="btn btn-danger btn-sm">View Profile</a>
                           </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                           <div class="row no-gutters">
                              <div class="col-12 text-left">
                                 <a href="<?php echo base_url('Admin/Admin/profile')  ?>"><i class="ion ion-person"></i> My Profile</a>
                              </div>
                              <div class="col-12 text-left">
                                 <a href="<?php echo base_url('Admin/Admin/password'); ?>"><i class="ion ion-settings"></i> Setting</a>
                              </div>
                           </div>
                        </li>
                        <li class="user-footer">
                           <div>
                              <a href="<?php echo base_url('Login/logout'); ?>" class="btn btn-block btn-danger"><i class="ion ion-power"></i> Log Out</a>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
         <!-- sidebar -->
         <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
               <div class="image float-left">
                  <img src="<?php echo base_url() ?>assetes/mydashboard/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
               </div>
               <div class="info float-left">
                  <p>SWARN</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
               </div>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu" data-widget="tree">
               <li class="active">
                  <a href="<?php echo base_url('Admin/Admin'); ?>">
                  <i class="fa fa-dashboard"></i>
                  <span>Dashboard</span>
                  </a>
               </li>
               
                <li class="treeview">
                  <a href="#">
                  <i class="fa fa-money" aria-hidden="true"></i>
                  <span>Sales</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url() ?>Admin/Order"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Orders</a></li>
                  </ul>
                </li>
               
                <li class="treeview">
                  <a href="#">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <span>Customers</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url() ?>Admin/Customers"><i class="fa fa-circle-thin" aria-hidden="true"></i>Customer list</a></li>
                </ul>
               </li>
               <li class="treeview">
                  <a href="#">
                 <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                  <span>Product</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('Admin/Product/view_all_product');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i> Product</a></li>
                  <li><a href="<?php echo base_url('Admin/Product/product_bulk_upload');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Bulk Import</a></li> 
                  <!--<li><a href="#"><i class="fa fa-circle-thin" aria-hidden="true"></i>Product Reviews</a></li>-->
                  <!--<li><a href="<?php echo base_url('Admin/Product/allqrcode');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Product QR CODE</a></li>-->
                  <li><a href="<?php echo base_url('Admin/Product/code');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>QR CODE</a></li>
                </ul>
               </li>
           
               <!--<li class="treeview">-->
               <!--   <a href="#">-->
               <!--  <i class="fa fa-tags" aria-hidden="true"></i>-->
               <!--   <span>Category</span>-->
               <!--   <span class="pull-right-container">-->
               <!--   <i class="fa fa-angle-left pull-right"></i>-->
               <!--   </span>-->
               <!--   </a>-->
               <!-- <ul class="treeview-menu">-->
                     
               <!-- </ul>-->
               <!--</li>-->
               
               <!-- <li class="treeview">-->
               <!--   <a href="#">-->
               <!--   <i class="fa fa-users" aria-hidden="true"></i>-->
               <!--   <span>Shop By Category</span>-->
               <!--   <span class="pull-right-container">-->
               <!--   <i class="fa fa-angle-left pull-right"></i>-->
               <!--   </span>-->
               <!--   </a>-->
               <!--   <ul class="treeview-menu">-->
                     <!--<li><a href="<?php // echo base_url() ?>Admin/ShopBy/index"><i class="fa fa-circle-thin" aria-hidden="true"></i>Add Shop Category</a></li>-->
               <!--      <li><a href="<?php // echo base_url() ?>Admin/ShopBy/all"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Shop Category</a></li>-->
               <!--   </ul>-->
               <!--</li>-->
               
               <!-- <li class="treeview">-->
               <!--   <a href="#">-->
               <!-- <i class="fa fa-tags" aria-hidden="true"></i>-->
               <!--   <span>Offer</span>-->
               <!--   <span class="pull-right-container">-->
               <!--   <i class="fa fa-angle-left pull-right"></i>-->
               <!--   </span>-->
               <!--   </a>-->
               <!-- <ul class="treeview-menu">-->
               <!--      <li><a href="<?php echo base_url('Admin/Offer/index');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Add Offer</a></li>-->
               <!--      <li><a href="<?php echo base_url('Admin/Offer/all');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Offer</a></li>-->
               <!-- </ul>-->
               <!--</li>-->
                <li class="treeview">
                  <a href="#">
                  <i class="fa fa-fw fa-th"></i>
                  <span>Product Master</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('Admin/Product/all_category');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All  Cateogry</a></li>
                    <li><a href="<?php echo base_url('Admin/Product/all_subcategory');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Sub-Cateogry</a></li>
                    <li><a href="<?php echo base_url('Admin/Color/all_batch_number');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All  Batch</a></li>
                    <li><a href="<?php echo base_url('Admin/Color/weight');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All  Weight</a></li>
                    <!--<li><a href="<?php echo base_url('Admin/Offer/all_offer_type');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Offer Type</a></li>-->
                    <!--<li><a href="<?php echo base_url('Admin/Color/all_quantity');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Add  Quantity</a></li>-->
                    <li><a href="<?php echo base_url('Admin/Color/quantity');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All  Quantity</a></li>
                     <li><a href="<?php echo base_url('Admin/Color/all_unit');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All  Unit</a></li>
                    <li><a href="<?php echo base_url('Admin/Brand/all');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All  Brand</a></li>
                    <!--<li><a href="<?php echo base_url('Admin/Color/all');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Color</a></li>-->
                    <!--<li><a href="<?php echo base_url('Admin/Offer/all');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Offer</a></li>-->
                </ul>
               </li>
                <li class="treeview">
                  <a href="#">
                  <i class="fa fa-fw fa-th"></i>
                  <span>Policy</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                <ul class="treeview-menu">
                     <li><a href="<?php echo base_url('Admin/Privacy/all_refund');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Refund Policy</a></li>
                    <li><a href="<?php echo base_url('Admin/Privacy/all_return');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Return Policy</a></li>
                    <li><a href="<?php echo base_url('Admin/Privacy/all_cancellation');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Cancellation Policy</a></li>
                     <li><a href="<?php echo base_url('Admin/Privacy/all_shipping');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Shipping Policy</a></li>
                     <li><a href="<?php echo base_url('Admin/Term/term_condition');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Update Term & Condition</a></li>
                     <li><a href="<?php echo base_url('Admin/Privacy/privacy');?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Update Privacy Policy</a></li>
                     <li><a href="<?php echo base_url('Admin/Delivery_info/delivery');?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Update Delivery_info</a></li>
                </ul>
               </li>
               <!-- <li>-->
               <!--   <a href="<?php echo base_url('Admin/Upload_file'); ?>">-->
               <!--   <i class="fa fa-file-photo-o" aria-hidden="true"></i>-->
               <!--   <span>Uploaded Files</span>-->
               <!--   </a>-->
               <!--</li>-->
               
               
                <li class="treeview">
                  <a href="#">
                 <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                  <span>Blog System</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                <ul class="treeview-menu">
                 <!--<li><a href="<?php echo base_url('Admin/Blog/all');?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Blogs</a></li>-->
                  <li><a href="<?php echo base_url('Admin/Blog/all');?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Post</a></li>
                  <li><a href="<?php echo base_url('Admin/Blog/all_blog_category');?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Blog Categories</a></li> 
                </ul>
               </li>
                  <li class="treeview">
                  <a href="#">
                  <i class="fa fa-ticket" aria-hidden="true"></i>
                  <span>Website Footer Setup</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                <ul class="treeview-menu">
                      <li><a href="<?php echo base_url('Admin/Footer/social');?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Social Media</a></li>
                      <li><a href="<?php echo base_url('Admin/Footer/footer');?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Footer</a></li>
                </ul>
               </li>
               <!--<li class="treeview">-->
               <!--   <a href="#">-->
               <!--   <i class="fa fa-ticket" aria-hidden="true"></i>-->
               <!--   <span>Marketing</span>-->
               <!--   <span class="pull-right-container">-->
               <!--   <i class="fa fa-angle-left pull-right"></i>-->
               <!--   </span>-->
               <!--   </a>-->
               <!-- <ul class="treeview-menu">-->
               <!--       <li><a href="<?php echo base_url('Admin/Newsletter/newsletter');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Newsletter</a></li>-->
               <!--       <li><a href="<?php echo base_url('Admin/Coupon/all_coupon');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Coupon</a></li>-->
               <!-- </ul>-->
               <!--</li>-->
               <!--<li class="treeview">-->
               <!--   <a href="#">-->
               <!--   <i class="fa fa-ticket" aria-hidden="true"></i>-->
               <!--   <span>Staffs</span>-->
               <!--   <span class="pull-right-container">-->
               <!--   <i class="fa fa-angle-left pull-right"></i>-->
               <!--   </span>-->
               <!--   </a>-->
               <!-- <ul class="treeview-menu">-->
               <!--       <li><a href="<?php echo base_url('Admin/Staff/all_staff');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Staff</a></li>-->
               <!--       <li><a href="<?php echo base_url('Admin/Staff/all_role');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Role</a></li>-->
               <!-- </ul>-->
               <!--</li>-->
               
               <li class="treeview">
                  <a href="#">
                  <i class="fa fa-fw fa-gear"></i>
                  <span>Website Setup</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="<?php echo base_url('Admin/About/about_section');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Update About</a></li>
                      <li><a href="<?php echo base_url('Admin/Add_slider/')  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Add Slider</a></li>
                       <li><a href="<?php echo base_url('Admin/Add_slider/viewall_index_slider') ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Update Index Slider</a></li>
                      <li><a href="<?php echo base_url('Admin/Add_slider/viewall_slider')  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Slider</a></li>
                      <li><a href="<?php echo base_url('Admin/Add_slider/view_test')  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Add Testimonial</a></li>
                      <li><a href="<?php echo base_url('Admin/Add_slider/viewall_testomonial')  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Testimonial</a></li>
                      <li><a href="<?php echo base_url('Admin/Add_slider/viewall_advertisement')  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Advertisement</a></li>
                  </ul>
               </li>

               <li class="treeview">
                  <a href="#">
                  <i class="fa fa-phone-square" aria-hidden="true"></i>
                  <span>Enquiry</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?php echo base_url('Admin/Conatct/view_all_contact')  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Contact</a></li>
                  </ul>
               </li>
               
               <!-- <li class="treeview">-->
               <!--   <a href="#">-->
               <!--   <i class="fa fa-phone-square" aria-hidden="true"></i>-->
               <!--   <span>Subscriber</span>-->
               <!--   <span class="pull-right-container">-->
               <!--   <i class="fa fa-angle-left pull-right"></i>-->
               <!--   </span>-->
               <!--   </a>-->
               <!--   <ul class="treeview-menu">-->
               <!--      <li><a href="<?php // echo base_url('Admin/Subscriber/view_subscriber')  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>All Subscriber</a></li>-->
               <!--   </ul>-->
               <!--</li>-->
               
                  </ul>
               </li>
            </ul>
         </section>
         <!-- /.sidebar -->
         <div class="sidebar-footer">
            <!-- item-->
            <a href="<?php echo base_url('Admin/Admin/password'); ?>" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
            <!-- item-->
            <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
            <!-- item-->
            <a href="<?php echo base_url('Login/logout'); ?>" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
         </div>
      </aside>