<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Add_slider/update_testomonial'); ?>" method="post" class="custom-validation" enctype="multipart/form-data">
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Testimonial</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Name<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="name" placeholder="Product Name" value="<?php if(!empty($edit_data))  echo($edit_data->name)?>">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Image</label>
                     <div class="col-md-8">
                        <input type="file" class="form-control" name="image" placeholder="Unit (e.g. KG, Pc etc)" required="">
                        <input type="hidden" class="form-control" name="oldImage" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->image)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Description<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <textarea type="text"  class="form-control" name="description" ><?php if(!empty($edit_data))  echo($edit_data->description)?>"</textarea>
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
