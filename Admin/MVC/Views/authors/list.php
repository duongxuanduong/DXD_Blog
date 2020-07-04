    <a href="?mod=authors&act=add" type="button" class="btn btn-primary">Thêm mới</a>
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
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">status</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $row) { ?>
          <tr>
            <th scope="row"><?= $row['id'] ?></th>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['password'] ?></td>
            <td><?= $row['status'] ?></td>
            <td>
              <a href="?mod=authors&act=detail&id=<?= $row['id'] ?>" type="button" class="btn btn-success">Xem</a>
              <a href="?mod=authors&act=edit&id=<?= $row['id'] ?>" type="button" class="btn btn-warning">Sửa</a>
              <a href="?mod=authors&act=delete&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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