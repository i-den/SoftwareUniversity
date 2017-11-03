<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit627cd552d3d17fe42886c23c7da7a5c0
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Van\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Van\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Van',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Core',
        ),
    );

    public static $classMap = array (
        'Core\\Database\\EloDelete' => __DIR__ . '/../..' . '/app/Core/Database/EloDelete.php',
        'Core\\Database\\EloFind' => __DIR__ . '/../..' . '/app/Core/Database/EloFind.php',
        'Core\\Database\\EloInsert' => __DIR__ . '/../..' . '/app/Core/Database/EloInsert.php',
        'Core\\Database\\EloUpdate' => __DIR__ . '/../..' . '/app/Core/Database/EloUpdate.php',
        'Core\\Database\\Eloquent' => __DIR__ . '/../..' . '/app/Core/Database/Eloquent.php',
        'Core\\Request\\Request' => __DIR__ . '/../..' . '/app/Core/Request/Request.php',
        'Core\\Router\\Router' => __DIR__ . '/../..' . '/app/Core/Router/Router.php',
        'Van\\Controllers\\CatController' => __DIR__ . '/../..' . '/app/Van/Controllers/CatController.php',
        'Van\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Van/Controllers/Controller.php',
        'Van\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Van/Controllers/HomeController.php',
        'Van\\Entity\\Cat' => __DIR__ . '/../..' . '/app/Van/Entity/Cat.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit627cd552d3d17fe42886c23c7da7a5c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit627cd552d3d17fe42886c23c7da7a5c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit627cd552d3d17fe42886c23c7da7a5c0::$classMap;

        }, null, ClassLoader::class);
    }
}
