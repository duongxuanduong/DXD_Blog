<?php
require_once("MVC/models/author.php");
class AuthorController
{
    var $author_model;
    public function __construct()
    {
        $this->author_model = new author();
    }
    public function list()
    {
        if(isset($_SESSION['isLogin_Admin'])){
            $data = $this->author_model->All();
      }else{
            $id = $_SESSION['author']['id'];
            $data = $this->author_model->All_author($id);
      }

      require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/list.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->author_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/detail.php");
    }
    public function add()
    {
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/add.php");
    }
    public function store()
    {
        $target_dir = "../public/img/authors/";  // thư mục chứa file upload
        $thumbnail = "";

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $thumbnail = basename($_FILES["thumbnail"]["name"]);
        }
        $data = array(
            'name' =>    $_POST['name'],
            'email'  =>   $_POST['email'],
            'password' => md5($_POST['password']),
            'status' => $_POST['status'],
            'info' => $_POST['info'],
            'thumbnail' => $thumbnail
        );
        $this->author_model->store($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->author_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->author_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/edit.php");
    }
    public function update()
    {
        $target_dir = "../public/img/authors/";  // thư mục chứa file upload
        $thumbnail ="";

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["thumbnail"]["name"]));

        if ($status_upload) { // nếu upload file không có lỗi 
            $thumbnail = basename($_FILES["thumbnail"]["name"]);
        }
        $data = array(
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'status' => $_POST['status'],
            'info' => $_POST['info'],
            'thumbnail' => $thumbnail
        );
        if($thumbnail == ""){
            unset($data['thumbnail']);
        }
        $this->author_model->update($data);
    }
}
