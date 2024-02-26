<?php

class base{
    public $name;  // access to anyware 
    protected $number;  //access to only extends class
    private $address;  // private is not access to out side of class
    public function __construct($name,$number,$address)
    {
        $this->name= $name;
        $this->number = $number;
        $this->address = $address;
    }

    public function info(){
        echo "Name : $this->name <br> Number : $this->number <br> Address : $this->address <br>";
    }
}

class drive extends base{ 
       public function get(){
       echo "Name : " . $this->name . "<br> Address" . $this->number;
    //    echo "Address".$this->address; //error this variable is private 
       }
}

$p1 = new base("ram",12345,"prayagraj");
$p2 = new drive("rohit",8858,"prayagraj");
$p1->info();
$p2->get();
?>