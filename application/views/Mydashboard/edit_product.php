<div class="content-wrapper">
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Product/update_product'); ?>" method="post" class="custom-validation" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="product_name" placeholder="Product Name"  value="<?php if(!empty($edit_data))  echo($edit_data->product_name)?>" required>
                     </div>
                  </div>
                 <div class="form-group row">
                     <label class="col-md-3 col-from-label">Category <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <select class="form-control" name="category" id="category">
                            <option value="<?php if(!empty($edit_data))  echo($edit_data->id)?>"><?php if(!empty($edit_data))  echo($edit_data->category)?></option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row" id="category">
                     <label class="col-md-3 col-from-label"> Sub Category <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <select class="form-control" name="sub_category" id="sub_category">
                           <option value="<?php if(!empty($edit_data))  echo($edit_data->id)?>"><?php if(!empty($edit_data))  echo($edit_data->sub_category)?></option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row" id="brand">
                     <label class="col-md-3 col-from-label">Brand</label>
                     <div class="col-md-8">
                        <select class="form-control" name="brand" id="brand_id">
                            <option value="<?php if(!empty($edit_data))  echo($edit_data->id)?>"><?php if(!empty($edit_data))  echo($edit_data->brand)?></option>
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
                    <div class="form-group row">
                     <label class="col-md-3 col-from-label">Price <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="number" class="form-control" name="price" min="0" value="<?php if(!empty($edit_data))  echo($edit_data->price)?>"  placeholder="Price">
                     </div>
                    </div>
                   <div class="form-group row" id="disscount">
                     <label class="col-md-3 col-from-label">Discount Type</label>
                     <div class="col-md-8">
                        <select class="form-control" name="discount_type" id="brand_id">
                           <option value="">Select Discount Type</option>
                           <option  <?php echo ($edit_data->discount_type == 'fix' ) ? 'selected' : '' ?> value="fix"> Fix </option>
                           <option  <?php echo ($edit_data->discount_type == 'percentage' ) ? 'selected' : '' ?> value="percentage"> Percentage </option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Discount</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="discount" value="<?php if(!empty($edit_data))  echo($edit_data->discount)?>">
                     </div>
                  </div>
               </div>
            </div>
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
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Gallery Images <small>(210x272)</small></label>
                     <div class="col-md-8">
                        <input type="file" name="gallery_image" id="exampleInputFile"><br>
                         <input type="hidden" class="form-control" name="oldImage" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->gallery_image)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                        <small class="text-muted">These images are visible in product details page gallery. Use 210x272 sizes images.</small>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image 1<small>(263x350)</small></label>
                     <div class="col-md-8">
                        <input type="file" name="thumbnail_image" id="exampleInputFile"><br>
                        <input type="hidden" class="form-control" name="oldImage1" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->thumbnail_image)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                        <small class="text-muted">This image is visible in all product box. Use 263x350 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image 2 <small>(263x350)</small></label>
                     <div class="col-md-8">
                        <input type="file" name="thumbnail_image1" id="exampleInputFile"><br>
                        <input type="hidden" class="form-control" name="oldImage2" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->thumbnail_image1)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                        <small class="text-muted">This image is visible in all product box. Use 263x350 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image 3 <small>(263x350)</small></label>
                     <div class="col-md-8">
                        <input type="file" name="thumbnail_image2" id="exampleInputFile"><br>
                        <input type="hidden" class="form-control" name="oldImage3" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->thumbnail_image2)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                        <small class="text-muted">This image is visible in all product box. Use 263x350 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image 4 <small>(263x350)</small></label>
                     <div class="col-md-8">
                        <input type="file" name="thumbnail_image3" id="exampleInputFile"><br>
                        <input type="hidden" class="form-control" name="oldImage4" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->thumbnail_image3)?>">
                           <input type="hidden" class="form-control" name="id" value="<?php if(!empty($edit_data)) echo( $edit_data->id) ?> " required>
                        <small class="text-muted">This image is visible in all product box. Use 263x350 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.</small>
                     </div>
                  </div>
               </div>
            </div>
             <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title"> Product SEO </h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <div class="box-body">
                  <div class="form-group row">
                    <label class="col-md-3 col-from-label">Meta Title</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="meta_title" value="<?php if(!empty($edit_data))  echo($edit_data->meta_title); ?>" placeholder="Meta Title">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Meta Keyword</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="meta_keyword" value="<?php if(!empty($edit_data))  echo($edit_data->meta_keyword); ?>" placeholder="Meta Keyword">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Meta Description</label>
                     <div class="col-md-8">
                        <grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
                        <textarea name="meta_description" rows="8" class="form-control" spellcheck="false">
                            <?php if(!empty($edit_data))  echo($edit_data->meta_description); ?>
                        </textarea>
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
      </div>
</div>
</div>
</section>
</div>
<script type="text/javascript">
        $(document).ready(function(){
            $('#category').change(function(){ 
                var id=$(this).val();
               alert(id);
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