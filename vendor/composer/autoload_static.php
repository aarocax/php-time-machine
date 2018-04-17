<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2ae78e762dcfebb0d1a9b974b6f8dac
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TimeMachine\\src\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TimeMachine\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2ae78e762dcfebb0d1a9b974b6f8dac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2ae78e762dcfebb0d1a9b974b6f8dac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}