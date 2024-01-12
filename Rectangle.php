<?php
namespace model\Models;

abstract class Rectangle // class cha
{
    public $width ;
    public $hieght ;

    // khai báo sử dụng trait
    use \Shape2;

    abstract function echoInfor();
    abstract function echoName();

    public function getWidth()
    {
        return $this->width;
    }


    public function setWidth($width)
    {
        $this->width = $width;
    }


    public function getHieght()
    {
        return $this->hieght;
    }


    public function setHieght($hieght)
    {
        $this->hieght = $hieght;
    }

    public function __construct($hieght = 10, $width = 20)
    {
        $this->hieght = $hieght;
        $this->width = $width;
    }

// final : không cho phép ghi đè phương thức
    final public function dientich()
    {
        return $this->hieght * $this->width;
    }
}