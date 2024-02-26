<?php

class person{
    public $name;
    public $age;

    function __construct($name="no name",$age=0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show(){
        echo $this->name . " " . $this->age ."\n";
    }
}

$p1 = new person();
$p2 = new person("rohit",25);
$p3 = new person("rohit dubey",24);

$p1->show();
$p2->show();
$p3->show();
?>