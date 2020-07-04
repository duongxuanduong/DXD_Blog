<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <ul class="page-header-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><?php
                        echo $data['0']['t']
                        ?></li>
                </ul>
                <h1>
                    <?php
                    echo $data['0']['t']
                    ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <!-- post -->
                    <div class="col-md-12">
                        <div class="post post-thumb">
                            <a class="post-img" href="?mod=blog_post&id=<?= $data['0']['id'] ?>"><img src="public/img/<?= $data["0"]["thumbnail"]; ?>" alt="" height="380px"></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <?php
                                    $kt = NULL;
                                    $i = 1;
                                    foreach ($data_cate as $cate) {
                                        if (strcasecmp($data['0']['des'], $cate['descripition']) == 0) {
                                            $kt = 'post-category cat-' . $i;
                                        }
                                        if (strcasecmp($data['0']['des'], $cate['descripition']) == 0) {
                                            $kt = 'post-category cat-' . $i;
                                        }
                                        if (strcasecmp($data['0']['des'], $cate['descripition']) == 0) {
                                            $kt = 'post-category cat-' . $i;
                                        }
                                        if (strcasecmp($data['0']['des'], $cate['descripition']) == 0) {
                                            $kt = 'post-category cat-' . $i;
                                        }
                                        $i++;
                                        if ($i == 5)
                                            $i = 1;
                                    }
                                    ?>
                                    <a class="<?php echo $kt; ?>" href="?mod=category&id=<?= $id ?>"><?= $data['0']['t']; ?></a>
                                    <span class="post-date"><?php echo $data['0']['created_at']; ?></span>
                                </div>
                                <h3 class="post-title"><a href="?mod=blog_post&id=<?= $data['0']['id'] ?>"><?= $data['0']['title']; ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <?php for ($i = 1; $i < 3; $i++) { ?>
                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="?mod=blog_post&id=<?= $data[$i]['id'] ?>"><img src="public/img/<?= $data[$i]["thumbnail"]; ?>" alt="" height="243px"></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <?php
                                        $kt = NULL;
                                        $a = 1;
                                        foreach ($data_cate as $cate) {
                                            if (strcasecmp($data[$i]['des'], $cate['descripition']) == 0) {
                                                $kt = 'post-category cat-' . $a;
                                            }
                                            if (strcasecmp($data[$i]['des'], $cate['descripition']) == 0) {
                                                $kt = 'post-category cat-' . $a;
                                            }
                                            if (strcasecmp($data[$i]['des'], $cate['descripition']) == 0) {
                                                $kt = 'post-category cat-' . $a;
                                            }
                                            if (strcasecmp($data[$i]['des'], $cate['descripition']) == 0) {
                                                $kt = 'post-category cat-' . $a;
                                            }
                                            $a++;
                                            if ($a == 5)
                                                $a = 1;
                                        }
                                        ?>
                                        <a class="<?php echo $kt; ?>" href="category.php?id=<?= $id ?>&cate=<?= $data[$i]['t'] ?>"><?php echo $data[$i]['t']; ?></a>
                                        <span class="post-date"><?php echo $data[$i]['created_at']; ?></span>
                                    </div>
                                    <h3 class="post-title"><a href="?mod=blog_post&id=<?= $data[$i]['id'] ?>"><?= $data[$i]['title']; ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!--  /post -->

                    <div class="clearfix visible-md visible-lg"></div>

                    <!-- ad -->
                    <div class="col-md-12">
                        <div class="section-row">
                            <a href="#">
                                <img class="img-responsive center-block" src="public/img/ad-2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- ad -->

                    <!-- post -->
                    <?php for ($i = 3; $i < 8; $i++) {
                        if (!isset($data[$i]['id']))
                            break;
                    ?>
                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="?mod=blog_post&id=<?= $data[$i]['id'] ?>"><img src="public/img/<?= $data[$i]["thumbnail"]; ?>" alt="" height="243px"></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <?php
                                        $kt = NULL;
                                        $a = 1;
                                        foreach ($data_cate as $cate) {
                                            if (strcasecmp($data[$i]['des'], $cate['descripition']) == 0) {
                                                $kt = 'post-category cat-' . $a;
                                            }
                                            if (strcasecmp($data[$i]['des'], $cate['descripition']) == 0) {
                                                $kt = 'post-category cat-' . $a;
                                            }
                                            if (strcasecmp($data[$i]['des'], $cate['descripition']) == 0) {
                                                $kt = 'post-category cat-' . $a;
                                            }
                                            if (strcasecmp($data[$i]['des'], $cate['descripition']) == 0) {
                                                $kt = 'post-category cat-' . $a;
                                            }
                                            $a++;
                                            if ($a == 5)
                                                $a = 1;
                                        }
                                        ?>
                                        <a class="<?= $kt; ?>" href="category.php?id=<?= $id ?>&cate=<?= $data['0']['t'] ?>"><?= $data[$i]['t']; ?></a>
                                        <span class="post-date"><?= $data[$i]['created_at']; ?></span>
                                    </div>
                                    <h3 class="post-title"><a href="?mod=blog_post&id=<?= $data[$i]['id'] ?>"><?= $data[$i]['title']; ?></a></h3>
                                    <p><?= $data[$i]['descripition'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="col-md-12">
                        <div class="section-row">
                            <button class="primary-button center-block">Load More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Đọc nhiều nhất</h2>
                    </div>
                    <?php foreach ($data_view as $post) { ?>
                        <div class="post post-widget">
                            <a class="post-img" href="?mod=blog_post&id=<?= $post['id'] ?>"><img src=public/img/<?= $post['thumbnail']; ?> alt="" width="90px" height="90px"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="?mod=blog_post&id=<?= $post['id'] ?>"><?php echo $post['title'] ?></a></h3>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="section-title">
                        <h2>Đọc ngẫu nhiên</h2>
                    </div>
                    <?php foreach ($data_random as $post) { ?>
                        <div class="post post-thumb">
                            <a class="post-img" href="?mod=blog_post&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail']; ?>" alt="" height="200px"></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <?php
                                    $kt = NULL;
                                    $i = 1;
                                    foreach ($data_cate as $cate) {
                                        if (strcasecmp($post['des'], $cate['descripition']) == 0) {
                                            $kt = 'post-category cat-' . $i;
                                        }
                                        if (strcasecmp($post['des'], $cate['descripition']) == 0) {
                                            $kt = 'post-category cat-' . $i;
                                        }
                                        if (strcasecmp($post['des'], $cate['descripition']) == 0) {
                                            $kt = 'post-category cat-' . $i;
                                        }
                                        if (strcasecmp($post['des'], $cate['descripition']) == 0) {
                                            $kt = 'post-category cat-' . $i;
                                        }
                                        $i++;
                                        if ($i == 4)
                                            $i = 1;
                                    }
                                    ?>
                                    <a class="<?= $kt; ?>" href="?mod=category&id=<?= $post['idcate'] ?>"><?= $post['t']; ?></a>
                                    <span class="post-date"><?= $post['created_at']; ?></span>
                                </div>
                                <h3 class="post-title"><a href="?mod=blog_post&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h3>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- /post widget -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Thể loại</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <?php
                            $c = 1;
                            foreach ($data_cate as $key => $cate) { ?>
                                <li><a href="?mod=category&id=<?=$cate['id']?>" class="cat-<?= $c ?>"><?= $cate['title'] ?><span>
                                            <?php echo $count[$key]['count'] ?>
                                        </span></a></li>
                            <?php
                                $c = $c + 1;
                                if ($c == 4) {
                                    $c = 1;
                                }
                            } ?>
                        </ul>
                    </div>
                </div>
                <!-- ad -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="./img/ad-1.jpg" alt="">
                    </a>
                </div>

                <!-- /ad -->
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->