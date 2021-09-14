<div class="content-wrapper">
     <!-- Content Header (Page header) -->
  <section class="content-header">
      <h3 style="margin-top: 5px;">
         Shipping Information
      </h3>
      <!--<ol class="breadcrumb">-->
      <!--   <a href="<?php echo base_url('Admin/Coupon/all_coupon');?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Go Back</span></a>-->
      <!--</ol>-->
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Privacy/add_shipping') ?>" method="POST" class="custom-validation" enctype="multipart/form-data">
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Shipping Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Heading<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                         <input type="text" class="form-control" name="heading" placeholder="Heading" required>
                     </div>
                  </div>
                
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Description</label>
                     <div class="col-md-8">
                        <textarea type="text" class="form-control" name="description"  required></textarea>
                     </div>
                  </div>
                    <div class="col-12" style="margin-left: 350px;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </div>
            </div>
         </form>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
