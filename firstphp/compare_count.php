<?php
$a = 2;
$b = '2';
$c = 4;
//bool尝试，真trur or 假false
// asleeping...But to be continue!
var_dump($a == $b);//仅比较数据
var_dump($a === $b);//不仅比较数据还比较类型，这里int与str返回false
var_dump($a != $b);//不等于比较
var_dump($a !== $b);//数据类型相同即true
var_dump($a > $c);//大于
var_dump($a < $c);//小于
var_dump($a >= $c);
var_dump($a <= $c);
