<?php

require __DIR__ . '/../../vendor/autoload.php';

(new \Haystack\HArray(range(1,1024)))
->filter(function ($i) { echo memory_get_usage()."\n"; return $i < 10; })
->map(function ($i) { echo memory_get_usage()."\n"; echo sprintf(" Number: %d\n", $i); });
