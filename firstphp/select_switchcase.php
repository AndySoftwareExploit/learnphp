<?php
$persontype = 2;

switch ($persontype) {
    case 1:
        echo '老师';
        break;
    case 2:
        echo '学生';
        break;
    case 3:
        echo '校长';
        break;
    case 4:
        echo '家长';
        break;
    default:
        echo '空';
        break;
}