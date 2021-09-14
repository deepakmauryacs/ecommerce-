<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Vendor/Product/add_product'); ?>" method="post" class="custom-validation" enctype="multipart/form-data">
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Product Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>

                <?php  
                       $vendordata=$this->session->userdata('vendordata');

                       // print_r($vendordata);
                ?>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Product Name <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="product_name" placeholder="Product Name"  required="">
                      <!-- <input type="hidden" class="form-control" name="vendor_id" value="<?php  echo $vendordata['vendor_id'] ?>"> -->
                     </div>
                  </div>
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Category <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <select class="form-control" name="category_name" id="category_id">
                           <option value="1">Women Clothing &amp; Fashion</option>
                           <option value="2">-- Hot Categories</option>
                           <option value="3">Women Clothing &amp; Fashion</option>
                           <option value="4">---- Party Dress</option>
                           <option value="4">---- Beauty &amp; Health</option>
                           <option value="5">---- Women shoe</option>
                           <option value="6">---- Sleeping Dress</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row" id="brand">
                     <label class="col-md-3 col-from-label">Brand</label>
                     <div class="col-md-8">
                        <select class="form-control" name="brand_id" id="brand_id">
                           <option value="">Select Brand</option>
                           <option value="1">Ford</option>
                           <option value="2">Chevrolet</option>
                           <option value="3">Audi</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Unit</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" required="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Minimum Qty <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="number" lang="en" class="form-control" name="min_qty" value="1" min="1" required="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Tags <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="tags" placeholder="Tags">
                        <small class="text-muted">This is used for search. Input those words by which cutomer can find this product.</small>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-from-label">Price <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="number" class="form-control" name="price" min="0" placeholder="Price">
                     </div>
                  </div>
                     <div class="form-group row">
                     <label class="col-md-3 col-from-label">Barcode</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="barcode" placeholder="Barcode">
                     </div>
                  </div>
                 
               </div>
            </div>
            <!-- /.col -->
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Product Images</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Gallery Images <small>(600x600)</small></label>
                     <div class="col-md-8">
                        <input type="file" name="gallery_image" id="exampleInputFile"><br>
                        <small class="text-muted">These images are visible in product details page gallery. Use 600x600 sizes images.</small>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image <small>(300x300)</small></label>
                     <div class="col-md-8">
                        <input type="file" name="thumbnail_image" id="exampleInputFile"><br>
                        <small class="text-muted">This image is visible in all product box. Use 300x300 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
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
                     <label class="col-md-3 col-from-label">Description</label>
                     <div class="col-md-8">
                        <grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
                        <textarea name="meta_description" rows="8" class="form-control" spellcheck="false"></textarea>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Meta Image</label>
                     <div class="col-md-8">
                        <input type="file" id="exampleInputFile" name="meta_image" >
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
                     <div class="col-md-8">
                        <textarea rows="5" style="width: 100%" name="description">
                        </textarea>
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