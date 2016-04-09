<?php

require __DIR__ . '/../vendor/autoload.php';

use const \nspl\op\sum;
use const \nspl\a\filter;
use const \nspl\a\drop;
use const \nspl\a\map;
use const \nspl\a\reduce;
use const \nspl\a\take;
use function \nspl\f\compose;
use function \nspl\f\partial;
use function \nspl\f\pipe;
use function \nspl\f\rpartial;

$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$program = compose(
    rpartial(take, 3),
    partial(filter, function($x) { return $x % 2; }),
    partial(map, function($x) { return $x + 1; }),
    rpartial(drop, 2)
);

var_dump($program($input));
