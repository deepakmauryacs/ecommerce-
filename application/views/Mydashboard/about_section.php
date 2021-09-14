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
        Update About
      </h3>
   </section>
          <!-- end page title -->             
   <div class="row justify-content-center">
      <div class="col-md-9">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title" style="color: blue;">Update About Section</h4>
                  <form  action="<?php echo base_url('Admin/About/update_about_section'); ?>"  method="post" class="custom-validation" enctype="multipart/form-data">  
                  <div class="row">
                    <div class="col-md-12"> 
                         <img src="<?php echo base_url() ?>uploads/about/<?php if(!empty($edit_data))  echo($edit_data->image)?>" style="width: 100%;">
                      </div>
                    </div>

                  <div class="row">
                   <div class="col-md-12">
                      <div class="form-group" style="margin-top: 10px;">
                          <label>Image </label>
                          <input type="file" class="form-control" name="image" style="padding-top: 5px;">
                          <input type="hidden" class="form-control" name="oldImage" style="padding-top: 5px;"
                           value="<?php if(!empty($edit_data))  echo($edit_data->image)?>">
                           <input type="hidden" class="form-control" name="id" value="1" required>
                      </div>
                   </div>
                   <div class="col-md-12">
                      <div class="form-group">
                          <label>Heading</label>
                          <input type="text" class="form-control" name="heading1" value="<?php if(!empty($edit_data)) echo( $edit_data->heading1) ?>" required placeholder="Heading"/>
                      </div>
                   </div>

                  <div class="col-md-12">
                       <div class="form-group">
                          <label>Description</label>
                          <div class="form-group">
                              <textarea  class="form-control ckeditor" rows="5" name="description1"   required>
                                <?php if(!empty($edit_data)) echo ($edit_data->description1); ?>
                              </textarea>
                          </div>
                      </div>
                   </div>

                  <div class="col-md-12">
                     <div class="text-center">
                        <button type="submit"  class="btn btn-primary waves-effect waves-light mr-1" >
                              Submit
                        </button>
                       </div>   
                  </div>  
                 </div>
               </form>
              </div>
           </div>
        </div> 
     </div>
    </div>
  </div>
</div>

  