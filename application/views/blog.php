<!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Blog</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a>/</li>
            <li><span>Blog</span></li>
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
        <div class="col-xl-12 col-lg-9 col-lgmd-80per">
          <div class="blog-listing">
            <div class="row">
                  <?php 
                  if(!empty($blog)){
                  foreach ($blog as $row)
                  {
                 ?>
              <div class="col-xl-4 col-12">
                <div class="blog-item">
                  <div class="blog-media mb-30">
                   <img style="height: 300px;" src="<?php echo base_url().'uploads/blog/'.$row->banner; ?>">
                    <div class="blog-effect"></div> 
                    <a href="#" title="Click For Read More" class="read">&nbsp;</a> 
                  </div>
                  <div class="blog-detail"> 
                    <div class="blog-title"><a href="#"><?php echo $row->blog_title;?></a></div>
                    <p><?php echo $row->description;?></p>
                    <hr>
                    <div class="post-info mt-2">
                      <ul>
                        <li>
                          <a href="<?php echo base_url(); ?>Web/blog_details/<?php echo $row->id  ?>">Read more 
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
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