<?php require __DIR__ . '/../../vendor/autoload.php'; require __DIR__ . '/Student.php';



$names = (new \Haystack\HArray([
    new Student('John', 'Kansas', 40),
    new Student('Jessica', 'Kansas', 30),
    new Student('Micah', 'Minnesota', 18),
]))
->filter(function (Student $student) {
    return $student->getState() === 'Kansas' && $student->getAge() >= 30;
})
->map(function (Student $student) {
    return $student->getName();
});

echo implode(',', $names->toArray());






