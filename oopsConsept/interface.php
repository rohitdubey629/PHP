<?php
   
   // allow you to specify what methods a class should implement. and achive multiple inheritance
interface parent1{
  function calc($a,$b); // method declear 
}

interface parent2{
function sub($a,$b);  //method declear
}

class childClass implements parent1,parent2{
    public function calc($a,$b){  
       echo $a + $b. "<br>";
    }
    public function sub($a,$b){
        echo $a - $b;
    }
}

$text = new childClass();

$text->calc(10,20);
$text->sub(20,5);
?>