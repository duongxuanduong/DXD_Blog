<?php
require_once("connection.php");
class Model
{
    var $conn;
    var $table;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function All()
    {
        if($this->table == "posts"){
            $query = "select * from $this->table  where status = 1";
        }else{
            $query = "select * from $this->table ";
        }
        $data = array();
        $resurt = $this->conn->query($query);
        while ($row = $resurt->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function select_status()
    {
        $query = "select * from $this->table  where status = 0";

        $data = array();
        $resurt = $this->conn->query($query);
        while ($row = $resurt->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function find($id)
    {
        $query = "select * from $this->table where id =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
    function delete($id)
    {
        $query = "DELETE from $this->table where id=$id";


        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
        header('Location: ?mod='.$this->table);
    }
    function store($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key. ",";
            $v .= "'".$value."',";
        }
        $f=trim($f,",");
        $v=trim($v,",");
        $query = "INSERT INTO $this->table($f) VALUES ($v);";
  
        $status = $this->conn->query($query);

        if ($status == true) {
            setcookie('msg', 'Thêm mới thành công', time() + 2);
            header('Location: ?mod='.$this->table);
        } else {
            setcookie('msg', 'Thêm vào không thành công', time() + 2);
            header('Location: ?mod='.$this->table.'&act=add');
        }
    }
    function update($data){
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key."='".$value."',";
        }
        $v = trim($v,",");
        
        $query = "UPDATE $this->table SET  $v   WHERE id = ".$data['id'];

        $result = $this->conn->query($query);
        
        if ($result== true) {
            setcookie('msg','Update mới thành công',time()+2);
            header('Location: ?mod='.$this->table);
        }else {
            setcookie('msg','Update vào không thành công',time()+2);
            header('Location: ?mod='.$this->table.'&act=edit&id='.$data['id']);
        }
        }
}
