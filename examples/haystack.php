<?php

require __DIR__ . '/../vendor/autoload.php';

$start = [1, 2, 3, 4, 5];

echo (new \Haystack\HArray($start))
    ->map(function ($i) {
        return $i * 2;
    })
    ->filter(function ($i) {
        return $i < 9;
    })
    ->reduce(function ($sum, $i) {
        return $sum + $i;
    });
