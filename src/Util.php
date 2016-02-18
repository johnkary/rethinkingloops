<?php

namespace RethinkingLoops;

class Util
{
    /**
     * Directory name within `src` to find and create runnable programs for
     * the given katas.
     *
     * @param string $dir
     * @return string[] FQCN of programs implementing the given kata
     */
    public static function kataProvider($dir)
    {
        $src = realpath(__DIR__ . '/../src/' . $dir);

        $paths = array_map(function ($filename) use ($src) {
            return sprintf('%s/%s', $src, $filename);
        }, scandir($src));

        $files = array_filter($paths, function ($path) {
            return false === is_dir($path);
        });

        $allClasses = array_map(function ($path) use ($src, $dir) {
            $path = str_replace('.php', '', $path);
            return str_replace($src . '/', '\\RethinkingLoops\\' . $dir . '\\', $path);
        }, $files);

        return array_filter($allClasses, function ($class) {
            $r = new \ReflectionClass($class);
            return false === $r->isAbstract();
        });
    }
}
