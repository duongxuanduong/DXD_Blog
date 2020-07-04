<?php
$mod = isset($_GET['mod']) ? $_GET['mod'] : "home";
switch ($mod) {
    case 'home':
        require_once('MVC/controllers/HomeController.php');
        $controller_obj = new HomeController();
        $controller_obj->list();
        break;
    case 'category':
        require_once('MVC/controllers/CategoryController.php');
        $controller_obj = new CategoryController();
        $controller_obj->list();
        break;
     case 'blog_post':
        require_once('MVC/controllers/Blog_postController.php');
        $controller_obj = new Blog_postController();
        $controller_obj->list();
        break;
    default:
        require_once('MVC/controllers/HomeController.php');
        $controller_obj = new HomeController();
        $controller_obj->list();
    break;
}
