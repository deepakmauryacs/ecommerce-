<div class="content-wrapper">
 <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
       All QR
      </h3>
      <!--<ol class="breadcrumb">-->
      <!--   <a href="<?php  echo base_url('Admin/Brand') ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Add New Brand</span></a>-->
      <!--</ol>-->
   </section>
   <!-- Main content -->
   <section class="content ">
      <div class="row">
         <div class="col-12">
            <div class="box">
               <div class="box-body">
                   <button id="print" class="btn btn-blue" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                     <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-hover display nowrap margin-top-10">
                          </table>
            <section class="works-area ptb-80 printableArea">
               <div class="container">
                  <div class="row ">
                      <?php  
                        $i = 1;
                        foreach($data as $product)
                        {
                        $qr="Product Name : ".$product->product_name."/ Product Category : ".$product->category."/ Product No. : ".$product->fssai_lic_no."/ Product Manufacture Date :".$product->manufacture_date."/ Product Expiry Date :".$product->expiry_date."/ Product Subcategory :".$product->sub_category."/ Product Brand :".$product->brand."/ Product Batch No. :".$product->batch_no."/ Product Ingredients :".$product->ingredients."/ Product Weight :".$product->weight."/ Product Quantity :".$product->quantity."/  Product Unit :".$product->unit."/ Product Min Qty :".$product->min_qty."/ Product Tags :".$product->tags."/ Product Price :".$product->price."/ Product Discount Type :".$product->discount_type."<br>Product Discount :".$product->discount;
                    ?>
                     <div class="col-lg-3 col-md-3">
                        <div class="single-works">
                         <?php echo $i++; ?> <img src="https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=<?php  echo $qr; ?>">
                        </div>
                        <div>
                            <p> Name: <?php echo "$product->product_name" ?></p>
                        </div>
                     </div>
                       <?php }
                     ?>
                  </div>
               </div>
            </section>
           </div>
         </div>
        </div>
      </div> 
    </div>
</div>
           
                	<!-- JqueryPrintArea -->
<script src="<?php echo base_url() ?>assetes/mydashboard/assets/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js"></script>
<script>
$(document).ready(function() {
    $("#print").click(function() {
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = {
        mode: mode,
        popClose: close
        };
        $("section.printableArea").printArea(options);
    });
});
</script>

