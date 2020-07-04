<?php
require_once("model.php");

class category extends Model
{
    function list_category($id)
    {
        $query =  "SELECT p.*, c.title as t, c.descripition as des from posts as p LEFT JOIN categories as c ON p.categories_id = c.id WHERE p.categories_id = " . $id . " ORDER BY created_at DESC LIMIT 7";

        $result= $this->conn->query($query);

        $data= array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
