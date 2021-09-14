<style type="text/css">
.select2-container .select2-selection--single {
    height: 35px;
    border: 1px solid #d2d6de !important;
    border-radius: 0px;
}
</style>
<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Category/update_category')?>" method="post" class="custom-validation" enctype="multipart/form-data" >
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Category Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" value="<?php if(!empty($edit_data))  echo($edit_data->category_name)?>" name="category_name"  id="example-text-input" placeholder="Name">
                     </div>
                  </div>
              
                  <div class="form-group row">
                     <label for="example-text-input"  class="col-sm-3 col-form-label">Type</label>
                     <div class="col-sm-9">
                        <select class="form-control" name="type" style="width: 100%;">
                           <option selected="selected">----select----</option>
                           <option <?php if($edit_data->type == 'physical') echo 'selected="selected"'; ?> value="physical">Physical</option>
                           <option <?php if($edit_data->type == 'digital') echo 'selected="selected"'; ?> value="digital">Digital</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="exampleInputFile"  class="col-sm-3 col-form-label">Banner (210x272)</label>
                     <div class="col-sm-9">
                        <input type="file" id="exampleInputFile" name="banner">
                        <input type="hidden" class="form-control" name="oldImage" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->banner)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label for="icon"  class="col-sm-3 col-form-label">Icon</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" name="icon" value='<?php if(!empty($edit_data)) echo( $edit_data->icon) ?>'> 
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