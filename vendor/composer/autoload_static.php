<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c29b126ad97ff0ad4bf10b11c4e3000
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Zebra_Pagination' => __DIR__ . '/..' . '/stefangabos/zebra_pagination/Zebra_Pagination.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9c29b126ad97ff0ad4bf10b11c4e3000::$classMap;

        }, null, ClassLoader::class);
    }
}
