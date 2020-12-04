<?php
$hello = "<a href='http://129.211.88.87'>Hello</a>";
echo $hello . PHP_EOL;
for ($i=0; $i <20 ; $i++) { //已知次数循环
    echo $i . PHP_EOL;
}

//数组循环
$classmate = [
    '1' => 'AoYue',
    '2' => 'ChenBingwen',
    '28' => 'YeShao',
    '32' => 'DengYiyun',
    '34' => 'HeYingning',
    '35' => 'HuangJialing',
    '38' => 'LinXiaoke',
    '40' => 'LuoJiahuan',
    '41' => 'MaShilin',
    '43' => 'QiuQianyi',
    '47' => 'WuZhihui',
    '50' => 'ZhaoLeyi'
];
foreach ($classmate as $key => $value) {
    echo '<pre>学号：' . $key . '名字：' . $value . '</pre>' . PHP_EOL;
}

//条件循环
$time = 0;
while ($time < 10) {
    echo $time . PHP_EOL;
    $time++;
}