<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <!-- <form action="<?php echo base_url('Admin/Registration/vendor_details'); ?>" method="post" class="custom-validation" enctype="multipart/form-data"> -->
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Product  Details</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <table class="table mb-0 table-bordered">
                 <tbody>
                   <tr>
                     <th scope="row" style="width: 400px;">Product Name</th>
                     <td><?php if(!empty($data)) echo ($data->product_name); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Brand Id</th>
                     <td><?php if(!empty($data)) echo ($data->brand_id); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Unit</th>
                     <td><?php if(!empty($data)) echo ($data->unit); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Minimum Quantity</th>
                     <td><?php if(!empty($data)) echo ($data->min_qty); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Tags</th>
                     <td><?php if(!empty($data)) echo ($data->tags); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Price</th>
                     <td><?php if(!empty($data)) echo ($data->price); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Gallery Image</th>
                     <td><img style="width: 140px;height: 140px;" src="<?php echo base_url().'uploads/product/'.$data->gallery_image; ?>"></td>
                  </tr>

                  <tr>
                     <th scope="row">Thumbnail Image</th>
                     <td><img style="width: 140px;height: 140px;" src="<?php echo base_url().'uploads/product/'.$data->thumbnail_image; ?>"></td>
                  </tr>
                   <tr>
                     <th scope="row">Description</th>
                     <td><?php if(!empty($data)) echo ($data->description); ?></td>
                  </tr>
               </tbody>
            </table>
         </div>
            <!-- /.col --> 
       <!--   </form>
      -->
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