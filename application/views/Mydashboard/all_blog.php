<div class="content-wrapper">
 <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
       All Blog
      </h3>
      <ol class="breadcrumb">
         <a href="<?php  echo base_url('Admin/Blog/blog') ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Add New Blog</span></a>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-12">
            <div class="box">
               <div class="box-body">
                  <div class="table-responsive">
                     <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
                        <thead>
                          <tr>
                            <th>S.N.</th>
                            <th>Banner</th>
                            <th>Blog Title</th>
                            <th>Category</th>
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                                <?php
                                $i = 1;
                                if(!empty($blog)){
                                foreach ($blog as $row)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><img style="width: 50px;height: 50px;" src="<?php echo base_url().'uploads/blog/'.$row->banner; ?>"></td>
                                     <td><?php echo $row->blog_title; ?></td>
                                    <td><?php echo $row->category; ?></td>
                                    <td>
                                    
                                    <a href="<?php echo base_url() ?>Admin/Blog/delete_blog/<?php echo $row->id ?>" type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
                                   </td>
                                </tr>
                                <?php
                                   }
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
  