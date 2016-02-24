<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/Student.php';

/** @var Student[] $roster */
$roster = [
    new Student('John', 'Kansas', 40),
    new Student('Jessica', 'Kansas', 30),
    new Student('Micah', 'Minnesota', 18),
];

/** @var Student[] $found */
$found = [];
foreach ($roster as $student) {
    if ($student->getState() === 'Kansas' && $student->getAge() >= 30) {
        $found[] = $student;
    }
}

$names = [];
foreach ($found as $student) {
    $names[] = $student->getName();
}

echo implode(',', $names);
