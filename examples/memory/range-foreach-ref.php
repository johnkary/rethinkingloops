<?php

require __DIR__ . '/../../vendor/autoload.php';

$a = range(1, 1024);
$b = $a; // Increases refcount, so when $a used by-value in foreach PHP must duplicate array in memory
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
