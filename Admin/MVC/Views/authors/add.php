   <?php if (isset($_COOKIE['msg'])) { ?>
       <div class="alert alert-success">
           <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
       </div>
   <?php } ?>
   <hr>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <?php if (isset($_COOKIE['msg'])) { ?>
           <div class="alert alert-warning">
               <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
           </div>
       <?php } ?>
       <form action="?mod=authors&act=store" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="">Name</label>
               <input type="text" class="form-control" id="" placeholder="" name="name">
           </div>
           <div class="form-group">
               <label for="">Email</label>
               <input type="text" class="form-control" id="" placeholder="" name="email">
           </div>
           <div class="form-group">
               <label for="">Password</label>
               <input type="Password" class="form-control" id="" placeholder="" name="password">
           </div>
           <div class="form-group">
               <label for="">Status</label>
               <input type="text" class="form-control" id="" placeholder="" name="status">
           </div>
           <label for="">Info</label>
           <div class="form-group">
               <textarea class="form-control" id="summernote" placeholder="" name="info"></textarea>
           </div>
           <div class="form-group">
               <label for="">Thumbnail</label>
               <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $data['thumbnail'] ?>">
           </div>
           <button type="submit" class="btn btn-primary">Create</button>
       </form>
       <script>
           $(document).ready(function() {
               $('#summernote').summernote();
           });
       </script>
   </table>