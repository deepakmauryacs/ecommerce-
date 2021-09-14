<div class="content-wrapper">
 <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
       All Cancellation
      </h3>
      <ol class="breadcrumb">
         <a href="<?php echo base_url('Admin/Privacy/cancellation');  ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Add Cancellation Policy</span></a>
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
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                                <?php
                                $i = 1;
                                if(!empty($desc)){
                                foreach ($desc as $row)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row->heading; ?></td>
                                    <td><?php echo $row->description;?></td>
                                   <td>
                                      <a href="<?php echo base_url() ?>Admin/Privacy/edit_cancellation/<?php echo $row->id ?>" type="button" class="btn btn-primary" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url() ?>Admin/Privacy/delete_cancellation/<?php echo $row->id ?>" type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
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
   