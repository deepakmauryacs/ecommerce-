<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">About us</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a>/</li>
            <li><span>About us</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>

  <section class="ptb-70">
    <div class="container">
        <?php
           if(!empty($about)){
           foreach ($about as $row)
           {
         ?>
      <div class="row">
            
               <div class="col-lg-12 col-md-12">
              <div class="img"><img  src="<?php echo base_url().'uploads/about/'.$row->image; ?>" alt=""></div>
              </div>
            
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-12 mt-3 mt-md-4">
              <h3><?php echo "$row->heading1";?></h3>
              <div style="text-align: justify;"><?php echo "$row->description1";?></div>
            </div>
          </div>
          
        </div>
      </div>
      <?php 
          }
          }
          ?>
    </div>
  </section>

  <section class="client-bg ptb-70">
    <div class="top-shadow">
      <img alt="Stylexpo" src="<?php echo base_url(); ?>/assetes/asetes/images/top-shadow.png">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="client-main client-bg">
            <div class="client-inner align-center">
              <div id="client" class="owl-carousel">
                  <?php
                       if(!empty($test)){
                       foreach ($test as $row)
                       {
                     ?>
                <div class="item client-detail">
                  <div class="client-img left-side mt-40">
                      <img alt="Stylexpo" style="height: 130px;width: 130px;" src="<?php echo base_url().'uploads/testomonial/'.$row->image; ?>"> 
                    <h4 class="sub-title client-title">- <?php echo $row->name;?> - </h4>
                  </div>
                  <div class="quote right-side">
                    <div class="quote1-img">
                      <img src="<?php echo base_url(); ?>/assetes/asetes/images/quote1.png" alt="Stylexpo">
                    </div>
                    <p><?php echo $row->description;?></p>
                    <div class="quote2-img">
                      <img src="<?php echo base_url(); ?>/assetes/asetes/images/quote2.png" alt="Stylexpo">
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
      </div>
    </div>
    <div class="bottom-shadow">
      <img alt="Stylexpo" src="<?php echo base_url(); ?>/assetes/asetes/images/bottom-shadow.png">
    </div>
  </section>
 