<?php
// để không phải gọi lại namespace thì ta khai báo tên namespace ở trên đầu
//include "vendor/autoload.php"; // khái báo autoload
include "Square.php";

use model\Models\Square;


// cách gọi ra hàng số và static
echo square::$Pi;
echo "<br>";
echo square::__HANG_SO;
echo "<br>";

$square = new Square(10);
echo $square->display();

echo $square->chuvi();
echo "<br>";
echo $square->tinhdientich();
echo "<br>";
// instanceof : kiểm tra kiểu class của 1 instance
if ($square instanceof square) {
    echo "true";
    echo "<br>";
}
if ($square instanceof rectangle) {
    echo "true";
    echo "<br>";
}
if ($square instanceof StudentModel) {
    echo "true";
    echo "<br>";
} else {
    echo "false";
    echo "<br>";
}

// khai báo class StudentModel
//use Vinhphis\Php2\Models\{StudentModel,child};

// khai báo class People
//use Vinhphis\Php2\{People};
// Khởi tạo đối tượng People
//$people = new People();
//$people->name = "quang vinh";
//$people->address = "Hà Nội";
//echo $people->print();
//echo "<br>";


//$StudentModel = new StudentModel("quang vinh", "24", "Hà Nội", "vinh@gmail.com");
//$StudentModel2 = new StudentModel("quang vinh", "22", "Hn", "vinh@gmail.com");
//$StudentModel3 = new StudentModel("vinhphis");
// $StudentModel3 = new StudentModel("",null,"","");

// // truy cập biến name của StudentModel
//echo $StudentModel3->print();
// echo $StudentModel2->age;
//  echo $StudentModel->address;  không thể gọi đến được bởi vì biến age đang là private

// gọi phương thức trong StudentModel
// echo $StudentModel->print_name();
// echo $StudentModel->name;
// echo $StudentModel->find_name("123");
// $StudentModel->print_name_age();
// muốn lấy giá trị truyền ở trên thì lấy biến đã khởi tạo ở trên và trỏ đến giá trị cần in

// // so sánh 2 object ??
// Bằng nhau khi có cùng value và cùng instance StudentModel
// if ($StudentModel == $StudentModel2) { 
//     echo "\$StudentModel == \$StudentModel2";
// } else {
//     echo "\$StudentModel != \$StudentModel2";
// }
// echo "<br>";
// // Không bằng nhau vì 2 cái là 2 biến thể(instance) riêng 
// if ($StudentModel === $StudentModel2) {
//     echo "\$StudentModel === \$StudentModel2";
// } else {
//     echo "\$StudentModel !== \$StudentModel2";
// }

// // class ẩn danh 
// // khi cần khai báo nhanh 1 lớp - 1 object
// $sinhvienhoclai = new class("anonymous class")
// {
//     public $x;
//     public function __construct($a)
//     {
//         $this->x = $a; // gán biến a vào đối tượng x
//     }
// };
// echo  $sinhvienhoclai->x; // in ra đối tượng x

//if (isset($_GET['url'])) {
//    $url = $_GET['url'];
//} else {
//    $url = "/";
//}\
// mô hình mvc oop
//$url = isset($_GET['url']) ? $_GET['url'] : "/";
//
//switch ($url) {
//    case "/":
//        echo "đây là trang chủ";
//        break;
//    case "add":
//        echo "đây là in sản phẩm";
//        break;
//    case "list":
//        echo "đây là danh sách  sản phẩm";
//        break;
//}

