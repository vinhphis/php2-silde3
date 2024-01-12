<?php
// file model dùng để viết câu truy vấn csdl

namespace Vinhphis\Php2\Models;
// là khái niệm đưa ra để quản lý mã nguồn
class StudentModel // tên class StudentModel : trùng với tên file
{
    // properties: thuộc tính , biến
    public $name, $age = "76"; // có thể được gọi hoặc truy cập từ bên ngoài
    public $detail = "abcxyz";
    private $address; // truy cập nội bộ

    protected $email = "vinh@gmail.com"; // cho phép truy cập ở lớp con , bên ngoài nhưng chỉ giới hạn trong thư mục
    // các từ khóa public, private, protected thể hiện mức độ truy cập được phép từ lớp con hoặc từ

    // construct - hàm khởi tạo
    // cấp pháp hoặc truyền dữ liệu cho class
    // chỉ có 1 hàm construct
    public function __construct( $name = "vinh", $age = 12, $address = "Hn",$email = "vinh@gmail.com")
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->email = $email;
        $this->detail ;
    }


    // public function __destruct() // hủy bỏ
    // {
    //     echo "Đối tượng đã bị hủy";
    //     echo "</br>";
    //     //  hàm được gọi khi không còn sử dụng đối tượng này nữa
    //     // gọi câu lệnh tên là : unset
    // }


    // method : phương thức - hàm
    public function find_id($name)
    {
        $this->name = $name; // cách sử dụng biến khai báo ở trên (biến toàn cục) 
        return $name;
    }

    public function find_name($name)
    {
        return $name; // biến local
    }

    public function print()
    {
        echo $this->name . "<br>";
        echo $this->address . "<br>";
        echo $this->age . "<br>";
        echo $this->email . "<br>";
        echo $this->detail . "<br>";
    }

}

class child extends StudentModel{

}
