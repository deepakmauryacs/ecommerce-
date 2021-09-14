<div class="content-wrapper">
     <!-- Content Header (Page header) -->
  <section class="content-header">
      <h3 style="margin-top: 5px;">
        Footer Section
      </h3>
  </section>
<div class="row">
<div class="col-md-12 col-sm-12">
   <!-- Main content -->
<section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Footer/update_footer_logo_section'); ?>" method="post" class="custom-validation" enctype="multipart/form-data" novalidate>
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Footer Section</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Footer Logo<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                         <input type="file" class="form-control" value="<?php if(!empty($edit_data))  echo($edit_data->logo);?>" name="logo" >
                         <input type="hidden" class="form-control" name="oldImage" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->logo)?>">
                           <input type="hidden" class="form-control" name="id" value="1" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Description</label>
                     <div class="controls col-md-8">
                        <textarea type="text" class="form-control" name="description" required><?php if(!empty($edit_data))  echo($edit_data->description);?></textarea>
                     </div>
                  </div>
                    <button style="margin-left:250px;" name="submit" type="submit" class="btn btn-success">Update</button>
               </div>
            </div>
         </form>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
</div>
</section>
</div>
   <!-- Main content -->
<section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Footer/update_information_section'); ?>" method="post" class="custom-validation" enctype="multipart/form-data" novalidate>
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Contact Info Widget</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Address<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                         <input type="text" class="form-control" name="address" placeholder="Contact" value="<?php if(!empty($edit_data))  echo($edit_data->address);?>" required>
                         <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data))  echo($edit_data->id);?>" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Phone</label>
                     <div class="controls col-md-8">
                        <input type="phone" class="form-control" name="phone" min="0" placeholder="Phone Number" value="<?php if(!empty($edit_data))  echo($edit_data->phone);?>" required>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-from-label">Email</label>
                     <div class="controls col-md-8">
                        <input type="email" class="form-control" name="email" min="0" value="<?php if(!empty($edit_data))  echo($edit_data->email);?>" placeholder="Enter Email" required>
                     </div>
                  </div>
                    <button style="margin-left:250px;" name="submit" type="submit" class="btn btn-success">Update</button>
               </div>
            </div>
         </form>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
</div>
</section>
</div>






