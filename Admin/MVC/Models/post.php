<?php
require("model.php");
class post extends model
{
    var $table = "posts";
    function select_cate()
    {
        $query = "select * from categories";
        $data = array();
        $resurt = $this->conn->query($query);
        while ($row = $resurt->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function All_post($id)
    {
        $query = "select * from posts where author_id = $id";
        $data = array();
        $resurt = $this->conn->query($query);
        while ($row = $resurt->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function status($id){
        
        $query = "UPDATE posts SET  status = 1  WHERE id = $id";


        $result = $this->conn->query($query);
        
        if ($result== true) {
            setcookie('msg','Duyện thành công',time()+2);
            header('Location: ?mod=posts&act=list_select');
        }else {
            setcookie('msg','Update vào không thành công',time()+2);
            header('Location: ?mod=posts&act=list_select');
        }
        }
}
