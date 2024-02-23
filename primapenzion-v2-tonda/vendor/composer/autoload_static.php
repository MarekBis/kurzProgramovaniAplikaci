<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea341a747ed113df5ad1f501985a1294
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'primakurzy\\Shortcode\\' => 21,
        ),
        'T' => 
        array (
            'Thunder\\Shortcode\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'primakurzy\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/primakurzy/shortcode/src',
        ),
        'Thunder\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea341a747ed113df5ad1f501985a1294::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea341a747ed113df5ad1f501985a1294::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea341a747ed113df5ad1f501985a1294::$classMap;

        }, null, ClassLoader::class);
    }
}
