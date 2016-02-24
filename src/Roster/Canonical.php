<?php

namespace RethinkingLoops\Roster;

use RethinkingLoops\Roster;
use RethinkingLoops\Student;

/**
 * Canonical implementation of Roster kata
 */
class Canonical implements Roster
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
        $oldest = null;
        foreach ($this->students as $student) {
            if (!$oldest || $student->getAge() > $oldest->getAge()) {
                $oldest = $student;
            }
        }

        return $oldest;
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
