<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81a490a2d1c2de0aad55a06bc39c1bde
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit81a490a2d1c2de0aad55a06bc39c1bde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81a490a2d1c2de0aad55a06bc39c1bde::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit81a490a2d1c2de0aad55a06bc39c1bde::$classMap;

        }, null, ClassLoader::class);
    }
}
