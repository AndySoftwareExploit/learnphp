<pre>
<?php
$income = [
    'date' => '2018-06-01',
    'money' => -32.5,
    'comment' => '吃饭消费'
];
// 访问方法：变量名['键']
echo $income['date'] . PHP_EOL;
echo $income['money'] . PHP_EOL;
echo $income['comment'] . PHP_EOL;
//访问方法：变量名[顺序]
$moneyarr = [-32.5,80,-25,-15];
echo $moneyarr[0] . PHP_EOL;
echo $moneyarr[1] . PHP_EOL;
echo $moneyarr[2] . PHP_EOL;
echo $moneyarr[3] . PHP_EOL;
?>
</pre>