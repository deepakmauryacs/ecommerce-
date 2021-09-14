<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Add_slider/update_slider'); ?>" method="post" class="custom-validation" enctype="multipart/form-data">
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Add slider</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Slider 1<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="file" class="form-control" name="slider_1" placeholder="Product Name"  >
                         <input type="hidden" class="form-control" name="oldImage" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->slider_1)?>">
                         <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> ">
                     </div>
                     
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Slogan<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                         <input type="hidden" class="form-control" name="id" placeholder="Product Name" value="<?php if(!empty($edit_data)) echo( $edit_data->id); ?>" >
                        <input type="text" class="form-control" name="slogan" placeholder="Product Name" value="<?php if(!empty($edit_data)) echo( $edit_data->slogan); ?>" >
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Title<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="title" placeholder="Product Name" value="<?php if(!empty($edit_data)) echo( $edit_data->title); ?>" >
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Offer<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="offer" placeholder="Product Name" value="<?php if(!empty($edit_data)) echo( $edit_data->offer); ?>" >
                     </div>
                  </div>
                   <div class="col-12" style="margin-left: 350px;">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
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
