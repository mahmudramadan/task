<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3003e9580cb374e4c89f44ac74ddabf0
{
    public static $classMap = array (
        'Classes\\ConnectDb' => __DIR__ . '/../..' . '/Classes/ConnectDb.php',
        'Classes\\Main_model' => __DIR__ . '/../..' . '/Classes/Main_model.php',
        'Classes\\RectangleClass' => __DIR__ . '/../..' . '/Classes/RectangleClass.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3003e9580cb374e4c89f44ac74ddabf0::$classMap;

        }, null, ClassLoader::class);
    }
}
