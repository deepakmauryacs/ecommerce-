
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
        All Vendor
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
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Unit</th>
                            <th>Minimum Qty.</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                                <?php
                                $i = 1;
                                foreach ($product as $row)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row->product_name; ?></td>
                                    <td><?php echo $row->category_name; ?></td>
                                    <td><?php echo $row->brand_id; ?></td>
                                    <td><?php echo $row->unit; ?></td>
                                    <td><?php echo $row->min_qty; ?></td>
                                    <td><?php if($row->status=='1')
                                        {
                                          echo "Active";
                                        }
                                        else{
                                          echo "Inactive";
                                        }
                                      ?>
                                        
                                      </td>
                                   <td>
                                    <a href="<?php echo base_url() ?>Vendor/Product/product_details/<?php echo $row->id ?>" type="button" class="btn btn-success" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo base_url() ?>Vendor/Product/edit_product/<?php echo $row->id ?>" type="button" class="btn btn-primary" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url() ?>Vendor/Product/delete_product/<?php echo $row->id ?>" type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
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
  <script type="text/javascript">
      function change_status(id,value)
      {
        $.ajax({
            type:'POST',
            data:{'id':id,'status':value},
            url:"<?php echo base_url(); ?>Web/update_status",
            success:function(response){
                alert(value);
            }
        });
      }
  </script>