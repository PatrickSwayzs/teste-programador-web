<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteece945e14a18e1f5c3afe7078291d11
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteece945e14a18e1f5c3afe7078291d11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteece945e14a18e1f5c3afe7078291d11::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
