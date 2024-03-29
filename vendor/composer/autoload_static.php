<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57369ecc59add1f3ea8cb5dd4024d95c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Max\\NotesPro\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Max\\NotesPro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57369ecc59add1f3ea8cb5dd4024d95c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57369ecc59add1f3ea8cb5dd4024d95c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
