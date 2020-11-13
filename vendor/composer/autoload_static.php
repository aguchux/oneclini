<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16993cbaf0dc5309f7b5a0e7f0a0b1ad
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Apps\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Apps\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_apps',
            1 => __DIR__ . '/../..' . '/_apps/Apps',
        ),
    );

    public static $classMap = array (
        'Apps\\Core' => __DIR__ . '/../..' . '/_apps/Core.php',
        'Apps\\Cron' => __DIR__ . '/../..' . '/_apps/Apps/Cron.php',
        'Apps\\Device' => __DIR__ . '/../..' . '/_apps/Apps/Device.php',
        'Apps\\EmailTemplate' => __DIR__ . '/../..' . '/_apps/Apps/EmailTemplate.php',
        'Apps\\Emailer' => __DIR__ . '/../..' . '/_apps/Apps/Emailer.php',
        'Apps\\Model' => __DIR__ . '/../..' . '/_apps/Apps/Model.php',
        'Apps\\PHPMailer' => __DIR__ . '/../..' . '/_apps/Apps/PHPMailer.php',
        'Apps\\Route' => __DIR__ . '/../..' . '/_apps/Apps/Route.php',
        'Apps\\SMTP' => __DIR__ . '/../..' . '/_apps/Apps/SMTP.php',
        'Apps\\Session' => __DIR__ . '/../..' . '/_apps/Apps/Session.php',
        'Apps\\Template' => __DIR__ . '/../..' . '/_apps/Apps/Template.php',
        'Apps\\phpmailerException' => __DIR__ . '/../..' . '/_apps/Apps/PHPMailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16993cbaf0dc5309f7b5a0e7f0a0b1ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16993cbaf0dc5309f7b5a0e7f0a0b1ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16993cbaf0dc5309f7b5a0e7f0a0b1ad::$classMap;

        }, null, ClassLoader::class);
    }
}
