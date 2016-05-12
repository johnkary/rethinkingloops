<?php

$users = array_map(function($u) { return (object) $u; }, [
    ['age' => 31, 'name' => 'John'],
    ['age' => 12, 'name' => 'Jamie'],
    ['age' => 8, 'name' => 'Megan'],
]);
var_dump($users);

$minors = array_reduce($users, function($count, $user) {
    return $count + (int) ($user->age < 25);
});
var_dump($minors);
