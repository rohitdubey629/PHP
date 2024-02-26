<?php
class calculation{
    public $a,$b,$c;
    function sum(){
      $this->c = $this->a + $this->b;
      return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
      }
}

$obj1 = new calculation();

$obj1->a=20;
$obj1->b=10;
$sum  = $obj1->sum();
echo "total number of sum = $sum\n";
$substration  = $obj1->sub();
echo "total number of substraction = $substration";
?>