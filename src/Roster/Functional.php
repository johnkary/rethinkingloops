<?php

namespace RethinkingLoops\Roster;

use RethinkingLoops\Roster;
use RethinkingLoops\Student;

/**
 * Functional implementation of Roster kata
 */
class Functional implements Roster
{
    /** @var Student[] */
    private $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    /**
     * Average age of all students.
     *
     * @return int
     */
    public function getAverageAge()
    {
        // TODO: Implement getAverageAge() method.
    }

    /**
     * List of students alphabetized by name for roll call.
     *
     * @return Student[]
     */
    public function getRoleCall()
    {
        // TODO: Implement getRoleCall() method.
    }

    /**
     * Find oldest student in class.
     *
     * @return Student
     */
    public function getOldestStudent()
    {
        return array_reduce($this->students, function (Student $oldest, Student $student) {
            return $student->getAge() > $oldest->getAge() ? $student : $oldest;
        }, reset($this->students));

//        return array_reduce($this->students, function (Student $oldest, Student $student) {
//            if ($student->getAge() > $oldest->getAge()) {
//                $oldest = $student;
//            };
//
//            return $oldest;
//        }, reset($this->students));
    }

    /**
     * Find oldest student in class from each state.
     *
     * @return array('Kansas' => Student, 'Texas' => Student, etc))
     */
    public function getOldestStudentByState()
    {
        // TODO: Implement getOldestStudentByState() method.
        return [];
    }
}
