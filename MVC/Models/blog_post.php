<?php
require_once("model.php");

class blog_post extends Model
{
    function count_view($id)
    {
        $query_post = "SELECT * FROM posts WHERE id = '$id'";
        $resuft = mysqli_query($this->conn, $query_post);
        if ($resuft->num_rows != 0) {
            $updateview = "UPDATE posts SET count_view = count_view + 1  WHERE id ='$id'";
            mysqli_query($this->conn, $updateview);
        }
    }
    function detail_post($id){
        $query=  "SELECT p.*, c.id as idcate, c.title as t  , c.descripition as des, a.name as n , a.thumbnail as th , a.info FROM posts as p LEFT JOIN categories as c ON p.categories_id = c.id LEFT JOIN authors AS a  ON p.author_id = a.id WHERE p.status= 1 AND p.id = " . $id;

        $result = $this->conn->query($query);

        return $result->fetch_assoc();
    }
    function post_conn($id){
        $query=  "SELECT p.*, c.id as idcate, c.title as t  , c.descripition as des FROM posts as p LEFT JOIN categories as c ON p.categories_id = c.id  WHERE p.status= 1 AND c.id = " . $id. " ORDER BY created_at DESC LIMIT 4 ";

        $result = $this->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
