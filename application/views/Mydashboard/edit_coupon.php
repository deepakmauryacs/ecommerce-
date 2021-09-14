<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Coupon/update_coupon'); ?>" method="post" class="custom-validation" enctype="multipart/form-data">
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Coupon Information</h3>
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
                        <input type="radio" id="percentage" value="<?php if(!empty($edit_data))  echo($edit_data->discount_type); ?>" name="discount_type">
                            <label for="percentage">Percentage</label>
                            <input type="radio" id="fix" value="<?php if(!empty($edit_data))  echo($edit_data->discount_type); ?>" name="discount_type">
                            <label for="fix">Fix</label>
                             <input type="hidden" id="id" value="<?php if(!empty($edit_data))  echo($edit_data->id); ?>" name="id">
                     </div>
                  </div>
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Discount<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                         <input type="text" class="form-control" name="discount" value="<?php if(!empty($edit_data))  echo($edit_data->discount); ?>" placeholder="Discount " required="">
                     </div>
                  </div>
                    <div class="form-group row">
                     <label class="col-md-3 col-from-label">Status<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <select class="form-control select2" name="status" style="width: 100%;">
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->status); ?>">Valid to Apply</option>
                            <option value="<?php if(!empty($edit_data))  echo($edit_data->status); ?>">Not Valid To Apply</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Valid From</label>
                     <div class="col-md-8">
                        <input type="date" class="form-control" name="valid_from" value="<?php if(!empty($edit_data))  echo($edit_data->valid_from); ?>" placeholder="Unit (e.g. KG, Pc etc)" required="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Valid To <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="date" lang="en" class="form-control" name="valid_to" value="<?php if(!empty($edit_data))  echo($edit_data->valid_to); ?>" required="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Created For <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                      <select class="form-control select2" name="created_for" style="width: 100%;">
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->created_for); ?>">One Time</option>
                            <option value="<?php if(!empty($edit_data))  echo($edit_data->created_for); ?>">Not Valid To Apply</option>
                        </select>
                     </div>
                  </div>
                    <div class="col-12" style="margin-left: 350px;">
                    <button name="submit" type="submit" class="btn btn-success">Update</button>
                  </div>
               </div>
            </div>
            <!-- /.col -->
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
