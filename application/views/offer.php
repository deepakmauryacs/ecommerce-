 <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Offer</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a>/</li>
            <li><span>Offer</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- Bread Crumb END -->  
  
  <!-- CONTAIN START ptb-95-->
  <section class="ptb-70">
    <div class="container">
         <div class="row">
        <?php
           if(!empty($offer)){
           foreach ($offer as $row)
           {
         ?>
             <div class="col-lg-3 col-sm-12">
              <div class="img"><a href="#"><img  src="<?php echo base_url().'uploads/offer/'.$row->image; ?>" alt=""></a></div>
              </div>
      
      <?php 
          }
          }
          ?>
          </div>
    </div>
  </section>
 