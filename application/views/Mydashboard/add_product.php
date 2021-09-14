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
        Add Products
      </h3>
      <ol class="breadcrumb">
         <a href="<?php  echo base_url('Admin/Product/view_all_product') ?>" type="button"  class="btn btn-block btn-primary" style="float: right;"><span style="font-size: 15px;color: white;">Go Back</span></a>
      </ol>
   </section>
   <!-- Main content -->
   
   <section class="content">
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
              <?php if ($this->session->flashdata('success')): ?>
                   <div class="alert text-white bg-success alert-dismissible" role="alert">
                     <div class="iq-alert-text">
                        <?php echo $this->session->flashdata('success'); ?>
                     </div>
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <i class="ri-close-line"></i>
                   </div>
	            <?php endif; ?>
	            
            <form action="<?php echo base_url('Admin/Product/add_product'); ?>" method="post"  enctype="multipart/form-data"  novalidate>
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title"> Product Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>

                <?php  
                       $vendordata=$this->session->userdata('vendordata');
                ?>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Product Name <span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="text" class="form-control" name="product_name" placeholder="Product Name"  required data-validation-required-message="This field is required">
                      <!-- <input type="hidden" class="form-control" name="vendor_id" value="<?php  echo $vendordata['vendor_id'] ?>"> -->
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Category <span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <select class="form-control select2" name="category" id="category" required>
                           <option value="">No Selected</option>
                              <?php foreach($category as $row):?>
                                 <option value="<?php echo $row->id;?>"><?php echo $row->category_name;?></option>
                              <?php endforeach;?>
                        </select>
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label"> Sub Category <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <select class="form-control select2" name="sub_category" id="sub_category">
                           <option value="1">No Selected</option>
                        </select>
                     </div>
                  </div>
                  
                  
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Brand</label>
                     <div class="col-md-8">
                        <select class="form-control" name="brand">
                              <option value="">Select Brand</option>
                              <?php foreach($brand as $row):?>
                                 <option value="<?php echo $row->id;?>"><?php echo $row->brand_name;?></option>
                              <?php endforeach;?>
                        </select>
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Batch No.<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="text" class="form-control" name="batch_no" placeholder="Batch Number" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">FSSAI Licence Number<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="text" class="form-control" name="fssai_lic_no" placeholder="FSSAI Licence Number" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Ingredients<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="text" class="form-control" name="ingredients" placeholder="Ingredients" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Quantity<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <select class="form-control" name="quantity" id="brand_id">
                              <option value="">Select Quantity</option>
                              <?php foreach($quantity as $row):?>
                                 <option value="<?php echo $row->quantity;?>"><?php echo $row->quantity;?></option>
                              <?php endforeach;?>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Manufacture Date<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="date" class="form-control" name="manufacture_date" placeholder="Ingredients" required>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-from-label">Expiry Date<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="date" class="form-control" name="expiry_date" placeholder="Ingredients" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Weight<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                         <select class="form-control" name="weight" id="brand_id">
                              <option value="">Select Weight</option>
                              <?php foreach($weight as $row):?>
                                 <option value="<?php echo $row->weight;?>"><?php echo $row->weight;?></option>
                              <?php endforeach;?>
                        </select>
                     </div>
                  </div>
                  <!--<div class="form-group row" id="brand">-->
                  <!--   <label class="col-md-3 col-from-label">Color</label>-->
                  <!--   <div class="col-md-8">-->
                  <!--      <select class="form-control select2" multiple="multiple" name="color[]" data-placeholder=" Select Color"-->
                  <!--      style="width: 100%;">-->
                  <!--         <option value="">Select Color</option>-->
                  <!--         <?php  foreach($color as $row):?>-->
                  <!--            <option value="<?php echo $row->id;?>"><?php echo $row->color_name;?></option>-->
                  <!--         <?php endforeach;?>-->
                  <!--      </select>-->
                  <!--   </div>-->
                  <!--</div>-->
                  
                  <!--<div class="form-group row" id="brand">-->
                  <!--   <label class="col-md-3 col-from-label">Size</label>-->
                  <!--   <div class="col-md-8">-->
                  <!--      <select class="form-control select2" multiple="multiple" name="size[]" data-placeholder=" Select Size"-->
                  <!--      style="width: 100%;">-->
                  <!--         <option value="">Select Size</option>-->
                  <!--         <?php foreach($size as $row):?>-->
                  <!--            <option value="<?php echo $row->id;?>"><?php echo $row->size_name;?></option>-->
                  <!--         <?php endforeach;?>-->
                  <!--      </select>-->
                  <!--   </div>-->
                  <!--</div>-->
                  
                  
                  
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Unit<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                       <select class="form-control" name="unit" id="brand_id">
                              <option value="">Select Unit</option>
                              <?php foreach($unit as $row):?>
                                 <option value="<?php echo $row->unit;?>"><?php echo $row->unit;?></option>
                              <?php endforeach;?>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Minimum Qty <span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="number" lang="en" class="form-control" name="min_qty" value="1" min="1" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label"> Tags </label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="tags" placeholder="Tags">
                        <small class="text-muted">This is used for search. Input those words by which cutomer can find this product.</small>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-from-label">Price <span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="number" class="form-control" name="price" min="0" placeholder="Price" required>
                     </div>
                  </div>
                  
                  <div class="form-group row" id="disscount">
                     <label class="col-md-3 col-from-label">Discount Type</label>
                     <div class="controls col-md-8">
                        <select class="form-control" name="discount_type" id="disscount_type" required>
                           <option value="">Select Discount Type</option>
                           <option value="fix"> Fix </option>
                           <option value="percentage"> Percentage </option>
                        </select>
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Discount</label>
                     <div class="controls col-md-8">
                        <input type="number" class="form-control" name="discount"  id="disscount" required>
                     </div>
                  </div>
                  
                  
                    <div class="form-group row">
                     <label class="col-md-3 col-from-label">Barcode</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="barcode"  placeholder="Barcode">
                     </div>
                  </div>
                 
               </div>
            </div>
            <!-- /.col -->
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Product Images<span class="text-danger">*</span></h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Gallery Images <span class="text-danger">*</span> <small>(210x272)</small></label>
                     <div class="controls col-md-8">
                        <input type="file" name="gallery_image" id="exampleInputFileone" required><br>
                        <small class="text-muted">These images are visible in product details page gallery. Use 210x272 sizes images.</small>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image 1 <small>(263x350)</small></label>
                     <div class="controls col-md-8">
                        <input type="file" name="thumbnail_image" id="exampleInputFiletwo" required><br>
                        <small class="text-muted">This image is visible in all product box. Use 263x350 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image 2 <small>(263x350)</small></label>
                     <div class="controls col-md-8">
                        <input type="file" name="thumbnail_image1" id="exampleInputFiletwo" required><br>
                        <small class="text-muted">This image is visible in all product box. Use 263x350 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image 3 <small>(263x350)</small></label>
                     <div class="controls col-md-8">
                        <input type="file" name="thumbnail_image2" id="exampleInputFiletwo" required><br>
                        <small class="text-muted">This image is visible in all product box. Use 263x350 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image 4 <small>(263x350)</small></label>
                     <div class="controls col-md-8">
                        <input type="file" name="thumbnail_image3" id="exampleInputFiletwo" required><br>
                        <small class="text-muted">This image is visible in all product box. Use 263x350 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">SEO Meta Tags</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <div class="box-body">
                  <div class="form-group row">
                      <label class="col-md-3 col-from-label">Meta Title</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Meta Keyword</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="meta_keyword" placeholder="Meta Keyword">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Meta Description</label>
                     <div class="col-md-8">
                        <grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
                        <textarea name="meta_description" rows="8" class="form-control" spellcheck="false"></textarea>
                     </div>
                  </div>
               </div>
            </div>
            
            
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Product Description</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Description</label>
                     <div class="controls col-md-8">
                         <grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
                         <textarea name="description" rows="8" class="form-control" spellcheck="false" required></textarea>
                        <small class="text-muted">Use proper link without extra parameter. Don't use short share link/embeded iframe code.</small>
                     </div>
                  </div>
               </div>
                 <div class="col-12" style="margin-left: 350px;">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                 </div>
            </div>
          </form>
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
<script type="text/javascript">
        $(document).ready(function(){
            $('#category').change(function(){ 
                var id=$(this).val();
           //    alert(id);
                $.ajax({
                    url : "<?php echo site_url('Admin/Product/get_sub_category');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id+'>'+data[i].subcategory_name+'</option>';
                        }
                        $('#sub_category').html(html);
                    }
                });
                return false;
            }); 
             
        });
    </script>
