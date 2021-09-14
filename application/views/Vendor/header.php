<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/favicon.ico">
      <title>E-Commerce</title>
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
   </head>
    

 <?php  if ($this->session->flashdata('success')): ?>
     <div class="alert text-white bg-success alert-dismissible" style="border-radius: 0px; margin-top: -15px; text-align: center;" role="alert">
       <div class="iq-alert-text">
          <?php echo $this->session->flashdata('success'); 
          $this->session->set_flashdata('success',"");
      $this->session->set_flashdata('msg_class',''); ?>
       </div>
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <i class="ri-close-line"></i>
     </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('accountnotlogin')): ?>
     <div class="alert text-white bg-danger alert-dismissible" style="border-radius: 0px; margin-top: -15px; text-align: center;" role="alert">
       <div class="iq-alert-text">
          <?php echo $this->session->flashdata('accountnotlogin'); 
           $this->session->set_flashdata('accountnotlogin',"");
      $this->session->set_flashdata('msg_class','');?>
       </div>
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <i class="ri-close-line"></i>
     </div>
    <?php endif; ?>



   <body class="hold-transition skin-orange-light sidebar-mini">
      <div class="wrapper">
      <header class="main-header">
         <!-- Logo -->
         <a href="index.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="<?php echo base_url() ?>assetes/mydashboard/images/minimal.png"  alt=""></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>E-COMMERCE</b> ADMIN</span>
         </a>
         <!-- Header Navbar-->
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                  <li class="dropdown messages-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-envelope"></i>
                     </a>
                     <ul class="dropdown-menu scale-up">
                        <li class="header">You have 5 messages</li>
                        <li>
                           <!-- inner menu: contains the actual data -->
                           <ul class="menu inner-content-div">
                              <li>
                                 <!-- start message -->
                                 <a href="#">
                                    <div class="pull-left">
                                       <img src="<?php echo base_url() ?>assetes/mydashboard/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                                    </div>
                                    <div class="mail-contnet">
                                       <h4>
                                          Lorem Ipsum
                                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                       </h4>
                                       <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                    </div>
                                 </a>
                              </li>
                              <!-- end message -->
                              <li>
                                 <a href="#">
                                    <div class="pull-left">
                                       <img src="<?php echo base_url() ?>assetes/mydashboard/images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                    </div>
                                    <div class="mail-contnet">
                                       <h4>
                                          Nullam tempor
                                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                       </h4>
                                       <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="pull-left">
                                       <img src="<?php echo base_url() ?>assetes/mydashboard/images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                    </div>
                                    <div class="mail-contnet">
                                       <h4>
                                          Proin venenatis
                                          <small><i class="fa fa-clock-o"></i> Today</small>
                                       </h4>
                                       <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="pull-left">
                                       <img src="<?php echo base_url() ?>assetes/mydashboard/images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                    </div>
                                    <div class="mail-contnet">
                                       <h4>
                                          Praesent suscipit
                                          <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                       </h4>
                                       <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="pull-left">
                                       <img src="<?php echo base_url() ?>assetes/mydashboard/images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                    </div>
                                    <div class="mail-contnet">
                                       <h4>
                                          Donec tempor
                                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                                       </h4>
                                       <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="footer"><a href="#">See all e-Mails</a></li>
                     </ul>
                  </li>
                  <!-- Notifications -->
                  <li class="dropdown notifications-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-bell"></i>
                     </a>
                     <ul class="dropdown-menu scale-up">
                        <li class="header">You have 7 notifications</li>
                        <li>
                           <!-- inner menu: contains the actual data -->
                           <ul class="menu inner-content-div">
                              <li>
                                 <a href="#">
                                 <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-user text-red"></i> Nunc fringilla lorem 
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                     </ul>
                  </li>
                  <!-- Tasks-->
                  <!-- User Account-->
                           <?php 
                                   $data=$this->session->userdata('userdata'); 
                               ?> 
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <img src="<?php echo base_url() ?>assetes/mydashboard/images/user2-160x160.jpg" class="user-image rounded-circle" alt="User Image">
                     </a>
                     <ul class="dropdown-menu scale-up">
                        <!-- User image -->
                        <li class="user-header">
                           <img src="<?php echo base_url() ?>assetes/mydashboard/images/user2-160x160.jpg" class="float-left rounded-circle" alt="User Image">
                           <p>
                              Deepak Maurya
                              <a href="<?php echo base_url('mydashboard/index/profile')  ?>" class="btn btn-danger btn-sm">View Profile</a>
                           </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                           <div class="row no-gutters">
                              <div class="col-12 text-left">
                                 <a href="<?php echo base_url('mydashboard/index/profile')  ?>"><i class="ion ion-person"></i> My Profile</a>
                              </div>
                              <div class="col-12 text-left">
                                 <a href="#"><i class="ion ion-settings"></i> Setting</a>
                              </div>
                           </div>
                           <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                           <div>
                              <a href="<?php echo base_url('Vendor/Vendor_login/logout'); ?>" class="btn btn-block btn-danger"><i class="ion ion-power"></i> Log Out</a>
                           </div>
                        </li>
                     </ul>
                  </li>
                   <?php
                       
                        ?>
                  <!-- Messages-->
                  <!-- Control Sidebar Toggle Button -->
                  <li>
                     <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
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
                  <p>E-Commerce</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
               </div>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu" data-widget="tree">
               <li class="treeview active">
                  <a href="<?php echo base_url('Vendor/Product/index'); ?>">
                  <i class="fa fa-dashboard"></i>
                  <span>Dashboard</span>
                  </a>
               </li>
               <li class="treeview">
                  <a href="#">
                  <i class="fa fa-user"></i>
                  <span>Product</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="<?php echo base_url('Vendor/Product/product')  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>Add Product</a></li>
                      <li><a href="<?php echo base_url('Vendor/Product/view_all_product');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>View All Product</a></li>
                      <li><a href="<?php echo base_url('Vendor/Product/all_category');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>View All Category</a></li>
                      <li><a href="<?php echo base_url('Vendor/Product/all_subcategory');  ?>"><i class="fa fa-circle-thin" aria-hidden="true"></i>View All SubCategory</a></li>
                  </ul>
               </li>
                  </ul>
               </li>
            </ul>
         </section>
         <!-- /.sidebar -->
         <div class="sidebar-footer">
            <!-- item-->
            <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
            <!-- item-->
            <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
            <!-- item-->
            <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
         </div>
      </aside>