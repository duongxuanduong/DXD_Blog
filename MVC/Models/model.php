<?php
require_once("connection.php");
class model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function limit($a, $b)
    {
        $query =  "SELECT p.*,c.id as idcate, c.title as t  , c.descripition as des FROM posts as p LEFT JOIN categories as c ON p.categories_id = c.id WHERE status= 1 ORDER BY created_at DESC limit $a,$b";

        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function view_count()
    {
        $query =  "SELECT p.*, c.id as idcate, c.title as t  , c.descripition as des FROM posts as p LEFT JOIN categories as c ON p.categories_id = c.id WHERE status= 1 ORDER BY count_view DESC , created_at   DESC limit 4  ";

        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function random()
    {
        $query = "SELECT p.*,c.id as idcate, c.title as t  , c.descripition as des FROM posts as p LEFT JOIN categories as c ON p.categories_id = c.id WHERE status= 1 ORDER BY RAND () LIMIT 2";
        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function cate()
    {
        $query =  "SELECT * from categories";

        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function count_post($id)
    {
        $result_countcate = $this->conn->query("SELECT COUNT(categories_id) as count FROM posts WHERE categories_id =" . $id . " ");

        $data = $result_countcate->fetch_assoc();
        return  $data;
    }
}
