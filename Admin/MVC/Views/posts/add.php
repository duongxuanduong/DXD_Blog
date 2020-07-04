<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=posts&act=store" method="POST" role="form" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" id="" placeholder="" name="title">
      </div>
      <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" id="" placeholder="" name="descripition">
      </div>
      <label for="">Contents</label>
      <div class="form-group">
        <textarea class="form-control" id="summernote" placeholder="" name="contents"></textarea>
      </div>
      <div class="form-group">
        <label for="cars">Categories: </label>
        <select id="" name="categories_id" class="form-control">
          <?php foreach ($data as $row) { ?>
            <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="">Thumbnail</label>
        <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <script>
      $(document).ready(function() {
        $('#summernote').summernote();
      });
    </script>
</table>