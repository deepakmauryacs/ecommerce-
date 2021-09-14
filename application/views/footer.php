<!-- FOOTER START -->
   <div class="footer">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-middle">
          <div class="row">
               <?php
               $sql="SELECT * FROM `tbl_footer` WHERE `id`='1'";
               $footer=$this->db->query($sql)->result();
                if(!empty($footer)){
                   foreach ($footer as $row)
                   {
                 ?>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <div class="f-logo"> 
                  <a href="<?php echo base_url() ?>" class=""> 
                    <img src="<?php echo base_url().'uploads/footer/'.$row->logo; ?>" style="height: 110px;width: 200px;">
                  </a> 
                </div>
                <div class="footer-block-contant">
                    <p><?php echo $row->description;?></p>
                </div>
              </div>
            </div>
            <?php
                 }
               }
            ?>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Helpful Links <span></span></h3>
                <ul class="footer-block-contant link">
                  <li><a href="<?php echo base_url();?>">Home</a></li> 
                  <li><a href="<?php echo base_url('Web/shop')?>">Shop</a></li>
                  <li><a href="<?php echo base_url('Web/about');?>">About</a></li>
                  <!--<li><a href="<?php echo base_url('Web/offer');?>">Offer</a></li>-->
                  <li><a href="<?php echo base_url('Web/blog');?>">Blog</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Guidance<span></span></h3>
                <ul class="footer-block-contant link">
                  <li><a href="<?php echo base_url('Web/delivery_information')?>"> Delivery information</a></li>
                  <li><a href="<?php echo base_url('Web/privacy');?>"> Privacy Policy</a></li>
                  <li><a href="<?php echo base_url('Web/term');?>"> Terms & Conditions</a></li>
                  <li><a href="<?php echo base_url('Web/contact');?>"> Contact</a></li>
                  <li><a href="<?php echo base_url('Web/contact');?>"> Sitemap</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 f-col">
                <?php
                   if(!empty($footer)){
                   foreach ($footer as $row)
                   {
                 ?>
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">address<span></span></h3>
                <ul class="footer-block-contant address-footer">
                  <li class="item"> <i class="fa fa-map-marker"> </i>
                    <p><?php echo $row->address;?></p>
                  </li>
                  <li class="item"> <i class="fa fa-envelope"> </i>
                    <p> <a href="#"><?php echo $row->email;?> </a> </p>
                  </li>
                  <li class="item"> <i class="fa fa-phone"> </i>
                    <p><?php echo $row->phone;?></p>
                  </li>
                </ul>
              </div>
              <?php
                   }
                  }
              ?>
            </div>
          </div>
        </div>
        
        <div class="bottom" >
          <div class="row" style="margin-botton: 30px;">
              <div class="col-sm-3" style="text-align: center; border-right: 1px solid black;">
                  <a href="<?php echo base_url('Web/shipping_policy')?>">Shipping/Membership Policy</a>
             </div>
         
              <div class="col-sm-3" style="text-align: center; border-right: 1px solid black;">
                  <a href="<?php echo base_url('Web/cancellation_policy')?>">Cancellation Policy</a>
             </div>
              <div class="col-sm-3" style="text-align: center; border-right: 1px solid black;">
                  <a href="<?php echo base_url('Web/return_policy')?>">Return Policy</a>
          </div>
              <div class="col-sm-3" style="text-align: center;">
                  <a href="<?php echo base_url('Web/refund')?>">Refund Policy</a>
          </div>
          </div>
          </div>
        
        
        <hr>
        <div class="footer-bottom ">
          <div class="row mtb-30">
            <div class="col-lg-6 ">
              <div class="copy-right ">© 2021 All Rights Reserved Swarnstore. Developed By <a href="https://ssak.co.in/">SSAK</a></div>
            </div>
            <div class="col-lg-6 ">
              <div class="footer_social pt-xs-15 center-sm">
                <ul class="social-icon">
                  <li><div class="title">Follow us on :</div></li>
                  <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                  <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                  <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-top">
    <div class="scrollup"></div>
  </div>
  <!-- FOOTER END --> 
</div>
 
<script src="<?php echo base_url(); ?>/assetes/asetes/js/bootstrap.min.js"></script>  
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery.downCount.js"></script>
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery-ui.min.js"></script> 
<script src="<?php echo base_url(); ?>/assetes/asetes/js/fotorama.js"></script>
<script src="<?php echo base_url(); ?>/assetes/asetes/js/jquery.magnific-popup.js"></script> 
<script src="<?php echo base_url(); ?>/assetes/asetes/js/owl.carousel.min.js"></script>  
<script src="<?php echo base_url(); ?>/assetes/asetes/js/custom.js"></script>
<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<div class="whatsapp">
      <a href="http://api.whatsapp.com/send?phone=+918881120425" traget="_blank">
    <h5><i class="fa fa-whatsapp" aria-hidden="true"></i></h5></a>
