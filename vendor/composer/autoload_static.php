<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66fcf12c33458899416fbbb13a42fcae
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MicroOdm\\' => 9,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MicroOdm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/MicroOdm',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonMapper' => 
            array (
                0 => __DIR__ . '/..' . '/netresearch/jsonmapper/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66fcf12c33458899416fbbb13a42fcae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66fcf12c33458899416fbbb13a42fcae::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit66fcf12c33458899416fbbb13a42fcae::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
