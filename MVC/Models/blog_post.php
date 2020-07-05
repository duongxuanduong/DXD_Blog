<?php
require_once("model.php");

class blog_post extends Model
{
    function count_view($id)
    {
        $query_post = "SELECT * FROM posts WHERE id = $id";
        $resuft = mysqli_query($this->conn, $query_post);
        if ($resuft->num_rows != 0) {
            $updateview = "UPDATE posts SET count_view = count_view + 1  WHERE id =$id";
            mysqli_query($this->conn, $updateview);
        }
    }
    function detail_post($id)
    {
        $query =  "SELECT p.*, c.id as idcate, c.title as t  , c.descripition as des, a.name as n , a.thumbnail as th , a.info FROM posts as p LEFT JOIN categories as c ON p.categories_id = c.id LEFT JOIN authors AS a  ON p.author_id = a.id WHERE p.status= 1 AND p.id = " . $id;

        $result = $this->conn->query($query);

        return $result->fetch_assoc();
    }
    function post_conn($id)
    {
        $query =  "SELECT p.*, c.id as idcate, c.title as t  , c.descripition as des FROM posts as p LEFT JOIN categories as c ON p.categories_id = c.id  WHERE p.status= 1 AND c.id = " . $id . " ORDER BY created_at DESC LIMIT 4 ";

        $result = $this->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function send_email( $contents, $subject,$id,$slug)
    {
        //https://www.google.com/settings/security/lesssecureapps
        // Khai báo thư viên phpmailer
        require "public/phpmailer/PHPMailerAutoload.php";
        require "public/phpmailer/class.phpmailer.php";
        // Khai báo tạo PHPMailer
        $mail = new PHPMailer();
        //Khai báo gửi mail bằng SMTP
        $mail->IsSMTP();
        //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
        // 1 = Thông báo lỗi ở client
        // 2 = Thông báo lỗi cả client và lỗi ở server
        // To load the French version
        $mail->setLanguage('vi', '/optional/path/to/language/directory/');
        $mail->SMTPDebug  = 1;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer'  => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            )
        );
        $mail->CharSet = "UTF-8";
        $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
        $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
        $mail->Port       = 587; // cổng để gửi mail
        $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
        $mail->SMTPAuth   = true; //Xác thực SMTP
        $mail->Username   = "dd0231803@gmail.com"; // Tên đăng nhập tài khoản Gmail
        $mail->Password   = "DXDlb113+"; //Mật khẩu của gmail
        $mail->SetFrom("dd0231803@gmail.com", "Hệ thống DXD Blog"); // Thông tin người gửi
        $mail->AddAddress("duongls2ls@gmail.com", "Dương Xuân Dưỡng"); //Email của người nhận
        //$mail->AddCC($email_recive, $name);//Email của người nhận
        $mail->Subject = $subject; //Tiêu đề của thư
        $mail->MsgHTML($contents); //Nội dung của bức thư.
        // $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
        // Gửi thư với tập tin html
        $mail->AltBody = "Nội dung thư"; //Nội dung rút gọn hiển thị bên ngoài thư mục thư.
        //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach
       // $mail->Send();
        //Tiến hành gửi email và kiểm tra lỗi

        if (!$mail->Send()) {
            setcookie('msg', 'Góp ý thất bại', time() + 2);
            header('Location: ?mod=blog_post');
        } else {
            setcookie('msg', 'Góp ý thành công', time() + 2);
            header('Location: ?mod=blog_post&id='.$slug);
        }
    }
    function slug($slug)
    {
        $query = "select id from posts where slug  = '$slug'";
        return $this->conn->query($query)->fetch_assoc();
    }
}
