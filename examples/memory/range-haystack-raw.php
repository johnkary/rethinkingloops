<?php

require __DIR__ . '/../../vendor/autoload.php';

array_map(function ($i) { echo memory_get_usage()."\n"; echo sprintf(" Number: %d\n", $i); },
    array_filter(range(1,1024), function ($i) { echo memory_get_usage()."\n"; return $i < 10; })
);
