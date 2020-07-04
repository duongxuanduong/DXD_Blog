<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=posts&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?> ">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $data['title'] ?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="descripition" value="<?= $data['descripition'] ?>">
        </div>
        <div class="form-group">
            <label for="">Contents</label>
            <textarea rows="8" class="form-control" id="summernote" placeholder="" name="contents"><?= $data['contents'] ?></textarea>
        </div>
        <div class="form-group">
        <label for="cars">Categories: </label>
        <select id="" name="categories_id" class="form-control">
          <?php foreach ($data_cate as $row) { ?>
            <option <?= ($row['id'] == $data['categories_id'])?'selected':''?> value="<?=$row['id']?>"> <?=$row['title']?> </option>
          <?php } ?>
        </select>
      </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <img src="../public/img/<?= $data['thumbnail'] ?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?=$data['thumbnail']?>">
        </div>
        <div class="form-group">
            <label for="">Hiện thị bài biết</label>
            <input <?= ($data['status'] == 1) ? 'checked' : '' ?> type="checkbox" id="" placeholder="" value="1" name="status"><em>(Check cho phép hiện thị bài viết)</em>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>