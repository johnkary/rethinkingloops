<?php

$friends = ['John', 'Chris', 'Penelope', 'Megan'];

echo array_reduce(array_map(function ($name) {
    return 'Hello ' . $name;
}, array_filter($friends, function ($name) {
    return strlen($name) < 6;
})), function ($output, $greeting) {
    $glue = $output ? ', ' : '';
    $output .= $glue . $greeting;
    return $output;
});
