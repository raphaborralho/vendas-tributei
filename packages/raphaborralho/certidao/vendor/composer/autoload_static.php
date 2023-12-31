<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd217208d534baca3dc86f01bbd0ed211
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Raphaborralho\\Certidao\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Raphaborralho\\Certidao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd217208d534baca3dc86f01bbd0ed211::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd217208d534baca3dc86f01bbd0ed211::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd217208d534baca3dc86f01bbd0ed211::$classMap;

        }, null, ClassLoader::class);
    }
}
