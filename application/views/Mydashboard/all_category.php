<div class="content-wrapper">
 <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
       All Category
      </h3>
      <ol class="breadcrumb">
         <a href="<?php  echo base_url('Admin/Category/product_category') ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Add New Category</span></a>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-12">
    
                
                <?php if ($this->session->flashdata('update')): ?>
                   <div class="alert text-white bg-success alert-dismissible" role="alert">
                     <div class="iq-alert-text">
                        <?php echo $this->session->flashdata('update'); ?>
                     </div>
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <i class="ri-close-line"></i>
                   </div>
	            <?php endif; ?>
	            
	             <?php if ($this->session->flashdata('delete')): ?>
		             <div class="alert text-white bg-danger alert-dismissible" role="alert">
		             <div class="iq-alert-text"> <?php echo $this->session->flashdata('delete'); ?></div>
		             <button type="button" class="close" data-dismiss="alert">&times;</button>
		             <i class="ri-close-line"></i>
		             </div>
		        <?php endif; ?>
             
             
             
            <div class="box">
               <div class="box-body">
                  <div class="table-responsive">
                     <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
                        <thead>
                          <tr>
                            <th>S.N.</th>
                            <th>Category Name</th>
                            <th>Category ID</th>
                            <th>Type</th>
                            <th>Banner</th>
                            <th>Icon</th>
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                                <?php
                                $i = 1;
                                foreach ($data as $row)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row->category_name; ?></td>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->type; ?></td>
                                    <td><img style="width: 50px;height: 50px;" src="<?php echo base_url().'uploads/category/'.$row->banner; ?>"></td>
                                    <td><?php echo $row->icon; ?></td>
                                   <td>
                                    <a href="<?php echo base_url() ?>Admin/Category/edit_category/<?php echo $row->id ?>" type="button" class="btn btn-primary" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url() ?>Admin/Category/delete_category/<?php echo $row->id ?>" type="button" onclick="return confirm('Are you sure?')"  class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
                                   </td>
                                </tr>
                                <?php
                                  }
                                ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
         </div>
     </div>
  </div>
  