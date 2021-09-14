<style type="text/css">
.select2-container .select2-selection--single {
    height: 35px;
    border: 1px solid #d2d6de !important;
    border-radius: 0px;
}
</style>
<div class="content-wrapper">
      <section class="content-header">
      <h3 style="margin-top: 5px;">
        Add QR Code
      </h3>
      <ol class="breadcrumb">
         <a href="<?php echo base_url('Admin/Product/all_category');?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Go Back</span></a>
      </ol>
   </section>
   
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Product/add_qrcode')?>" method="post" class="custom-validation" enctype="multipart/form-data" >
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title"> QR Code Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Prodeuct Name</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" name="product_name" value="<?php echo $qr_data->product_name;  ?>"  id="example-text-input" >
                        <input class="form-control" type="hidden" name="product_id"  value="<?php echo $qr_data->id;  ?>"  placeholder="Name">
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label for="exampleInputFile"  class="col-sm-3 col-form-label">QR CODE</label>
                     <div class="col-sm-9">
                        <input type="file" id="exampleInputFile" name="qr_code" required>
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label for="exampleInputFile"  class="col-sm-2 col-form-label"></label>
                     <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                     </div>
                  </div>
                  
                  
               </div>
               <!-- /.col -->
             </div>
           </form>
            <!-- /.row -->
         </div>
         <!-- /.box-body -->
      </div>
      <!-- /.box -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->