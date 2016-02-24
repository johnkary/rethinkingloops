<?php

namespace RethinkingLoops;

class HArrayTest extends \PHPUnit_Framework_TestCase
{
    public function testSplitWith()
    {
        $data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        list ($match, $noMatch) = (new HArray($data))->splitWith(function ($i) {
            return $i >= 8;
        });

        $this->assertCount(3, $match);
        $this->assertCount(7, $noMatch);
    }
}
