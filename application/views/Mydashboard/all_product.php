<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
        All Products
      </h3>
      <ol class="breadcrumb">
         <a href="<?php  echo base_url('Admin/Product/product') ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Add New Product</span></a>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-12">
               <?php if ($this->session->flashdata('update')): ?>
                   <div class="alert text-white bg-success alert-dismissible" role="alert">
                     <div class="iq-alert-text">
                        <?php echo $this->session->flashdata('update'); ?>
                     </div>
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <i class="ri-close-line"></i>
                    </div>
	             <?php endif; ?>
	            
	             <?php if ($this->session->flashdata('delete')): ?>
		             <div class="alert text-white bg-danger alert-dismissible" role="alert">
		             <div class="iq-alert-text"> <?php echo $this->session->flashdata('delete'); ?></div>
		             <button type="button" class="close" data-dismiss="alert">&times;</button>
		              <i class="ri-close-line"></i>
		             </div>
		         <?php endif; ?>
		         
            <div class="box">
               <div class="box-body">
                  <div class="table-responsive">
                     <table id="data_list" class="table table-bordered table-hover display nowrap margin-top-10">
                        <thead>
                          <tr>
                            <th>S.N.</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Unit</th>
                            <th>QR.</th>
                            <th>Todays Deal</th>
                            <th>Publish</th>
                            <th>Add QR Code.</th>
                            <th>Action</th>
                            </tr>
                           </thead>
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
    $(document).ready(function(){
    
      fill_datatable();
      
      function fill_datatable()
      {
        var dataTable = $('#data_list').DataTable({
       // "destroy": false,
        "processing" : true,
        "serverSide" : true,
        "searching" : true,
        "order" : [],
        "dom": 'Bfrtip',
         buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                  ],
        "ajax" : {
         url:"<?php echo base_url('Admin/Product/getProductList');?>",
         type:"POST"  
        }
       });
      }
    });
</script>
 
<script>
   function change_status(id){
                $.ajax({
                    url:"<?=base_url() ?>Admin/Product/changes_status",
                    type:"GET",
                    data:{id:id},
                    success:function(succ){
                        alert(succ);
                    }
                });
            }
  
  </script>       
