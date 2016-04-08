<?php

require __DIR__ . '/../vendor/autoload.php';

//use Transducers as t;

//$xf = t\comp(
//    t\drop(2),
//    t\map(function ($x) { return $x + 1; }),
//    t\filter(function ($x) { return $x % 2; }),
//    t\take(3)
//);

//$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//$result = t\xform($data, $xf); // [5, 7, 9]

use const \nspl\op\sum;
use const \nspl\a\filter;
use const \nspl\a\drop;
use const \nspl\a\map;
use const \nspl\a\reduce;
use const \nspl\a\take;
use function \nspl\f\partial;
use function \nspl\f\pipe;
use function \nspl\f\rpartial;

$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$result = pipe(
    $input,
    rpartial(drop, 2),
    partial(map, function($x) { return $x + 1; }),
    partial(filter, function($x) { return $x % 2; }),
    rpartial(take, 3)
);

var_dump($result);
// [5, 7, 9]