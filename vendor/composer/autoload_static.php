<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit928a15abe3d01a859f915b2a12524a93
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
        'd0dc0dbe79bc5bdb8ee08ef85b1a8ced' => __DIR__ . '/../..' . '/config/routes.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Taujor\\WaterCo\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Laravel\\SerializableClosure\\' => 28,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Taujor\\WaterCo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Laravel\\SerializableClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/serializable-closure/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit928a15abe3d01a859f915b2a12524a93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit928a15abe3d01a859f915b2a12524a93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit928a15abe3d01a859f915b2a12524a93::$classMap;

        }, null, ClassLoader::class);
    }
}