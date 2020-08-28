<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d26e036f7c7ee3aeed107ae33a8b544
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\Models\\' => 11,
            'app\\Core\\' => 9,
            'app\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app/Models',
        ),
        'app\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app/Core',
        ),
        'app\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app/Controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d26e036f7c7ee3aeed107ae33a8b544::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d26e036f7c7ee3aeed107ae33a8b544::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
