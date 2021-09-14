 <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Blog Details</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>Blog Details</span></li>
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
             <div class="col-lg-5 col-md-12">
             <div class="blog-media mb-30">
                   <img style="height: 350px; width: 500px;" src="<?php echo base_url().'uploads/blog/'.$data->banner; ?>">
                    <div class="blog-effect"></div> 
                    <a href="#" title="Click For Read More" class="read">&nbsp;</a> 
                  </div>
         </div>
           <div class="col-lg-7 col-md-12">
            <div class="about-content">
               <div class="section-title">
                  <h2><?php echo "$data->blog_title";?></h2>
                  <div class="bar"></div>
                  <p><?php echo "$data->description";?></p>
               </div>
            </div>
         </div>
          </div>
    </div>
  </section>