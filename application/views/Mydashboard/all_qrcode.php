<div class="content-wrapper">
 <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
       All Category
      </h3>
      <ol class="breadcrumb">
         <a href="<?php  echo base_url('Admin/Category/product_category') ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Add New Product</span></a>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content printableArea">
      <div class="row">
         <div class="col-12">
            <div class="box">
               <div class="box-body">
                  <div class="table-responsive">
                     <table id="example1" class="table table-bordered table-hover display nowrap margin-top-10">
                        <thead>
                          <tr>
                            <th>S.N.</th>
                            <th>Product Name</th>
                            <th>Product QR Code</th>
                    
                         </tr>
                        </thead>
                        <tbody>
                                <?php
                                $i = 1;
                                foreach($data as $row)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row->product_name; ?></td>
                                    <td><a href="<?php echo base_url().'uploads/product/'.$row->qr_code; ?>" download><img  src="<?php echo base_url().'uploads/product/'.$row->qr_code; ?>"></a></td>
                                    <td>
                                    <a href="<?php echo base_url() ?>Admin/Product/delete_qrcode/<?php echo $row->id ?>" type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
                               </td>
                                </tr>
                                <?php
                                  }
                                ?>
                                </tbody>
                            </table>
                                    <div class="row no-print">
                                      <div class="col-12">
                                        <button id="print" class="btn btn-blue" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                        </div>
                                      </div>
      
                            </div>
                        </div>
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
  