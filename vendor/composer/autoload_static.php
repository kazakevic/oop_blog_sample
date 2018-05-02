<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22ad8fe53c5978b1e3805a706b992c91
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit22ad8fe53c5978b1e3805a706b992c91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22ad8fe53c5978b1e3805a706b992c91::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
