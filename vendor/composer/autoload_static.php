<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf39e579426eb5f2676d23b5e703360f7
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf39e579426eb5f2676d23b5e703360f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf39e579426eb5f2676d23b5e703360f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf39e579426eb5f2676d23b5e703360f7::$classMap;

        }, null, ClassLoader::class);
    }
}
