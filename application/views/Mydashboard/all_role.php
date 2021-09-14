<div class="content-wrapper">
 <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
       All Category
      </h3>
      <ol class="breadcrumb">
         <a href="<?php  echo base_url('Admin/Staff/role') ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Add New Role</span></a>
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
                            <th>Name</th>
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
                                    <td><?php echo $row->name; ?></td>
                                   <td>
                                    <a href="<?php echo base_url() ?>Admin/Staff/delete_role/<?php echo $row->id ?>" onclick="return confirm('Are you sure ?')"  type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
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
  