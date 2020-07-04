<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=authors&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $data['name'] ?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email" value="<?= $data['email'] ?>">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="Password" class="form-control" id="" placeholder="" name="password" value="<?= $data['password'] ?>">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" class="form-control" id="" placeholder="" name="status" value="<?= $data['status'] ?>">
        </div>
        <label for="">Info</label>
        <div class="form-group">""
            <textarea class="form-control" id="summernote" placeholder="" name="info" ><?= $data['info'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <img src="../public/img/authors/<?= $data['thumbnail'] ?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $data['thumbnail'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    </form>
    </tbody>
</table>