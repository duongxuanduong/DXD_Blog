 <!-- section -->
 <div class="section">
     <!-- container -->
     <div class="container">
         <!-- row -->
         <?php foreach ($data_1 as $post) { ?>
             <div class="row">
                 <div class="col-md-6">
                     <div class="post post-thumb">
                         <a class="post-img" href="?mod=blog_post&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail']; ?>" alt="" height="345px"></a>
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
                                 <a class="<?php echo $kt; ?>" href="?mod=category&id=<?= $post['idcate'] ?>"><?= $post['t']; ?></a>
                                 <span class="post-date"><?php echo $post['created_at']; ?></span>
                             </div>
                             <h3 class="post-title"><a href="?mod=blog_post&id=<?= $post['id'] ?>"><?php echo $post['title']; ?></a></h3>
                         </div>
                     </div>
                 </div>
             <?php } ?>
             </div>
             <!-- /row -->
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-title">
                         <h2>Bài viết mới nhất </h2>
                     </div>
                 </div>
                 <?php
                    foreach ($data_2 as $post) {
                    ?>
                     <!-- post  6 bài đầu -->
                     <div class="col-md-4">
                         <div class="post">
                             <a class="post-img" href="?mod=blog_post&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail']; ?>" alt="" height="207"></a>
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
                     </div>
                     <!-- /post -->
                 <?php } ?>
                 <!-- post -->

                 <!-- row -->
                 <div class="row">
                     <div class="col-md-8">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="post">
                                     <a class="post-img" href="?mod=blog_post&id=<?= $data_3["0"]['id'] ?>"><img src="public/img/<?= $data_3["0"]["thumbnail"]; ?>" alt="" height="600px"></a>
                                     <div class="post-body">
                                         <div class="post-meta">
                                             <?php
                                                $kt = NULL;
                                                $i = 1;
                                                foreach ($data_cate as $cate) {
                                                    if (strcasecmp($data_3["0"]['des'], $cate['descripition']) == 0) {
                                                        $kt = 'post-category cat-' . $i;
                                                    }
                                                    if (strcasecmp($data_3["0"]['des'], $cate['descripition']) == 0) {
                                                        $kt = 'post-category cat-' . $i;
                                                    }
                                                    if (strcasecmp($data_3["0"]['des'], $cate['descripition']) == 0) {
                                                        $kt = 'post-category cat-' . $i;
                                                    }
                                                    if (strcasecmp($data_3["0"]['des'], $cate['descripition']) == 0) {
                                                        $kt = 'post-category cat-' . $i;
                                                    }
                                                    $i++;
                                                    if ($i == 4)
                                                        $i = 1;
                                                }
                                                ?>
                                             <a class="<?php echo $kt; ?>" href="?mod=category&id=<?= $data_3["0"]['idcate'] ?>"><?= $data_3["0"]['t']; ?></a>
                                             <span class="post-date"><?= $data_3['0']['created_at']; ?></span>
                                         </div>
                                         <h3 class="post-title"><a href="?mod=blog_post&id=<?= $data_3["0"]['id'] ?>"><?= $data_3["0"]['title']; ?></a></h3>
                                     </div>
                                 </div>
                             </div>

                             <?php foreach ($data_4 as $post) { ?>
                                 <div class="col-md-6">
                                     <div class="post">
                                         <a class="post-img" href="?mod=blog_post&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail']; ?>" alt="" height="207"></a>
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
                                 </div>
                             <?php } ?>
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
                                 <img class="img-responsive" src="public/img/ad-1.jpg" alt="">
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

     <!-- section -->
     <div class="section section-grey">
         <!-- container -->
         <div class="container">
             <!-- row -->
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-title text-center">
                         <h2>Bài viết nổi bật</h2>
                     </div>
                 </div>
                 <?php
                    foreach ($data_5 as $post) {
                    ?>
                     <div class="col-md-4">
                         <div class="post">
                             <a class="post-img" href="?mod=blog_post&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail']; ?>" alt="" height="207"></a>
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
                     </div>
                     <!-- /post -->
                 <?php } ?>
             </div>
             <!-- /row -->
         </div>
         <!-- /container -->
     </div>
     <!-- /section -->