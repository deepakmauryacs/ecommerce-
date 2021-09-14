<div class="content-wrapper">
     <!-- Content Header (Page header) -->
  <section class="content-header">
      <h3 style="margin-top: 5px;">
        Staff Information
      </h3>
      <ol class="breadcrumb">
         <a href="<?php echo base_url('Admin/Staff/all_staff')?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Go Back</span></a>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Staff/add_staff'); ?>" method="post" class="custom-validation" enctype="multipart/form-data" novalidate>
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
                         <input type="text" class="form-control" name="name" placeholder="Name" required>
                     </div>
                  </div>
                
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Email</label>
                     <div class="controls col-md-8">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Phone <span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="number"  class="form-control" min="0" name="phone" placeholder="Phone" required>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-from-label">Password<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="password" lang="en" class="form-control"  name="password" placeholder="Password"  required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Role<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <select class="form-control" name="role" style="width: 100%;" required>
                            <option value=""> --Select Role-- </--Select></option> 
                           <?php
                              $sql="SELECT * FROM tbl_staff_role";
                              $formarray=$this->db->query($sql)->result();
                              foreach ($formarray as $row) {
                            ?>
                                 <option value="<?php echo $row->id; ?>"><?php echo $row->name ; ?></option> 
                                 <?php
                              }
                             ?>
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
<!-- /.box -->
</section>
<!-- /.content -->
<!-- /.content-wrapper -->
