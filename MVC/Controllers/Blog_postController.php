<?php
require_once("MVC/Models/blog_post.php");
class Blog_postController
{
    var $model;
    var $id;
    var $slug;
    public function __construct()
    {
        $this->slug = isset($_GET['id']) ? $_GET['id'] : 'lck-mua-xuan-2020-faker-va-nhung-nguoi-ban-nhe-nhang';
        $this->model = new blog_post(); 
        $this->id = $this->model->slug($this->slug);
        if($this->id==null){
            header('location: ?mod=home');
        }
    }
    function list()
    {
        $data_cate = $this->model->cate();
        $count = array();
        // $count_post = $this->model->count_post();
        $data_detail = $this->model->detail_post($this->id['id']);
        if ($data_detail != null) {
            $this->model->count_view($this->id['id']);
            $data_view = $this->model->view_count();
            $data_random = $this->model->random();
            $data = $this->model->post_conn($data_detail['idcate']);
            if (isset($_POST['submit'])) {
                $contents = $_POST['contents'];
                $subject = $_POST['subject'];
                $this->model->send_email($contents,  $subject, $this->id['id'],$this->slug);
            }
            foreach ($data_cate as $key => $value) {
                $count[$key] = $this->model->count_post($value['id']);
            }
            require_once("MVC/Views/index.php");
        }else{
            header('location: ?mod=home');
        }
        // $this->model->count_view($id);
        // $data_view = $this->model->view_count();
        // $data_random = $this->model->random();
        // $data = $this->model->post_conn($data_detail['idcate']);
        // if (isset($_POST['submit'])) {
        //     $contents = $_POST['contents'];
        //     $subject = $_POST['subject'];
        //     $this->model->send_email($contents,  $subject, $id);
        //     die;
        // }
        require_once("MVC/Views/index.php");
    }
}
