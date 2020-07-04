<a href="?mod=posts&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Descripition</th>
      <th scope="col">Thumbnail</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Descripition</th>
      <th scope="col">Thumbnail</th>
      <th scope="col"></th>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach ($data as $row) {  ?>
      <tr>
        <th scope="row"><?= $row['id'] ?></th>
        <td><?= $row['title'] ?></td>
        <td><?= $row['descripition'] ?></td>
        <td><img src="../public/img/<?= $row['thumbnail'] ?>" height="100px"></td>
        <td>
          <a href="?mod=posts&act=detail&id=<?= $row['id'] ?>" type="button" class="btn btn-success">Xem</a>
          <a href="?mod=posts&act=edit&id=<?= $row['id'] ?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="?mod=posts&act=delete&id=<?= $row['id']; ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>