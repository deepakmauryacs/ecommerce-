<style type="text/css">
.select2-container .select2-selection--single {
    height: 35px;
    border: 1px solid #d2d6de !important;
    border-radius: 0px;
}
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h3 style="margin-top: 5px;">
        Newsletter
      </h3>
   </section>
   <!-- Main content -->
   
   <section class="content">
      <!-- Basic Forms -->
      <div class="row justify-content-center">
         <div class="col-md-9 col-sm-12">
            <form action="<?php echo base_url('Admin/Newsletter/add_newsletter')?>" class="custom-validation" method="post"  enctype="multipart/form-data">
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Newsletter Information</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Email(User)<span class="text-danger">*</span></label>
                      <div class="col-sm-9">
                        <select class="form-control" name="user_email" style="width: 100%;" required>
                           <option value="">----select----</option>
                           <option value="aniket@gmail.com">aniket@gmail.com</option>
                           <option value="dark.Shadow@gmail.com">dark.Shadow@gmail.com</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Email(Subscriber)<span class="text-danger">*</span></label>
                      <div class="col-sm-9">
                        <select class="form-control" name="subscriber_email" style="width: 100%;" required>
                           <option value="">----select----</option>
                           <option value="aniket@gmail.com">aniket@gmail.com</option>
                           <option value="dark.Shadow@gmail.com">dark.Shadow@gmail.com</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label">Newsletter Subject<span class="text-danger">*</span></label>
                     <div class="controls col-md-8">
                        <input type="text" lang="en" class="form-control" name="subject" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-from-label"> Newsletter Content </label>
                     <div class="col-md-8">
                        <textarea type="text" class="form-control" name="news_content" placeholder="News Content"></textarea>
                     </div>
                  </div>
                   <div class="col-12" style="margin-left: 350px;">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                 </div>
               </div>
            </div>
            <!-- /.col -->
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