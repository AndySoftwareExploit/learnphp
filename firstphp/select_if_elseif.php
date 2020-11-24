<?php
$marks = 80;
$grade = '';

if ($marks >= 85) {
    $grade = 'A';
}
elseif ($marks < 85 && $marks >=75) {
    $grade = 'B';
}
else {
    $grade = 'C';
}
echo '等级为：' . $grade . PHP_EOL;