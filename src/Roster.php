<?php

namespace RethinkingLoops;

/**
 * Class that implements the Roster kata.
 */
interface Roster
{
    /**
     * Average age of all students.
     *
     * @return int
     */
    public function getAverageAge();

    /**
     * List of students alphabetized by name for roll call.
     *
     * @return Student[]
     */
    public function getRoleCall();

    /**
     * Find oldest student in class.
     *
     * @return Student
     */
    public function getOldestStudent();

    /**
     * Find oldest student in class from each state.
     *
     * @return array('Kansas' => Student, 'Texas' => Student, etc))
     */
    public function getOldestStudentByState();
}
