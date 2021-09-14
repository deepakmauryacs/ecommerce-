<div class="content-wrapper">
     <!-- Content Header (Page header) -->
  <section class="content-header">
      <h3 style="margin-top: 5px;">
         User Profile
      </h3>
      <ol class="breadcrumb">
         <a href="<?php echo base_url('Admin/Coupon/all_coupon');?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Go Back</span></a>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Coupon/add_coupon'); ?>" method="post" class="custom-validation" enctype="multipart/form-data" novalidate>
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">  User Profile Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Discount Type<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="radio" id="percentage" value="Percentage" name="discount_type[]" required>
                            <label for="percentage">Percentage</label>
                        <input type="radio" id="fix" value="Fix" name="discount_type[]" required>
                            <label for="fix">Fix</label>
                     </div>
                  </div>
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Discount<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                         <input type="text" class="form-control" name="discount" placeholder="Discount" required>
                     </div>
                  </div>
                
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Valid From</label>
                     <div class="col-md-8">
                        <input type="date" class="form-control" name="valid_from"  required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Valid To <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="date" lang="en" class="form-control" name="valid_to"  required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Created For <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                      <select class="form-control" name="created_for" style="width: 100%;" required>
                           <option value="onetime">One Time</option>
                            <option value="multipletime">Multiple Time</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Status<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <select class="form-control" name="status" style="width: 100%;" required>
                           <option value="active"> Valid </option>
                            <option value="inactive"> Not Valid </option>
                        </select>
                     </div>
                  </div>
                    <div class="col-12" style="margin-left: 350px;">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
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
