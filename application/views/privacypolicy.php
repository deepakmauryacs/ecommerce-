 <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Privacy-Policy</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a>/</li>
            <li><span>Privacy-Policy</span></li>
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
            <div class="col-md-8 text-justify">
                 <?php
                      if(!empty($privacy)){
                      foreach ($privacy as $row)
                       {
                    ?>
              <h3>Privacy-Policy</h3>
              <p><?php echo $row->description;?></p>
            <?php
                       }
                      }
            ?>
            </div>
          </div>
    </div>
  </section>