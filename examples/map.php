<?php

/**
 * array_map example:
 * Double each number.
 */

$ages = [1, 2, 3, 4, 5, 6];

$double = array_map(function ($age) {
    return $age * 2;
}, $ages);

var_dump($double); // [2, 4, 6, 8, 10, 12]
