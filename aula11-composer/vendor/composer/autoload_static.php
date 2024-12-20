<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65393694ff85581b6e9bf86ac13dce1a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aluno\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aluno\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit65393694ff85581b6e9bf86ac13dce1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65393694ff85581b6e9bf86ac13dce1a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65393694ff85581b6e9bf86ac13dce1a::$classMap;

        }, null, ClassLoader::class);
    }
}
