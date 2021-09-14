<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Vendor/Product/update_product'); ?>" method="post" class="custom-validation" enctype="multipart/form-data">
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
                     <label class="col-md-3 col-from-label">Product Name <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="product_name" placeholder="Product Name" onchange="update_sku()" value="<?php if(!empty($edit_data))  echo($edit_data->product_name)?>" required>
                     </div>
                  </div>
                     <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label">Category <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <select class="form-control" name="category_name" id="category_id">
                           <option   value="<?php if(!empty($edit_data))  echo($edit_data->category_name)?>" >Women Clothing &amp; Fashion</option>
                              <option value="<?php if(!empty($edit_data))  echo($edit_data->category_name)?>">-- Hot Categories</option>
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->category_name)?>">Women Clothing &amp; Fashion</option>
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->category_name)?>">---- Party Dress</option>
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->category_name)?>">---- Beauty &amp; Health</option>
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->category_name)?>">---- Women shoe</option>
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->category_name)?>">---- Sleeping Dress</option>
                        </select>
                     </div>
                  </div>
                     <div class="form-group row" id="brand">
                     <label class="col-md-3 col-from-label">Brand</label>
                     <div class="col-md-8">
                        <select class="form-control" name="brand_id" id="brand_id">
                           <option value="">Select Brand</option>
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->brand_id)?>">Ford</option>
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->brand_id)?>">Chevrolet</option>
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->brand_id)?>">Audi</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Unit</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="unit" value="<?php if(!empty($edit_data))  echo($edit_data->unit)?>" placeholder="Unit (e.g. KG, Pc etc)" required="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Minimum Qty <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="number" lang="en" class="form-control" name="min_qty" value="<?php if(!empty($edit_data))  echo($edit_data->min_qty)?>" min="1" required="">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Tags <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="tags" value="<?php if(!empty($edit_data))  echo($edit_data->tags)?>" placeholder="Tags">
                        <small class="text-muted">This is used for search. Input those words by which cutomer can find this product.</small>
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
                         <input type="hidden" class="form-control" name="oldImage" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->gallery_image)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                        <small class="text-muted">These images are visible in product details page gallery. Use 600x600 sizes images.</small>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image <small>(300x300)</small></label>
                     <div class="col-md-8">
                        <input type="file" name="thumbnail_image" id="exampleInputFile"><br>
                        <input type="hidden" class="form-control" name="oldImage" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->thumbnail_image)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                        <small class="text-muted">This image is visible in all product box. Use 300x300 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
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
                        <textarea rows="5" style="width: 100%" name="description"><?php if(!empty($edit_data))  echo($edit_data->description); ?>
                        </textarea>
                        <small class="text-muted">Use proper link without extra parameter. Don't use short share link/embeded iframe code.</small>
                     </div>
                  </div>
               </div>
                 <div class="col-12" style="margin-left: 350px;">
                    <button name="submit" type="submit" class="btn btn-success">Update</button>
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