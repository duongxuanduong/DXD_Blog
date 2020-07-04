<?php
require_once("model.php");
class author extends Model
{
    var $table = "authors";
    function All_author($id)
    {
        $query = "select * from authors where id = $id";
        $data = array();
        $resurt = $this->conn->query($query);
        while ($row = $resurt->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}