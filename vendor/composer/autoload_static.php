<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5b826901ab2e25e9167a83d9d9d66e6
{
    public static $classMap = array (
        'Classes\\ConnectDb' => __DIR__ . '/../..' . '/Classes/ConnectDb.php',
        'Classes\\MainModel' => __DIR__ . '/../..' . '/Classes/mainModel.php',
        'Classes\\RectangleClass' => __DIR__ . '/../..' . '/Classes/RectangleClass.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd5b826901ab2e25e9167a83d9d9d66e6::$classMap;

        }, null, ClassLoader::class);
    }
}
