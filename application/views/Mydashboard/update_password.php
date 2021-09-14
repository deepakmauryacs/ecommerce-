<div class="content-wrapper">
     <!-- Content Header (Page header) -->
  <section class="content-header">
      <h3 style="margin-top: 5px;">
        Update Password
      </h3>
      <ol class="breadcrumb">
         <a href="#" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Go Back</span></a>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         
         <div class="col-md-9 col-sm-12">
            
             <?php  if ($this->session->flashdata('success')): ?>
             <div class="alert text-white bg-success alert-dismissible" style="border-radius: 0px; margin-top: -15px; text-align: center;" role="alert">
               <div class="iq-alert-text">
                  <?php echo $this->session->flashdata('success'); 
                  $this->session->set_flashdata('success',"");
              $this->session->set_flashdata('msg_class',''); ?>
               </div>
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <i class="ri-close-line"></i>
             </div>
            <?php endif; ?>
            
             <?php  if ($this->session->flashdata('delete')): ?>
             <div class="alert text-white bg-danger alert-dismissible" style="border-radius: 0px; margin-top: -15px; text-align: center;" role="alert">
               <div class="iq-alert-text">
                  <?php echo $this->session->flashdata('delete'); 
                  $this->session->set_flashdata('delete',"");
                  $this->session->set_flashdata('msg_class',''); ?>
               </div>
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <i class="ri-close-line"></i>
             </div>
            <?php endif; ?>
            
            
            
            <form action="<?php echo base_url('Admin/Admin/update_password'); ?>" method="post"  enctype="multipart/form-data" novalidate>
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Update Password</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">

                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Password<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                         <input type="text" class="form-control" name="password"  placeholder="Password" required>
                     </div>
                  </div>
                  
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Enter New Password<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                         <input type="text" class="form-control" name="new_password" placeholder="Enter New Password" required>
                     </div>
                  </div>
                 
                 
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Repeat Password<span class="text-danger">*</span></label>
                     <div class="col-md-8">
                         <input type="text" class="form-control" name="repeat_password"  placeholder="Repeat Password" required>

                     </div>
                  </div>
                 
                 
                  
                
                  
                
                  
              
                <div class="col-12" style="margin-left: 350px;">
                    <button name="submit" type="submit" class="btn btn-success">Update</button>
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
