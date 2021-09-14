<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h3 style="margin-top: 5px;">
        All Orders
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
                            <th>Billing Id</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            <th>Action</th>
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
     url:"<?php echo base_url('Admin/Order/getOrderList');?>",
     type:"POST"  
    }
   });
  }
});
</script>

<script>
  function change_status(billing_id,status)
   {
	$.ajax({
       type: 'post', 
       url:  '<?php echo base_url('Admin/Order/change_status'); ?>',
       data: {billing_id:billing_id,status:status}, 
       dataType:'json',
       beforeSend:function()
        {
          $('#preloader').css('display','block');
        },
        success:function(responce)
         { 
        if(responce.status==0)
          {
            alert('Something Went to Wrong');
          }
          else if(responce.status==1)
          {
           alert('Status Change Successfully')
          }
          get_list();
          },
        error:function()
         {
          alert('Something Went to Wrong');
         },
        
     });
  }
</script>


