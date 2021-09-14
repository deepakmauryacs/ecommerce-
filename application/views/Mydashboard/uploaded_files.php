<style type="text/css">
.select2-container .select2-selection--single {
    height: 35px;
    border: 1px solid #d2d6de !important;
    border-radius: 0px;
}
</style>
<div class="content-wrapper">
      <section class="content-header">
      <h3 style="margin-top: 5px;">
        All uploaded files
      </h3>
      <ol class="breadcrumb">
         <a href="<?php echo base_url('Admin/Upload_file/upload'); ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Upload New File</span></a>
      </ol>
   </section>
   
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         
    
    
   <div class="col-md-12 col-sm-12">
     <?php  if ($this->session->flashdata('update')): ?>
     <div class="alert text-white bg-success alert-dismissible" style="border-radius: 0px; margin-top: -15px; text-align: center;" role="alert">
       <div class="iq-alert-text">
          <?php echo $this->session->flashdata('update'); 
          $this->session->set_flashdata('update',"");
      $this->session->set_flashdata('msg_class',''); ?>
       </div>
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <i class="ri-close-line"></i>
     </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('delete')): ?>
     <div class="alert text-white bg-danger alert-dismissible" style="border-radius: 0px; margin-top: -15px; text-align: center;" role="alert">
       <div class="iq-alert-text">
          <?php echo $this->session->flashdata('delete'); 
           $this->session->set_flashdata('delete',"");
            $this->session->set_flashdata('msg_class','');?>
       </div>
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <i class="ri-close-line"></i>
     </div>
    <?php endif; ?>
    
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">All uploaded files</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="row">
                               <?php
                                $i = 1;
                                if(!empty($data)){
                                foreach ($data as $row)
                                {
                                ?>
                                
                                
                     <div class="col-md-12 col-lg-3">
                      <div class="box box-default">
                          <img class="card-img-top img-responsive" src="<?php echo base_url().'uploads/product/'.$row->image; ?>" alt="Card image cap">
                           <div class="box-body">            	
            				<p class="card-text"><?php echo $row->image;  ?></p>
            				<a href="<?php echo base_url() ?>Admin/Upload_file/delete_file/<?php echo $row->id ?>" class="btn btn-primary">Delete File</a>
            				<a href="<?php echo base_url().'uploads/product/'.$row->image; ?>" class="btn btn-primary" download>Download File</a>
                        </div>
                      </div>
                    </div>
                    
                     <?php
                                }
                                }
                     ?>
                  </div>
                 
                
                
                
    
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