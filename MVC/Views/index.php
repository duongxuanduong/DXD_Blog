<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>DXD BLOG</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="public/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container">
                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="?mod=home" class="logo"><img src="public/img/logo-lb.png" alt="abc"></a>
                    </div>
                    <!-- /logo -->

                    <!-- nav -->
                    <ul class="nav-menu nav navbar-nav">
                        <?php
                        $i = 1;
                        foreach ($data_cate as $cate) { ?>
                            <li class="cat-<?= $i ?>"><a href="?mod=category&id=<?= $cate['id'] ?>"><?= $cate['title'] ?></a></li>
                        <?php
                            $i++;
                            if ($i == 5) {
                                $i = 1;
                            }
                        } ?>
                    </ul>
                    <!-- /nav -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div class="search-form">
                            <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
                            <button class="search-close"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <!-- nav -->
                <div class="section-row">
                    <ul class="nav-aside-menu">
                        <li><a href="?mod=home">Trang chử</a></li>
                        <li><a href="?mod=home">Thông tin</a></li>
                        <li><a href="https://www.facebook.com/duonglsl2ls">Liên hệ</a></li>
                    </ul>
                </div>
                <!-- /nav -->

                <!-- widget posts -->
                <div class="section-row">
                    <h3>Nổi bật</h3>
                    <?php foreach ($data_view as $post) { ?>
                        <div class="post post-widget">
                            <a class="post-img" href="?mod=blog_post&id=<?= $post['id'] ?>"><img src=./public/img/<?= $post['thumbnail']; ?> alt="" width="90px" height="90px"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="?mod=blog_post&id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- /widget posts -->

                <!-- social links -->
                <div class="section-row">
                    <h3>Follow us</h3>
                    <ul class="nav-aside-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <!-- /social links -->

                <!-- aside nav close -->
                <button class="nav-aside-close"><i class="fa fa-times"></i></button>
                <!-- /aside nav close -->
            </div>
            <!-- Aside Nav -->
        </div>
        <!-- /Nav -->
    </header>
    <!-- /Header -->

    <?php
    $mod = isset($_GET['mod']) ? $_GET['mod'] : "home";
    switch ($mod) {
        case 'home':
            require_once("MVC/Views/home.php");
            break;
        case 'category':
            require_once("MVC/Views/category.php");
            break;
             case 'blog_post':
            require_once("MVC/Views/blog_post.php");
            break;
        default:
            require_once("MVC/Views/home.php");
            break;
    }
    ?>

    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="?mod=home" class="logo"><img src="public/img/logo-lb.png" alt=""></a>
                        </div>
                        <ul class="footer-nav">
                            <li><a href="#">Dương Xuân Dưỡng</a></li>
                            <li><a href="#">Zent - PHP online 01</a></li>
                        </ul>
                        <div class="footer-copyright">
                            <span>&copy;
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">DXD LB</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Thông tin</h3>
                                <ul class="footer-links">
                                    <li><a href="about.html">Dương Xuân Dưỡng</a></li>
                                    <li><a href="#">Duongls2ls@gmail.com</a></li>
                                    <li><a href="contact.html">0976942493</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                <ul class="footer-links">
                                    <?php foreach ($data_cate as $cate_footer) { ?>
                                        <li><a href="category.php?id=<?= $cate_footer['id'] ?>"><?= $cate_footer['title'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Liên hệ</h3>
                        <div class="footer-newsletter">
                            <form>
                                <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                                <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>

    <!-- jQuery Plugins -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/main.js"></script>

</body>

</html>