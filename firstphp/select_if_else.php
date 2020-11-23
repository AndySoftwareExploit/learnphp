<?php
$book = "《语文》";
$pocketmoney = 20;
if ($pocketmoney > 50) $book = '《黄色小说》';
echo '应该买' . $book;

if ($pocketmoney > 50) {
    $book = '《黄色小说》';
} else {
    $book = '《语文》';
}
echo '应该买：' . $book;