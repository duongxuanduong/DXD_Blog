<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DXD Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="public/css/./sb-admin-2.min.css" rel="stylesheet" type="text/css">
  <script src="public/vendor/jquery/jquery.min.js"></script>

  <!-- summernote-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <!-- Data table -->
  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require_once('menu.php') ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php require_once('header.php') ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                <?php
                $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
                echo "Database " . $mod;
                ?>
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php
                if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) {
                  $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
                  $act = isset($_GET['act']) ? $_GET['act'] : "admin";
                  switch ($mod) {
                    case 'categories':
                      switch ($act) {
                        case 'list':
                          require_once('MVC/views/categories/list.php');
                          break;
                        case 'add':
                          require_once('MVC/views/categories/add.php');
                          break;
                        case 'detail':
                          require_once('MVC/views/categories/detail.php');
                          break;
                        case 'delete':
                          $controller_obj->delete();
                          break;
                        case 'edit':
                          require_once('MVC/views/categories/edit.php');
                          break;
                        default:
                          require_once('MVC/views/categories/list.php');
                          break;
                      }
                      break;
                    case 'authors':
                      switch ($act) {
                        case 'list':
                          require_once('MVC/views/authors/list.php');
                          break;
                        case 'add':
                          require_once('MVC/views/authors/add.php');
                          break;
                        case 'detail':
                          require_once('MVC/views/authors/detail.php');
                          break;
                        case 'delete':
                          $controller_obj->delete();
                          break;
                        case 'edit':
                          require_once('MVC/views/authors/edit.php');
                          break;
                        default:
                          require_once('MVC/views/authors/list.php');
                          break;
                      }
                      break;
                    case 'posts':
                      switch ($act) {
                        case 'list':
                          require_once('MVC/views/posts/list.php');
                          break;
                        case 'list_select':
                          require_once('MVC/views/posts/list_select.php');
                          break;
                        case 'add':
                          require_once('MVC/views/posts/add.php');
                          break;
                        case 'detail':
                          require_once('MVC/views/posts/detail.php');
                          break;
                        case 'delete':
                          $controller_obj->delete();
                          break;
                        case 'edit':
                          require_once('MVC/views/posts/edit.php');
                          break;
                        default:
                          require_once('MVC/views/posts/list.php');
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
                      case 'authors':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/authors/list.php');
                            break;
                          case 'edit':
                            require_once('MVC/views/authors/edit.php');
                            break;
                          case 'edit':
                            require_once('MVC/views/authors/edit.php');
                            break;
                          default:
                            require_once('MVC/views/authors/list.php');
                            break;
                        }
                        break;
                      case 'categories':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/categories/list.php');
                            break;
                          case 'detail':
                            require_once('MVC/views/categories/detail.php');
                            break;
                          default:
                            require_once('MVC/views/categories/list.php');
                            break;
                        }
                        break;
                      case 'posts':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/posts/list.php');
                            break;
                          case 'add':
                            require_once('MVC/views/posts/add.php');
                            break;
                          case 'detail':
                            require_once('MVC/views/posts/detail.php');
                            break;
                          case 'delete':
                            $controller_obj->delete();
                            break;
                          case 'edit':
                            require_once('MVC/views/posts/edit.php');
                            break;
                          default:
                            require_once('MVC/views/posts/list.php');
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
                    require_once('controllers/LoginController.php');
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
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

      <!-- End of Main Content -->
      <?php require_once('footer.php') ?>

      <!-- Bootstrap core JavaScript-->
      <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="public/js/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="public/vendor/chart.js/Chart.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="public/js/demo/chart-area-demo.js"></script>
      <script src="public/js/demo/chart-pie-demo.js"></script>

</body>

</html>