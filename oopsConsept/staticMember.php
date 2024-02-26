<?php

class base1{

// static run vithout create object 
    public static $name = "Rohit dubey";

    public static function show(){
        echo self::$name. "<br>";
    }

    // public function __construct()
    // {
    //     self::show();
    // }
    // public function __construct($n)
    // {
    //     self::$name = $n;
    // }
}

class drive1 extends base1{
    public static function show(){
        echo base1::$name;
    }
}

// echo base1::$name;
// base1::show();


// $p1 = new base1();
// $p1->show();
// $p1 = new base1("shubham");
// $p1->show();

$p1 = new drive1();
$p1->show();
?>