<style type="text/css">
.select2-container .select2-selection--single {
    height: 35px;
    border: 1px solid #d2d6de !important;
    border-radius: 0px;
}
</style>
<div class="content-wrapper">
      <section class="content-header">
      <h3 style="margin-top: 5px;">
        Add Offer
      </h3>
      <ol class="breadcrumb">
         <a href="<?php echo base_url('Admin/Offer/all');?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Go Back</span></a>
      </ol>
   </section>
   
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Offer/add_offer')?>" method="post" class="custom-validation" enctype="multipart/form-data" >
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Offer Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Offer name</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" name="offer_name"  id="example-text-input" placeholder="Offer Name" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Offer Price</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" name="offer_price"  id="example-text-input" placeholder="Offer Price" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Offer Image</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="file" name="image"  id="example-text-input" placeholder="Name" required>
                     </div>
                  </div>
                  
                   <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Offer Type</label>
                     <div class="col-sm-9">
                       <select class="form-control" name="offer_type">
                           <option value=""> Select Offer Type </option>
                         <?php foreach($offer as $row):?>  
                          <option value="<?php echo $row->offer_type;?>"><?php echo $row->offer_type;?></option>
                         <?php endforeach;?>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Offer Applicable On</label>
                     <div class="col-sm-9">
                       <select class="form-control select2" multiple="multiple" name="product[]">
                          <?php foreach($product as $row):?>
                          <option value="<?php echo $row->product_name;?>"><?php echo $row->product_name;?></option>
                           <?php endforeach;?>
                        </select>
                     </div>
                  </div>
                  
                  
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Date From</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="date" name="date_from"  id="example-text-input"  required>
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Date To</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="date" name="date_to"  id="example-text-input" required>
                     </div>
                  </div>
                  
                  
                  <div class="form-group row">
                     <label for="exampleInputFile"  class="col-sm-2 col-form-label"></label>
                     <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                     </div>
                  </div>
               </div>
               <!-- /.col -->
            </div>
         </form>
            <!-- /.row -->
         </div>
         <!-- /.box-body -->
      </div>
      <!-- /.box -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->