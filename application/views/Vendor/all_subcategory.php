
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
        All Category Details
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
                            <th>S.N.</th>
                            <th>Category Name</th>
                            <th>Subcategory Name</th>
                            <th>Type</th>
                            <th>Banner</th>
                            <th>Icon</th>
                            <th>Meta Title</th>
                            <th>Commision Rate</th>

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
                                    <td><?php echo $row->subcategory_name; ?></td>
                                    <td><?php echo $row->type; ?></td>
                                    <td><img style="width: 50px;height: 50px;" src="<?php echo base_url().'uploads/subcategory/'.$row->banner; ?>"></td>
                                    <td><img style="width: 50px;height: 50px;" src="<?php echo base_url().'uploads/subcategory/'.$row->icon; ?>"></td>
                                    <td><?php echo $row->meta_title; ?></td>
                                    <td><?php echo $row->commision_rate; ?></td>
                                   <td>
                                    <a href="<?php echo base_url() ?>Admin/Product/product_details/<?php echo $row->id ?>" type="button" class="btn btn-success" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo base_url() ?>Admin/Product/edit_subcategory/<?php echo $row->id ?>" type="button" class="btn btn-primary" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url() ?>Admin/Product/delete_subcategory/<?php echo $row->id ?>" type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
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
  