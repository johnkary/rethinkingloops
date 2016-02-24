<?php

/**
 * array_reduce example:
 * Create a new array of users grouped by the state in which they live.
 */

$users = [
    ['state' => 'KS', 'name' => 'John'],
    ['state' => 'CO', 'name' => 'Alex'],
    ['state' => 'KS', 'name' => 'Eric'],
    ['state' => 'MO', 'name' => 'Mary'],
];

$initial = [];
$byState = array_reduce($users, function (array $carry, $user) {
    $state = $user['state'];

    $carry[$state][] = $user['name'];

    return $carry;
}, $initial);

var_dump($byState);
/**
 * [
 *   'KS' => ['John','Eric'],
 *   'CO' => ['Alex'],
 *   'MO' => ['Mary'],
 * ]
 */
