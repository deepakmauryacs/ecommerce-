<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Footer/update_social'); ?>" method="post" class="custom-validation" enctype="multipart/form-data">
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Social Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Facebook<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                         <input type="text" class="form-control" name="facebook" value="<?php if(!empty($edit_data))  echo($edit_data->facebook); ?>" required="">
                         <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data))  echo($edit_data->id); ?>">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Instagram</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="instagram" value="<?php if(!empty($edit_data))  echo($edit_data->instagram); ?>"  required="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Twitter<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" lang="en" class="form-control" name="twitter" value="<?php if(!empty($edit_data))  echo($edit_data->twitter); ?>" required="">
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-from-label">Youtube<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" lang="en" class="form-control" name="youtube" value="<?php if(!empty($edit_data))  echo($edit_data->youtube); ?>" required="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Linkdin<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" lang="en" class="form-control" name="linkdin" value="<?php if(!empty($edit_data))  echo($edit_data->linkdin); ?>" required="">
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
