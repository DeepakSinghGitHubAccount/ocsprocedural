<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit270852a589ecb6dcd5463079cedd7912
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit270852a589ecb6dcd5463079cedd7912::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit270852a589ecb6dcd5463079cedd7912::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}