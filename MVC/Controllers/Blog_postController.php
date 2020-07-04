<?php 
    require_once("MVC/Models/blog_post.php");
    class Blog_postController{
        var $model;
        public function __construct()
        {
            $this->model = new blog_post() ;
        }
        function list(){
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data_cate = $this->model->cate();
            $count = array();
             // $count_post = $this->model->count_post();
             foreach ($data_cate as $key => $value) {
                $count[$key]= $this->model->count_post($value['id']);
             }
            $data_detail = $this->model->detail_post($id);
            $this->model->count_view($id);
            $data_view = $this->model->view_count();
            $data_random = $this->model->random();
            $data = $this->model->post_conn($data_detail['idcate']);
            require_once("MVC/Views/index.php");
        }
    }
?>