  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>Bill NO: <?=$orders['billing_id'] ?></small>
      </h1>
    </section>

    <div class="pad margin no-print">
      <div class="callout bg-orange" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div>
    <!-- Main content -->
    <section class="invoice printableArea">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">
            INVOICE
            <small class="pull-right">Date:
            <?php
             $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
             echo $date->format('d-m-Y');
            ?>
            </small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong class="text-orange">Swarn Food & Crafts Pvt. Ltd.</strong><br>
            Lalabagh, Bhuhar, Dubagga,
            U.P, Lucknow- 226101, India<br>
            Phone: +(91) 0522-2256716<br>
            Email: swarnfoodcrafts@gmail.com
          </address>
        </div>
        <!-- /.col -->
         <?php
               $sql="SELECT * FROM `tbl_footer` WHERE `id`='1'";
               $footer=$this->db->query($sql)->result();
               if(!empty($footer)){
               foreach ($footer as $row)
                 {
              ?>
        <div class="col-sm-4">
             <a class="navbar-brand logo" href="#">
                <img src="<?php echo base_url().'uploads/footer/'.$row->logo; ?>" style="width: 100px;height: 100px; margin-top: -41px; margin-left: 54px;">
                </a>
            </div>
            <?php
                 }
               }
           ?>
         <?php  
            if(!empty($orders)){
            $address = $this->db->get_where('tbl_address',['id'=>$orders['shipping_address']])->row_array();
         ?>   
        <div class="col-sm-4 invoice-col text-right">
          To
          <address>
            <strong class="text-orange"><?=$address['name'] ?></strong><br>
            <?=$address['locality'] ?><br>
            <?=$address['address'] ?><br>
            Pincode: <?=$address['pincode'] ?><br>
            Phone: <?=$address['number'] ?><br>
            Email: <?=$address['email'] ?>
          </address>
        </div>
          <?php
                }
            ?>
        <!-- /.col -->
        <div class="col-sm-12 invoice-col">
			<div class="invoice-details row no-margin">
			  <div class="col-md-6 col-lg-6"><b>Invoice: </b>##<?=$orders['billing_id'] ?></div>
			  <div class="col-md-6 col-lg-6"><b>Order ID: <?=$orders['billing_id'] ?></div>
			  </div>
		</div>
      <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>S.N.</th>
              <th>Order ID</th>
              <th>Image</th>
              <th class="text-right">Name</th>
              <!--<th class="text-right">QR Code</th>-->
              <th class="text-right">Quantity</th>
              <th class="text-right">Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <?php  
                if(!empty($orders_item)){
                foreach($orders_item as $key=>$value){
                $product = $this->db->get_where('tbl_product',['id'=>$value['product_id']])->row();
               // $qr="Product Name : ".$product->product_name."/ Product Category : ".$product->category."/ Product No. : ".$product->fssai_lic_no."/ Product Manufacture Date :".$product->manufacture_date."/ Product Expiry Date :".$product->expiry_date."/ Product Subcategory :".$product->sub_category."/ Product Brand :".$product->brand."/ Product Batch No. :".$product->batch_no."/ Product Ingredients :".$product->ingredients."/ Product Weight :".$product->weight."/ Product Quantity :".$product->quantity."/  Product Unit :".$product->unit."/ Product Min Qty :".$product->min_qty."/ Product Tags :".$product->tags."/ Product Price :".$product->price."/ Product Discount Type :".$product->discount_type."<br>Product Discount :".$product->discount;
             ?>
            <tr>
              <td>1</td>
              <td>#<?=$orders['billing_id'] ?></td>
              <td><img alt="<?=$value['image'] ?>" src="<?php echo base_url()."uploads/product/".$value['image'] ?>"  style="height:65px"></td>
              <td class="text-right"><?=$value['product_name'] ?></td>
              <!--<td class="text-right"><img src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=<?php  echo $qr; ?>" style="width: 50px;height: 50px;"></td>-->
              <td class="text-right"><?=$value['quantity'] ?></td>
              <td class="text-right"><?php echo 'Rs '.$value["sub_total"].' '; ?></td>
            </tr>
               <?php
                 }
                 }
                ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <!-- accepted payments column -->
        <div class="col-12 col-sm-6">
		  <p class="lead"><b>Payment Methods:</b></p>
		  <p style="text-transform: uppercase;">
		      <?php
		         $data=$this->db->get_where('tbl_orders',['billing_id'=>$orders['billing_id']])->row();
		          echo ($data->payment_type);
		      ?>
		  </p>
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 text-right">
			<p class="lead" style="margin-right: 10px;"><b>Payment</b><span class="text-orange"></p> </span></p>
         	<div>
         		<p>Sub - Total amount  :  <?=$orders['grand_total'] ?></p>
         		<p>CGST(9%) : <?=$orders['grand_total']*9/100; ?></p>
         		<p>SGST(9%)  : <?=$orders['grand_total']*9/100; ?></p>
         		<div class="total-tax">
         		<p>Total Tax(18%) :  <?=$orders['grand_total']*9/100 + $orders['grand_total']*9/100; ?></p>
         		</div>
         		<p>Shipping  :   00.00</p>
         	</div>
         	<div class="total-payment">
         		<h3><b>Total :</b> <?=$orders['grand_total']*18/100 + $orders['grand_total']; ?></h3>
         	</div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row no-print">
        <div class="col-12">
          <button id="print" class="btn btn-blue" type="button"><span><i class="fa fa-print"></i> Print</span></button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
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
