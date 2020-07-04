<?php
    require_once("MVC/Models/home.php");
    class HomeController{
        var $model;
        public function __construct()
        {
            $this->model = new home() ;
        }
        function list(){
            $data_1 = $this->model->limit(0,2);
            $data_2 = $this->model->limit(2,6);
            $data_3 = $this->model->limit(8,1);
            $data_4 = $this->model->limit(8,6);
            $data_5=  $this->model->limit(14,3);
            $data_random = $this->model->random();
            $data_view = $this->model->view_count();
            $data_cate = $this->model->cate();
            $count = array();
             // $count_post = $this->model->count_post();
             foreach ($data_cate as $key => $value) {
                $count[$key]= $this->model->count_post($value['id']);
             }
            require_once("MVC/Views/index.php");
        }
    }

?>