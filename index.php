<?php

$arr = [10,20,130,40,50];


function sum($a,$num){
return $a+=$num;
}
$result = array_map(function($num){
    return $num+=$num;
    },$arr);

print_r($result);
?>