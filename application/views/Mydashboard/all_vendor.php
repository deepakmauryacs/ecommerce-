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
                            <th>#</th>
                            <th>Vendor ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Approval</th>
                            
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                                <?php
                                $i = 1;
                                foreach ($user as $row)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><a href="#"><?php echo $row->vendor_id; ?></a></td>
                                    <td><?php echo $row->first_name; ?></td>
                                    <td><?php echo $row->last_name; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td>
                                        <label class="switch">
                                                <input type="checkbox" value="1" checked onchange="change_status(<?php echo $row->id; ?>,this.value);">
                                                <?php if($row->status=='1')
                                                  {
                                                    echo "Active";
                                                  }
                                                  else{
                                                    echo "Inactive";
                                                  }
                                                ; ?>
                                                <span class="slider round"></span>
                                         </label>
                                    </td>
                                   <td>
                                    <a  href="<?php echo base_url(); ?>Admin/Product/vendor_details/<?php echo $row->id ?>" type="button" class="btn btn-success" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo base_url() ?>Vendor/Product/delete_vendor/<?php echo $row->id ?>" type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
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
