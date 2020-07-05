<?php
require_once("MVC/Models/post.php");
class PostController
{
    var $post_model;
    public function __construct()
    {
        $this->post_model = new post();
    }
    public function list()
    {

        if (isset($_SESSION['isLogin_Admin'])) {
            $data = $this->post_model->All();
        } else {
            $id = $_SESSION['author']['id'];

            $data = $this->post_model->All_post($id);
        }

        require_once("MVC/Views/Admin/index.php");
        // require_once("MVC/Views/posts/list.php");
    }
    public function list_select()
    {
        $data = $this->post_model->select_status();

        require_once("MVC/Views/Admin/index.php");
        // require_once("MVC/Views/posts/list.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->post_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/detail.php");
    }
    public function add()
    {
        $data = $this->post_model->select_cate();
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/add.php");
    }
    public function store()
    {
        $target_dir = "../public/img/";  // thư mục chứa file upload
        $thumbnail = "";

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $thumbnail = basename($_FILES["thumbnail"]["name"]);
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $status = 0;
        if (isset($_POST['status'])) {
            $status = $_POST['status'];
        }
        $created_at =  date('Y-m-d H:i:s');

        $slug = $_POST['title'];
        $slug = trim(mb_strtolower($slug));
        $slug = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $slug);
        $slug = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $slug);
        $slug = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $slug);
        $slug = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $slug);
        $slug = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $slug);
        $slug = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $slug);
        $slug = preg_replace('/(đ)/', 'd', $slug);
        $slug = preg_replace('/[^a-z0-9-\s]/', '', $slug);
        $slug = preg_replace('/([\s]+)/', '-', $slug);

        $data = array(
            'title' =>    $_POST['title'],
            'descripition'  =>   $_POST['descripition'],
            'contents' => $_POST['contents'],
            'thumbnail' => $thumbnail,
            'author_id' => $_SESSION['author']['id'],
            'categories_id' => $_POST['categories_id'],
            'status' => 0,
            'created_at' => $created_at,
            'slug' => $slug
        );
        $this->post_model->store($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->post_model->delete($id);
    }
    public function edit()
    {
        $data_cate = $this->post_model->select_cate();
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->post_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/edit.php");
    }
    public function status()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->post_model->status($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/edit.php");
    }
    public function update()
    {
        $target_dir = "../public/img/";  // thư mục chứa file upload
        $thumbnail = "";

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["thumbnail"]["name"]));

        if ($status_upload) { // nếu upload file không có lỗi 
            $thumbnail = basename($_FILES["thumbnail"]["name"]);
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $slug = $_POST['title'];
        $slug = trim(mb_strtolower($slug));
        $slug = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $slug);
        $slug = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $slug);
        $slug = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $slug);
        $slug = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $slug);
        $slug = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $slug);
        $slug = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $slug);
        $slug = preg_replace('/(đ)/', 'd', $slug);
        $slug = preg_replace('/[^a-z0-9-\s]/', '', $slug);
        $slug = preg_replace('/([\s]+)/', '-', $slug);

        $status = 0;
        if (isset($_POST['status'])) {
            $status = $_POST['status'];
        }
        $created_at =  date('Y-m-d H:i:s');
        $data = array(
            'id' => $_POST['id'],
            'title' =>    $_POST['title'],
            'descripition'  =>   $_POST['descripition'],
            'contents' => $_POST['contents'],
            'thumbnail' => $thumbnail,
            'author_id' => $_SESSION['author']['id'],
            'categories_id' => $_POST['categories_id'],
            'status' => 0,
            'created_at' => $created_at,
            'slug' => $slug
        );
        if ($thumbnail == "") {
            unset($data['thumbnail']);
        }

        $this->post_model->update($data);
    }
}
