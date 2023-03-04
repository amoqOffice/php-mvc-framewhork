<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e7b2e1ae63da2c0a43e538edca16fa4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aven\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aven\\' => 
        array (
            0 => __DIR__ . '/..' . '/lotfio/aven/src/Aven',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e7b2e1ae63da2c0a43e538edca16fa4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e7b2e1ae63da2c0a43e538edca16fa4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e7b2e1ae63da2c0a43e538edca16fa4::$classMap;

        }, null, ClassLoader::class);
    }
}