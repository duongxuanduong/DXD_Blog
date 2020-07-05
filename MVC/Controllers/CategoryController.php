<?php
require_once("MVC/Models/category.php");
class CategoryController
{
    var $model;
    public function __construct()
    {
        $this->model = new category();
    }
    function list()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 5;
        $data = $this->model->list_category($id);
        if ($data != null) {
            $data_random = $this->model->random();
            $data_view = $this->model->view_count();
            $data_cate = $this->model->cate();
            $count = array();
            // $count_post = $this->model->count_post();
            foreach ($data_cate as $key => $value) {
                $count[$key] = $this->model->count_post($value['id']);
            }
        }else{
            header('location: ?mod=category');
        }

        require_once("MVC/Views/index.php");
    }
}
