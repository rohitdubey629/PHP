<?php

class base1{

    protected static $name = "Rohit";

    public static function show(){
        echo static::$name. "<br>";
        echo self::$name;
    }
}

class drive1 extends base1{
protected static $name = "Dubey";
}

$p1 = new drive1();
$p1->show();
?>