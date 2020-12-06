<pre>
<?php
// 循环查找记账数据
// foreach (所有数据 as 目前记账) {
//     // 目前记账数据
//     if (目前记账日期 = 2018-06-10) {
//         // 输出数据
//         // 跳出循环
//     }
// }
include '../firstphp/bill_data.php';
foreach ($billdata as $val) {
    if ($val['date'] == '2018-06-10') {
        echo '日期：' . $val['date'] . PHP_EOL;
        echo '金额：' . $val['money'] . PHP_EOL;
        echo '备注：' . $val['comment'] . PHP_EOL;
        break;
    }
    // else {
    //     echo '没有找到' . PHP_EOL;
    //     break;
    // }
}
?>
</pre>