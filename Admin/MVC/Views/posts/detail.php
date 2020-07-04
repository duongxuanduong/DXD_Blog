<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Id: <?= $data['id']?></h2>
    <h2>Title: <?= $data['title'] ?></h2>
    <h2>Description: </h2>
    <p><?= $data['descripition'] ?></p>
    <h2>Contents: </h2>
    <p><?= $data['contents']?></p>
    <h2>Author_id: <?= $data['author_id'] ?></h2>
    <h2>Categories_id: <?= $data['categories_id'] ?></h2>
    <h2>Created_at: <?= $data['created_at'] ?></h2>
    <h2>Thumbnail: </h2>
    <a><img src="../public/img/<?=$data['thumbnail']?>" height="400px"></a>
</table>