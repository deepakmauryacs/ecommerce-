 <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Shop By Category</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url()  ?>">Home</a>/</li>
            <li><span>Category</span></li>
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
        <div class="col-xl-12 col-lg-12">
          <div class="blog-listing">
            <div class="row">
              <?php 
               if(!empty($category)){
               foreach ($category as $row)
               {
             ?>  
                
              <div class="col-md-3">
                <div class="blog-item">
                  <div class="blog-media mb-30">
                    <img src="<?php echo base_url().'uploads/category/'.$row->banner; ?>" alt="Stylexpo" style="height: 180px;">
                    <div class="blog-effect"></div> 
                    <a href="<?=base_url('Web/shop/'.$row->id)?>" title="Buy Now" class="read">&nbsp;</a> 
                  </div>
                  <div class="blog-detail" style="text-align: center;">
                    <h3><a href="<?=base_url('Web/shop/'.$row->id)?>"><?php echo $row->category_name;?></a></h3>
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
  </section>
  <!-- CONTAINER END --> 

