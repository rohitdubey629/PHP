<?php

//absract class only defin mothid and  dont empliment how inherit that person are implement the mothod 
 abstract class parentClass{
    public $name;
    abstract protected function calc($a,$b); //define the function 
 }

class childClass extends parentClass{
    public function calc($a,$b){
        echo "total number : ". $a+$b;  //implement the function
    }
}


$p1 = new childClass();
$p1->calc(10,20);




?>