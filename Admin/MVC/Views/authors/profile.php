<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>ID: <?=($_SESSION['author']['id'])?></h2>
    <h2>Name: <?=($_SESSION['author']['name'])?></h2>
    <h2>Email: <?=($_SESSION['author']['email'])?></h2>
    <h2>Password: <?=($_SESSION['author']['password'])?></h2>
    <h2>Status: <?=($_SESSION['author']['status'])?></h2>
    <h2>Thumbnail: 
    <img src="../public/img/authors/<?=($_SESSION['author']['thumbnail'])?>" height="200px" width="200px">
    </h2>
    <h2>Info: <?=($_SESSION['author']['info'])?></h2>
</table>