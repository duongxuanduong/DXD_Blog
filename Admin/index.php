<?php
session_start();
if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) {
    $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
    $act = isset($_GET['act']) ? $_GET['act'] : "admin";
    switch ($mod) {
        case 'categories':
            require_once('MVC/controllers/CategoryController.php');
            $controller_obj = new CategoryController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'authors':
            require_once('MVC/controllers/AuthorController.php');
            $controller_obj = new AuthorController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'posts':
            require_once('MVC/controllers/PostController.php');
            $controller_obj = new PostController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'list_select':
                    $controller_obj->list_select();
                    break;
                case 'status':
                    $controller_obj->status();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'login':
            require_once('MVC/controllers/LoginController.php');
            $controller_obj = new LoginController();
            switch ($act) {
                case 'admin':
                    $controller_obj->admin();
                    break;
                case 'logout':
                    $controller_obj->logout();
                    break;
                default:
                    $controller_obj->admin();
                    break;
            }
            break;
    }
} else {
    if (isset($_SESSION['isLogin_Author']) && $_SESSION['isLogin_Author'] == true) {
        $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
        $act = isset($_GET['act']) ? $_GET['act'] : "admin";
        switch ($mod) {
            case 'categories':
                require_once('MVC/controllers/CategoryController.php');
                $controller_obj = new CategoryController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            case 'authors':
                require_once('MVC/controllers/AuthorController.php');
                $controller_obj = new AuthorController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'edit':
                        $controller_obj->edit();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            case 'posts':
                require_once('MVC/controllers/PostController.php');
                $controller_obj = new PostController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    case 'add':
                        $controller_obj->add();
                        break;
                    case 'store':
                        $controller_obj->store();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'edit':
                        $controller_obj->edit();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            case 'login':
                require_once('MVC/controllers/LoginController.php');
                $controller_obj = new LoginController();
                switch ($act) {
                    case 'admin':
                        $controller_obj->admin();
                        break;
                    case 'logout':
                        $controller_obj->logout();
                        break;
                    default:
                        $controller_obj->admin();
                        break;
                }
                break;
        }
    } else {
        $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
        $act = isset($_GET['act']) ? $_GET['act'] : "login";
        require_once('MVC/controllers/LoginController.php');
        $controller_obj = new LoginController();
        switch ($mod) {
            case 'login':
                switch ($act) {
                    case 'login':
                        $controller_obj->login();
                        break;
                    case 'login_action':
                        $controller_obj->login_action();
                        break;
                    default:
                        $controller_obj->login();
                        break;
                }
            default:
                $controller_obj->login();
                break;
        }
    }
}
