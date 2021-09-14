<div class="content-wrapper">
 <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
       All Offer
      </h3>
      <ol class="breadcrumb">
         <a href="<?php  echo base_url('Admin/Offer/index') ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Add New Offer</span></a>
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
                            <th>Image</th>
                            <th>Offer Name</th>
                            <th>Offer Price</th>
                            <th>Product name</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                                <?php
                                $i = 1;
                                if(!empty($offer)){
                                foreach ($offer as $row)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><img style="width: 50px;height: 50px;" src="<?php echo base_url().'uploads/offer/'.$row->image; ?>"></td>
                                    <td><?php echo $row->offer_name;?></td>
                                    <td><?php echo $row->offer_price;?></td>
                                    <td><?php echo $row->product;?></td>
                                    <td><label class="switch" <?php echo $row->id; ?>>
                                      <input type="checkbox" class="custom-control-input" id="customSwitch<?php echo $row->id; ?>" <?php if($row->status ==1) echo 'checked'; ?> onchange="change_status(<?php echo $row->id; ?>)" >
                                      <span class="slider round"></span>
                                    </label></td>
                                   <td>
                                    <a href="<?php echo base_url() ?>Admin/Offer/delete_offer/<?php echo $row->id ?>" type="button" class="btn btn-danger" style="width: 33px;color: white;margin-top: 5px;"><i class="fa fa-trash"></i></a>
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
  <script>
   function change_status(id){
    //   alert(id);
                $.ajax({
                    url:"<?=base_url() ?>Admin/Offer/changes_status",
                    type:"GET",
                    data:{id:id},
                    success:function(succ){
                        alert(succ);
                    }
                });
            }
  
  </script>