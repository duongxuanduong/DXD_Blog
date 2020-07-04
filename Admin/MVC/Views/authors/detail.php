<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>ID: <?=$data['id']?></h2>
    <h2>Name: <?=$data['name'] ?></h2>
    <h2>Email: <?=$data['email']?></h2>
    <h2>Password: <?=$data['password'] ?></h2>
    <h2>Status: <?=$data['status'] ?></h2>
    <h2>Thumbnail: 
    <img src="../public/img/authors/<?= $data['thumbnail'] ?>" height="200px" width="200px">
    </h2>
    <h2>Info: <?=$data['info'] ?></h2>
</table>