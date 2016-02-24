<?php

namespace RethinkingLoops;

/**
 * Class that implements the Metadata kata.
 */
interface Metadata
{
    /**
     * 1. Parse list of formats "name:format:maxLength"
     * 2. If any given line does not match this format return an empty array
     * 3. Return list of metadata with keys: name, format, maxLength
     *
     * @param array $metadata
     * @return \stdClass[]
     */
    public function run(array $metadata);
}
