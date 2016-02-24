<?php

namespace RethinkingLoops;

use Haystack\HArray;

class MetadataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getPrograms
     * @param Metadata $program
     */
    public function testHappyPath(Metadata $program)
    {
        $metadata = [
            "hello%20world:string:255",
            "john%20kary:string:255",
            "500:int:9",
            "785-555-1234:string:32",
        ];

        $expected = [
            $this->answer('hello world', 'string', '255'),
            $this->answer('john kary', 'string', '255'),
            $this->answer('500', 'int', '9'),
            $this->answer('785-555-1234', 'string', '32'),
        ];

        $this->assertEquals($expected, $program->run($metadata), sprintf("%s does not properly implement Metadata kata", get_class($program)));
    }

    /**
     * @dataProvider getPrograms
     * @param Metadata $program
     */
    public function testParseErrorTooManyParts(Metadata $program)
    {
        $metadata = [
            "hello%20world:string:255",
            "Name:Type:Length:Comment",
            "500:int:9",
            "john%20kary:string:255",
        ];

        $expected = [];

        $this->assertEquals($expected, $program->run($metadata), sprintf("%s does not properly implement Metadata kata", get_class($program)));
    }

    /**
     * @dataProvider getPrograms
     * @param Metadata $program
     */
    public function testParseErrorTooFewParts(Metadata $program)
    {
        $metadata = [
            "hello%20world:string:255",
            "500:int:9",
            "john%20kary:string:255",
            "Name:Type",
        ];

        $expected = [];

        $this->assertEquals($expected, $program->run($metadata), sprintf("%s does not properly implement Metadata kata", get_class($program)));
    }

    public function getPrograms()
    {
        return (new HArray(Util::kataProviderPipeline('Metadata')))
            ->map(function ($class) {
                return [new $class];
            });
    }

    private function answer($name, $type, $length)
    {
        $a = new \stdClass();
        $a->name = $name;
        $a->type = $type;
        $a->max_length = $length;

        return $a;
    }
}
