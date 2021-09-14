
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
        All Testimonial  Details
      </h3>
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
                                    <th>SN</th>
                                    <th>name</th>
                                    <th>Image </th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                //print_r($technology);
                                foreach ($slider as $row)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><img src="<?php echo base_url().'uploads/testomonial/'.$row->image; ?>" style="width: 50px;height: 50px;"></td>
                                    <td><?php echo $row->description; ?></td>
                                     <td>
                                    
                                    <a href="<?php echo base_url() ?>Admin/Add_slider/edit_testomonial/<?php echo $row->id ?>" type="button" class="btn btn-primary" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url() ?>Admin/Add_slider/delete_testomonial/<?php echo $row->id ?>" type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
                               </td>
                                </tr>
                                <?php
                                  }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
         </div> <!-- container-fluid -->
     </div>
    <!-- End Page-content -->
  </div>
