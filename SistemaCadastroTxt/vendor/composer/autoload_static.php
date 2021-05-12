<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e1067dad21749d94848fe8999a2d9f3
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e1067dad21749d94848fe8999a2d9f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e1067dad21749d94848fe8999a2d9f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e1067dad21749d94848fe8999a2d9f3::$classMap;

        }, null, ClassLoader::class);
    }
}