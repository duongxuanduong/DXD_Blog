<?php
require_once("connection.php");
class login
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function login_action()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * from authors  as a WHERE a.email = '" . $email . "' AND a.password = '" . md5($password) . "' AND a.status = 1 ";
        $author = $this->conn->query($query)->fetch_assoc();
        if ($author !== NULL) {
            if ($author['level'] ==1) {
                $_SESSION['isLogin_Admin'] = true;
                $_SESSION['author'] = $author;
                header('Location: ?mod=login');
            }else{
                $_SESSION['isLogin_Author'] = true;
                $_SESSION['author'] = $author;

                header('Location: ?mod=login');
            }
        } else {
            setcookie('msg', 'Đăng nhập không thành công', time() + 5);
            header('Location: ?mod=login');
        }
    }
    function logout()
    {
        session_destroy();
        header('location: ?mod=login');
    }
    function countview(){
        $query = "select sum(count_view) as s from posts";
        return $this->conn->query($query)->fetch_assoc();
    }
    function countpost(){
        $query = "select count(id) as c from posts";
        return $this->conn->query($query)->fetch_assoc();
    }
    function countcategory(){
        $query = "select count(id) as c from categories";
        return $this->conn->query($query)->fetch_assoc();
    }
    function countauthor(){
        $query = "select count(id)  as c from authors";
        return $this->conn->query($query)->fetch_assoc();
    }
}
