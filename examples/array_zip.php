<?php

function array_zip(array ...$arrays) {
  return array_map(function () {
    return array_reduce(func_get_args(), function ($zip, $new) {
      $zip[] = $new;
      return $zip;
    }, []);
  }, ...$arrays);
}

$names = ['John', 'Mary', 'Darren'];
$emails = ['john@kary.net', 'mary@mks.com', 'darren@woodworking.com'];
$jobs = ['Pilot', 'Astronaut', 'Woodworker'];

var_dump(array_zip($names, $emails, $jobs));


//////////////////////////
// Tests

function assertEquals($expected, $actual) {
  if ($expected == $actual) return;
  echo sprintf("Two values are not equal:\nExpected:\n%s\nActual:\n%s\n", print_r($expected,true), print_r($actual,true));
}

// Single array (1) -- A single array spills its guts across multiple arrays
$expected = [
  [1],
  [2],
  [3],
];
assertEquals($expected, array_zip([1,2,3]));

// Same length (2) -- Two arrays combined
$expected = [
  [1, 4],
  [2, 5],
  [3, 6],
];
assertEquals($expected, array_zip([1,2,3], [4,5,6]));

// Multiple (4) -- This function is variadic
$expected = [
  [1, 4, 7],
  [2, 5, 8],
  [3, 6, 9],
];
assertEquals($expected, array_zip([1,2,3], [4,5,6], [7,8,9]));

// Shorter first
$expected = [
  [1, 4],
  [2, 5],
  [3, 6],
  [null, 7],
];
assertEquals($expected, array_zip([1,2,3], [4,5,6,7]));

// Shorter second
$expected = [
  [1, 4],
  [2, 5],
  [3, 6],
  [4, null],
];
assertEquals($expected, array_zip([1,2,3,4], [4,5,6]));
