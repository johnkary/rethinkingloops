<?php

/**
 * array_filter example:
 * Find the ages of people who can ride the roller coaster.
 */

$ages = [5, 8, 10, 12, 16, 21, 40, 60, 75];

$riders = array_filter($ages, function ($age) {
    return $age >= 12 && $age <= 55;
});

var_dump($riders); // [12, 16, 21, 40]
