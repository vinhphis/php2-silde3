<?php

namespace model\Models;
include "Rectangle.php";

// class square thừa kế của class rectangle bằng từ khóa extends
class Square extends Rectangle implements \Shape, \Action
{

//    tồn tại độc lập không phụ thuộc vào class
    static $Pi = 3.14;
//    hằng số không thể thay đổi được giá trị
    const __HANG_SO = 10;

    public function __construct($size)
    {
//        tái sử dụng hàm khởi tạo của lớp cha
//        với từ khóa parent
        parent::__construct($size, $size);
    }

    public function chuvi()
    {
        $chuvi = ($this->width + $this->hieght) * 2;
        return $chuvi;
    }

    function tinhdientich()
    {
        return $this->dientich();
    }

//    interface
    function infor($w, $h)
    {
        // định nghĩa phần thân cho interface
    }

    function dienTich1($w, $h){}
    function run($w, $h)
    {
        // TODO: Implement run() method.
    }
    function view($w, $h)
    {
        // TODO: Implement run() method.
    }
    //    trait: đa kế thừa PHP!!


    function echoInfor()
    {
        // TODO: Implement echoInfor() method.
    }

    function echoName()
    {
        // TODO: Implement echoName() method.
    }
}
