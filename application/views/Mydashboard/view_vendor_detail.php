<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <!-- <form action="<?php echo base_url('Admin/Registration/vendor_details'); ?>" method="post" class="custom-validation" enctype="multipart/form-data"> -->
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Vendor Details</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <table class="table mb-0 table-bordered">
                 <tbody>
                   <tr>
                     <th scope="row" style="width: 400px;">First Name</th>
                     <td><?php if(!empty($data)) echo ($data->first_name); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Last Name</th>
                     <td><?php if(!empty($data)) echo ($data->last_name); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Email</th>
                     <td><?php if(!empty($data)) echo ($data->email); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Password</th>
                     <td><?php if(!empty($data)) echo ($data->password); ?></td>
                  </tr>
                  <tr>
                     <th scope="row">Aadhar Card</th>
                     <td><img src="<?php echo base_url().'uploads/product'.$data->adhar_card; ?>"></td>
                  </tr>

                  <tr>
                     <th scope="row">Pan Card</th>
                     <td><img src="<?php echo base_url().'uploads/product'.$data->pan_card; ?>"></td>
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