<?php

namespace RethinkingLoops;

class Student
{
    private $id;
    private $name;
    private $state;
    private $age;

    public function __construct($id, $name, $state, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->state = $state;
        $this->age = $age;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function equals(Student $student = null)
    {
        return $student && $student->id === $this->id;
    }
}
