<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Add_slider/update_advertisement'); ?>" method="post" class="custom-validation" enctype="multipart/form-data">
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Advretisement Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Heading <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="heading_1" value="<?php if(!empty($edit_data))  echo($edit_data->heading_1)?>" placeholder="Product Name"  required="">
                         <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data))  echo($edit_data->id)?>" placeholder="Product Name"  required="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Image </label>
                     <div class="col-md-8">
                        <input type="file" class="form-control" name="image_1" placeholder="Unit (e.g. KG, Pc etc)">
                          <input type="hidden" class="form-control" name="oldImage" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->image_1)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                     </div>
                  </div>
                <div class="form-group row">
                     <label class="col-md-3 col-from-label">Description<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="heading_2" value="<?php if(!empty($edit_data))  echo($edit_data->heading_2)?>" placeholder="Product Name"  required="">
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