</div>
<style>
#loading
{
	text-align:center; 
	background: url('<?php echo base_url(); ?>assetes/loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>

    $(document).ready(function(){
        filter_data(1);
        price_range ();
        function filter_data(page)
        {
            $('#product_list').html('<div id="loading" style="text-align:center;width: 100%;" >Product Loading...</div>');
            var action = 'fetch_data';
            var minimum_price = $('#min_price').val();
            var maximum_price = $('#max_price').val();
            var size = get_filter('product_size');
            var color = get_filter('product_color');
            var category = get_filter('product_category');
            var sort_product = $("#sort-price").val();
            var search_query = $("#search_query_id").val();
            
            //alert(sort_product);
            $.ajax({
             
                url:"<?php echo base_url(); ?>web/fetch_data/"+page,
                method:"POST",
                dataType:"JSON",
                data:{action:action,minimum_price:minimum_price, maximum_price:maximum_price, size:size, color:color, category:category, sort_product:sort_product, search_query:search_query},
                success:function(data){
                    console.log(data.product_list);
                    $('#product_list').html(data.product_list);
                    $('#pagination_link').html(data.pagination_link);
                      //alert('hello');
                }
            });
        }
    
        function get_filter(class_name)
        {
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }
    
        $('.common_selector').click(function(){
            filter_data(1);
        });
        
        $(document).on('click', '.pagination li a', function(event){
        event.preventDefault();
        var page = $(this).data('ci-pagination-page');
        filter_data(page);
        });
    
        $("#sort-price").change(function () {
            //alert(this.value);
            filter_data(1);
        });
        
        function price_range() {
              $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 8000,
                values: [ 1, 2000 ],
                step:1,
                stop: function( event, ui ) {
                  $( "#amount" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
                  //alert(ui.values[ 0 ]+", "+ui.values[ 1 ]);
                  $("#max_price").val(ui.values[ 1 ]);
                  $("#min_price").val(ui.values[ 0 ]);
                  filter_data(1);
                }
              });
              $( "#amount" ).val( "₹" + $( "#slider-range" ).slider( "values", 0 ) + " - ₹" + $( "#slider-range" ).slider( "values", 1 ) );
          }
    
    });


   function addtocart(id,name, price,qty,gallery_image){
     // alert(id+name+price+qty+gallery_image);
      $.ajax({
           url:"<?php echo base_url() ?>Shopping_cart/insertCart",
           type:"GET",
           data:{id:id, name:name, price:price, qty:qty,gallery_image:gallery_image,refresh:"No"},
          success:function(succ){
              if(succ=="ProductnotAdded"){
                  alert("Product not Added.");
              }else{
                   
                    swal({   
                     title: "Product Added To Cart !",   
                     text: "Success: You have added product to your shopping cart!",   
                     timer: 2000,   
                     showConfirmButton: false 
                     });
                     $(".cart-total").html(succ); 
                     window.location.reload();
              }
          }
       });
   }
   function addtocarts(id,name, price,qty,thumbnail_image){
      var color = $("#select-by-color").val();
      var size = $("#select-by-size").val();
      //alert(color+" , "+size);
      if(size=='' || color==''){
          alert("Please Select Size and Color.");
      }else{
          $.ajax({
           url:"<?php echo base_url() ?>Shopping_cart/insertCarts",
           type:"GET",
           data:{id:id, name:name, price:price, qty:qty,thumbnail_image:thumbnail_image,refresh:"No", color:color, size:size},
           success:function(succ){
               if(succ=="ProductnotAdded"){
                   alert("Product not Added.");
               }else{
  
                    swal({   
                     title: "Product Added To Cart !",   
                     text: "Success: You have added product to your shopping cart!",   
                     timer: 2000,   
                     showConfirmButton: false 
                     });
                  // alert(" Success: You have added Product to your shopping cart!");
                 //  $(".cart-notification").html(succ);
                  // window.location.reload();
                   
               }
           }
       });
      }
       
   }
   
    function addtowishlist(id,name, price,qty,thumbnail_image){
     // alert(id+name+price+qty+thumbnail_image);
       $.ajax({
           url:"<?php echo base_url() ?>Wishlist/add_wishlist",
           type:"GET",
           data:{id:id, name:name, price:price, qty:qty,thumbnail_image:thumbnail_image,refresh:"No"},
           success:function(succ){
           document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
           window.location.reload();
             //  alert(succ);
            //  $("#wishlistmsg").html('<div class="alert alert-success alert-dismissible" style="margin-bottom: 0px;border-radius: 0px;text-align: center;"><button type="button" class="close" data-dismiss="alert">&times;</button>'+succ+'</div>');

            //   if(succ=="ProductnotAdded"){
            //       alert("Product not Added.");
            //   }else{
            //       alert(" Success: You have added Product to your shopping cart!");
            //       $(".cart-notification").html(succ);
            //       window.location.reload();
                   
            //   }
           }
       });
   }
</script>
</body>
</html>
