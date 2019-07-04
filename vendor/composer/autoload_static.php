<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6fd9dd5857931be6619185fe85f9d5c
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6fd9dd5857931be6619185fe85f9d5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6fd9dd5857931be6619185fe85f9d5c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
