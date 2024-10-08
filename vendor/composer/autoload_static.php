<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf118c37e4749e540312199039ea62175
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Custom\\Admincrud\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Custom\\Admincrud\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf118c37e4749e540312199039ea62175::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf118c37e4749e540312199039ea62175::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf118c37e4749e540312199039ea62175::$classMap;

        }, null, ClassLoader::class);
    }
}
