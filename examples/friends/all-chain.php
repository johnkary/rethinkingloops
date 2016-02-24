<?php

$friends = ['John', 'Chris', 'Penelope', 'Megan'];

echo array_reduce(array_map(function ($name) {
    return 'Hello ' . $name;
}, array_filter($friends, function ($name) {
    return strlen($name) <= 5;
})), function ($output, $greeting) {
    $output .= $greeting;
    return $output;
});
// "Hello JohnHello ChrisHello Megan";
