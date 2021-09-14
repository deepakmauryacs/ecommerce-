<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h3 style="margin-top: 5px;">
          Product Bulk Upload
      </h3>
      <ol class="breadcrumb">
         <a href="#" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Go Back</span></a>
      </ol>
   </section>
   <!-- Main content -->
   
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-12 col-sm-12">
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Product Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <div class="col-md-12">
                        <div class="card-body">
                            <div class="alert" style="color: #004085;background-color: #cce5ff;border-color: #b8daff;margin-bottom:0;margin-top:10px;">
                                <strong>Step 1:</strong>
                                <p>1. Download the skeleton file and fill it with proper data.</p>
                                <p>2. You can download the example file to understand how the data must be filled.</p>
                                <p>3. Once you have downloaded and filled the skeleton file, upload it in the form below and submit.</p>
                                <p>4. After uploading products you need to edit them and set product's images and choices.</p>
                            </div>
                            <br>
                            <div class="">
                                <a href="<?php  echo base_url() ?>uploads/productcsv/product_uploading.csv" download=""><button class="btn btn-info">Download CSV</button></a>
                            </div>
                            <div class="alert" style="color: #004085;background-color: #cce5ff;border-color: #b8daff;margin-bottom:0;margin-top:10px;">
                                <strong>Step 2:</strong>
                                <p>1. Category and Brand should be in numerical id.</p>
                                <p>2. You can download the pdf to get Category and Brand id.</p>
                            </div>
                            <br>
                            <div class="">
                                <a href="https://demo.activeitzone.com/ecommerce/bulk-upload/download/category"><button class="btn btn-info">Download Category</button></a>
                                <a href="https://demo.activeitzone.com/ecommerce/bulk-upload/download/brand"><button class="btn btn-info">Download Brand</button></a>
                            </div>
                            <br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            
            <!-- /.col -->
           <form method="post" id="import_csv" enctype="multipart/form-data" novalidate>  
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Upload Product File<span class="text-danger">*</span></h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Upload Product CSV File<span class="text-danger">*</span> </label>
                     <div class="controls col-md-8">
                     <input type="file" name="csv_file" id="csv_file" required accept=".csv" /><br>
                     </div>
                  </div>
                  <div class="col-12" style="margin-left: 350px;">
                    <button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Upload CSV</button> 
                 </div>
               </div>
            </div>
          </form>
         </div>
      </div>
    </div>
   </div>
</section>
</div>
<!-- /.content-wrapper -->
<script>
$(document).ready(function(){
  $('#import_csv').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url(); ?>Admin/Product/import",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      beforeSend:function(){
        $('#import_csv_btn').html('Importing...');
      },
      success:function(data)
      {
        $('#import_csv')[0].reset();
        $('#import_csv_btn').attr('disabled', false);
        $('#import_csv_btn').html('Import Done');
        alert('Product Add successfully....!')
        window.location.reload();
      }
    })
  });
  
});
</script>

