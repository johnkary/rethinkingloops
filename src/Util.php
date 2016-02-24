<?php

namespace RethinkingLoops;

use Haystack\HArray;

class Util
{
    /**
     * Directory name within `src` to find and create runnable programs for
     * the given katas.
     *
     * @param string $dir
     * @return string[] FQCN of programs implementing the given kata
     */
    public static function kataProviderProcedural($dir)
    {
        $src = realpath(__DIR__ . '/../src/' . $dir);
        $files = scandir($src);

        $katas = [];
        foreach ($files as $name) {
            $path = sprintf('%s/%s', $src, $name);
            if (is_dir($path)) {
                continue;
            }

            $path = str_replace('.php', '', $path);
            $fqcn = str_replace($src . '/', '\\RethinkingLoops\\' . $dir . '\\', $path);

            $ref = new \ReflectionClass($fqcn);
            if ($ref->isAbstract()) {
                continue;
            }

            $katas[] = $fqcn;
        }

        return $katas;
    }

    /**
     * Directory name within `src` to find and create runnable programs for
     * the given katas.
     *
     * @param string $dir
     * @return string[] FQCN of programs implementing the given kata
     */
    public static function kataProviderPipeline($dir)
    {
        $src = realpath(__DIR__ . '/../src/' . $dir);

        return (new HArray(scandir($src)))
            ->map(function ($filename) use ($src) {
                return sprintf('%s/%s', $src, $filename);
            })
            ->filter(function ($path) {
                return false === is_dir($path);
            })
            ->map(function ($filepath) use ($src, $dir) {
                $filepath = str_replace('.php', '', $filepath);
                return str_replace($src . '/', '\\RethinkingLoops\\' . $dir . '\\', $filepath);
            })
            ->filter(function ($fqcn) {
                return false === (new \ReflectionClass($fqcn))->isAbstract();
            })
            ->toArray();
    }
}
