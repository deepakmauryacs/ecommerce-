<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
        All Customers List
      </h3>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-12">
            <div class="box">
               <div class="box-body">
                  <div class="table-responsive">
                     <table id="data_list" class="table table-bordered table-hover display nowrap margin-top-10">
                        <thead>
                          <tr>
                            <th>S.N.</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Status</th>
                         </tr>
                           </thead>
                                 <tbody>
                               
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
     url:"<?php echo base_url('Admin/Customers/getCustomersList');?>",
     type:"POST"  
    }
   });
  }
  
  
  
  
 
});
</script>
        