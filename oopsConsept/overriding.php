<?php

  class calculation{

    public function calc($n1,$n2){
        return $n1 * $n2;
    }
  }

  class calculation2 extends calculation{
    //function name of same but work is change this cald a function overriding
    public function calc($n1,$n2){
        return $n1 +$n2;
    }
  }

$c1 = new calculation();
$c2 = new calculation2();

echo " Multiplay : ".$c1->calc(10,20). "<br>";
echo " Sum : ".$c2->calc(20,30);


?>