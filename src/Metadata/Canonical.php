<?php

namespace RethinkingLoops\Metadata;

use RethinkingLoops\Metadata;

/**
 * Canonical implementation of Metadata kata
 */
class Canonical implements Metadata
{
    /**
     * @param array $metadata
     * @return \stdClass[]
     */
    public function run(array $metadata)
    {
        $fields = [];

        foreach($metadata as $o) {
            $o2 = explode(':',$o);
            if (sizeof($o2) != 3) {
                $fields = [];
                break;
            }

            $field = new \stdClass();
            $field->name = urldecode($o2[0]);
            $field->type = $o2[1];
            $field->max_length = $o2[2];

            $fields[] = $field;
        }

        return $fields;
    }
}
