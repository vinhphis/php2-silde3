<?php

namespace Vinhphis\Php2;

use \datetime; // dùng cho class có sẵn của php
use Vinhphis\Php2\Models\StudentModel;

class People
{
    public $name, $address;

    public function print()
    {
        $student = new StudentModel("quang vinh", "vinhh", "Hà Nội", "vinh@gmail.com");
        echo $student->name;

        $time = new datetime();
        var_dump($time);
    }
}
