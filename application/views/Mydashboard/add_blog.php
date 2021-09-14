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
        Add Blog
      </h3>
   </section>
   
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Blog/add_blog')?>" method="post" class="custom-validation" enctype="multipart/form-data" >
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Blog Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Blog Title</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" name="blog_title"  id="example-text-input" placeholder="Name" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="example-text-input"  class="col-sm-3 col-form-label">Category</label>
                     <div class="col-sm-9">
                        <select class="form-control" name="category" style="width: 100%;" required>
                            <option value="">Select Category</option>
                          <?php
                          $sql="SELECT * FROM tbl_blog_category";
                          $category_name=$this->db->query($sql)->result();
                          foreach ($category_name as $row) {
                        ?>
                             <option value="<?php echo $row->id; ?>"><?php echo $row->category_name ; ?></option> 
                             <?php
                              }
                             ?>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="exampleInputFile"  class="col-sm-3 col-form-label">Slug</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" name="slug" placeholder="Slug" id="example-text-input">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="icon"  class="col-sm-3 col-form-label">Banner</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="file" name="banner" placeholder="icon" id="icon"> 
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Short Description</label>
                     <div class="col-sm-9">
                         <textarea class="form-control" rows="5" name="short_description"> 
                        </textarea>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Description</label>
                     <div class="col-sm-9">
                        <textarea class="form-control" rows="5" name="description"> 
                        </textarea>
                     </div>
                  </div>
                   <div class="form-group row">
                     <label for="exampleInputFile"  class="col-sm-3 col-form-label">Meta Title</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" name="meta_title" placeholder="Meta Title" id="example-text-input">
                     </div>
                  </div>
                     <div class="form-group row">
                     <label for="icon"  class="col-sm-3 col-form-label">Meta Image</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="file" name="meta_image" placeholder="Meta Image" id="icon"> 
                     </div>
                  </div>
                   <div class="form-group row">
                     <label for="example-text-input" class="col-sm-3 col-form-label">Meta Description</label>
                     <div class="col-sm-9">
                        <textarea class="form-control" rows="5" name="meta_description"> 
                        </textarea>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="exampleInputFile"  class="col-sm-3 col-form-label">Meta Keyword</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" name="meta_keyword" placeholder="Meta Keyword" id="example-text-input">
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