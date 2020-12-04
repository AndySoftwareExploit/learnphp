<?php
function arrSum(array $arr)
{
    $sum = 0;
    if (!is_array($arr)) return 0;
    foreach ($arr as $val) {
        if (is_numeric($val)) $sum += $val;
    }
    echo "nice!";
    return $sum;
}

$couple = [1,11,12,2,4,5,6,13,14,15,7,8,3,9,17,18,19,10,16,20];
echo arrSum($couple);