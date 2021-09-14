<div class="content-wrapper">
   <!-- Content Header (Page header) -->
  <section class="content-header">
      <h3 style="margin-top: 5px;">
        Add Coupon
      </h3>
      <ol class="breadcrumb">
         <a href="<?php echo base_url('Admin/Coupon/coupon');  ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Add Coupon</span></a>
      </ol>
   </section>

   <section class="content">
      <div class="row">
         <div class="col-12">
            <div class="box">
               <div class="box-body">
                  <div class="table-responsive">
                     <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Discount Type</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Valid From</th>
                            <th>Valid To</th>
                            <th>Created For</th>
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
                                    <td><?php echo $row->discount_type; ?></td>
                                    <td><?php echo $row->discount; ?></td>
                                    <td><?php echo $row->status; ?></td>
                                    <td><?php echo $row->valid_from; ?></td>
                                    <td><?php echo $row->valid_to; ?></td>
                                    <td><?php echo $row->created_for; ?></td>
                                   <td>

                                    <a href="<?php echo base_url() ?>Admin/Coupon/edit_coupon/<?php echo $row->id ?>" type="button" class="btn btn-primary" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url() ?>Admin/Coupon/delete_coupon/<?php echo $row->id ?>" type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
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