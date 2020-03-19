<?php

$arr     = [];
$randNum = rand(10, 100);
$n       = rand(1, $randNum);
$sum     = 0;

for ($i = 0; $i < $randNum; $i++) {
    $arr[] = rand(1, 100);
    if ($i < $n) {
        $sum += $arr[$i];
    }
}

echo $sum;
