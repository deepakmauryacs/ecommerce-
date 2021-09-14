<!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail  center-xs">
        <h1 class="banner-title">Contact</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url('Web/index'); ?>">Home</a>/</li>
            <li><span>Contact</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- Bread Crumb END -->
  
  <!-- CONTAIN START ptb-95-->
  <section class="pt-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="map">
            <div class="map-part">
              <div id="map" class="map-inner-part"></div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6162.152570949937!2d80.93792608472869!3d26.848546766116556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfda79c753171%3A0xb523e618a563f671!2sNaza%20Market!5e0!3m2!1sen!2sin!4v1620113029529!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!--<iframe src="https://maps.google.com/maps?ll=26.855028,80.858722&amp;z=15&amp;t=m&amp;hl=en&amp;gl=IN&amp;mapclient=embed" width="100%" height="200" frameborder="0" style="border:0"></iframe> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-70 client-main align-center">
    <div class="container">
      <div class="contact-info">
        <div class="row m-0">
          <div class="col-md-4 p-0">
            <div class="contact-box">
              <div class="contact-icon contact-phone-icon"></div>
              <span><b>Tel</b></span>
              <p>+(91) 0522-2256716</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="contact-box">
              <div class="contact-icon contact-mail-icon"></div>
              <span><b>Mail</b></span>
              <p>swarnfoodcrafts@gmail.com</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="contact-box">
              <div class="contact-icon contact-open-icon"></div>
              <span><b>Address</b></span>
              <p>Lalabagh, Bhuhar, Dubagga, U.P, Lucknow- 226101, India</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="heading-part mb-30">
            <h2 class="main_title  heading"><span>Leave a message!</span></h2>
          </div>
        </div>
      </div>
      <div class="main-form">
        <form action="<?php echo base_url('Admin/Conatct/add_contact') ?>" method="post" class="custom-validation" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-4 mb-30">
              <input type="text" required placeholder="Name" name="name">
            </div>
            <div class="col-md-4 mb-30">
              <input type="email" required placeholder="Email" name="email">
            </div>
            <div class="col-md-4 mb-30">
              <input type="text" required placeholder="Subject" name="subject">
            </div>
            <div class="col-12 mb-30">
              <textarea required placeholder="Message" rows="3" cols="30" name="message"></textarea>
            </div>
            <div class="col-12">
              <div class="align-center">
                <button type="submit" name="submit" class="btn btn-color">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
  
  <!-- News Letter Start -->