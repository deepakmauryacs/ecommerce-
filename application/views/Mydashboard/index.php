<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: -20px;">
    <section class="content-header">
      <h1> Dashboard </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Admin')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-orange"><i class="fa fa-users" aria-hidden="true"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">TOTAL Customer</span>
              <span class="info-box-number">
                 <?php	
                	$query = $this->db->query("SELECT * FROM `tbl_user` WHERE `status`='2' ");
                    echo $query->num_rows();
                 ?>
             </span>
              <div class="progress">
                <div class="progress-bar bg-orange" style="width: 45%"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-orange">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
             </span>
            <div class="info-box-content">
              <span class="info-box-text">TOTAL Order</span>
              <span class="info-box-number">
              <?php	
                	$query = $this->db->query("SELECT * FROM `tbl_orders` WHERE `status`='1' ");
                    echo $query->num_rows();
              ?>
            </span>
              <div class="progress">
                <div class="progress-bar bg-orange" style="width: 40%"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-orange"><i class="fa fa-tags" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL Category</span>
              <span class="info-box-number"><?php	
                	$query = $this->db->query("SELECT * FROM `tbl_category` WHERE `status`='1' ");
                    echo $query->num_rows();
                ?></span>
              <div class="progress">
                <div class="progress-bar bg-orange" style="width: 85%"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-orange"><i class="ion-ios-chatbubble-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">TOTAL Enquiry</span>
              <span class="info-box-number">
               <?php	
                	$query = $this->db->query("SELECT * FROM `tbl_contact` ");
                    echo $query->num_rows();
                ?>   
              </span>
              <div class="progress">
                <div class="progress-bar bg-orange" style="width: 50%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <div class="row">
    </section>
  </div>
 