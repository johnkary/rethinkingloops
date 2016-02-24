<?php

$friends = ['John', 'Chris', 'Penelope', 'Megan'];

$shortFriends = array_filter($friends, function ($name) { return strlen($name) <= 5; });
// [
//     'John',
//     'Chris',
//     'Megan',
// ]

$greetings = array_map(function ($name) { return 'Hello ' . $name; }, $shortFriends);
// [
//     'Hello John',
//     'Hello Chris',
//     'Hello Megan',
// ]

$hello = array_reduce($greetings, function ($output, $greeting) {
    $output .= $greeting;

    return $output;
});
// "Hello JohnHello ChrisHello Megan";

echo $hello;
