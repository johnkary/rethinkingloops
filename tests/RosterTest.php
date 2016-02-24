<?php

namespace RethinkingLoops;

use Haystack\HArray;

class RosterTest extends \PHPUnit_Framework_TestCase
{
    private $john;
    private $chris;
    private $vero;
    private $maggie;

    public function setUp()
    {
        $this->john = new Student(1, 'John Kary', 'Kansas', 50);
        $this->chris = new Student(2, 'Chris', 'Kansas', 45);
        $this->vero = new Student(3, 'Vero', 'Texas', 35);
        $this->maggie = new Student(4, 'Maggie', 'Kansas', 30);
    }

    /**
     * @dataProvider getPrograms
     * @param Roster $program
     */
    public function testGetAverageAge(Roster $program)
    {
        $this->assertEquals(40, $program->getAverageAge(), sprintf("%s does not properly implement Roster kata", get_class($program)));
    }

    /**
     * @dataProvider getPrograms
     * @param Roster $program
     */
    public function testGetRollCall(Roster $program)
    {
        $expected = [
            $this->chris,
            $this->john,
            $this->vero,
            $this->maggie,
        ];

        $this->assertEquals($expected, $program->getRoleCall(), sprintf("%s does not properly implement Roster kata", get_class($program)));
    }

    /**
     * @dataProvider getPrograms
     * @param Roster $program
     */
    public function testGetOldestStudent(Roster $program)
    {
        $this->assertEquals($this->john, $program->getOldestStudent(), sprintf("%s does not properly implement Roster kata", get_class($program)));
    }

    /**
     * @dataProvider getPrograms
     * @param Roster $program
     */
    public function testGetOldestStudentByState(Roster $program)
    {
        $expected = [
            'Kansas' => $this->john,
            'Texas' => $this->vero,
        ];

        $this->assertEquals($expected, $program->getOldestStudentByState(), sprintf("%s does not properly implement Roster kata", get_class($program)));
    }

    public function getPrograms()
    {
        $students = $this->getStudents();

        return (new HArray(Util::kataProviderPipeline('Roster')))
            ->map(function ($class) use ($students) {
                return [new $class($students)];
            });
    }

    private function getStudents()
    {
        return [
            new Student(1, 'John Kary', 'Kansas', 50),
            new Student(2, 'Chris', 'Kansas', 45),
            new Student(3, 'Vero', 'Texas', 35),
            new Student(4, 'Maggie', 'Kansas', 30),
        ];
    }
}
