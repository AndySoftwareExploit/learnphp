<?php
$a = 5;
$b = 5;
$c = 6;
$d = 2;

//相等输出0
var_dump($a <=> $b); //5=5返回0
var_dump($a <=> $c);//左边小于右边返回-1，5<6返回-1
var_dump($a <=> $d);//左边大于右边返回1，5>2返回1
?>
