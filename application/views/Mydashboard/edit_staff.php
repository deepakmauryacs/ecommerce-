<div class="content-wrapper">
     <!-- Content Header (Page header) -->
  <section class="content-header">
      <h3 style="margin-top: 5px;">
        Staff Information
      </h3>
      <ol class="breadcrumb">
         <a href="<?php echo base_url('Admin/Staff/staffs')?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Go Back</span></a>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Staff/update_staff'); ?>" method="post" class="custom-validation" enctype="multipart/form-data" novalidate>
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Staff Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Name<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                         <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data))  echo($edit_data->id);?>">
                         <input type="text" class="form-control" name="name" value="<?php if(!empty($edit_data))  echo($edit_data->name);?>" placeholder="Name" required>
                     </div>
                  </div>
                
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Email</label>
                     <div class="controls col-md-8">
                        <input type="email" class="form-control" name="email" value="<?php if(!empty($edit_data))  echo($edit_data->email);?>" placeholder="Email" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Phone <span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="number"  class="form-control" min="0" name="phone" value="<?php if(!empty($edit_data))  echo($edit_data->phone);?>" placeholder="Phone" required>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-from-label">Password<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="password" lang="en" class="form-control"  name="password" value="<?php if(!empty($edit_data))  echo($edit_data->password);?>" placeholder="Password"  required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Role<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <select class="form-control" name="role" style="width: 100%;" required>
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->role);?>"> Management </option>
                            <option value="<?php if(!empty($edit_data))  echo($edit_data->role);?>"> Accountant </option>
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
