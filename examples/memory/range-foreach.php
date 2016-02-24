<?php

require __DIR__ . '/../../vendor/autoload.php';

$a = range(1, 1024);
echo memory_get_usage()."\n";

$count = 0;
foreach ($a as $v) {
    if ($count < 10) {
        echo memory_get_usage()."\n";
        echo sprintf("Number: %d\n", $v);
        $count++;
    }
}

echo memory_get_usage()."\n" ;
