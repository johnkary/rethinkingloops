<?php

echo 'Initialize: ' . memory_get_usage()."\n";
require __DIR__ . '/../../vendor/autoload.php';
echo 'Autoload: ' . memory_get_usage()."\n";

use Transducers as t;

$xf = t\comp(
    t\take(10),
//    t\take_while(function ($i) { return $i < 10; }),
    t\map(function ($i) { echo "Processing $i\n"; return $i * 2; }),
    t\map(function ($i) { echo "Character of ".chr($i)."\n"; return chr($i); }),
    t\map(function ($i) { echo "Cool down...\n"; sleep(2); })
);
$coll = range(1, 1024);
echo 'Before: ' . memory_get_usage()."\n";
t\xform($coll, $xf);
echo 'After: ' . memory_get_usage()."\n";
