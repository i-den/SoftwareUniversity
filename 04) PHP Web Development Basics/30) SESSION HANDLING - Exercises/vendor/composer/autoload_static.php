<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita02d3a34b11c991c3cc57714084e0adb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Service\\' => 8,
        ),
        'R' => 
        array (
            'Repository\\' => 11,
        ),
        'H' => 
        array (
            'Http\\' => 5,
        ),
        'D' => 
        array (
            'Database\\' => 9,
            'Data\\' => 5,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Service',
        ),
        'Repository\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Repository',
        ),
        'Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Http',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Database',
        ),
        'Data\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Data',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Core',
        ),
    );

    public static $classMap = array (
        'Core\\DataBinder' => __DIR__ . '/../..' . '/App/Core/DataBinder.php',
        'Core\\DataBinderInterface' => __DIR__ . '/../..' . '/App/Core/DataBinderInterface.php',
        'Core\\Template' => __DIR__ . '/../..' . '/App/Core/Template.php',
        'Core\\TemplateInterface' => __DIR__ . '/../..' . '/App/Core/TemplateInterface.php',
        'Data\\UserDTO' => __DIR__ . '/../..' . '/App/Data/UserDTO.php',
        'Database\\Database' => __DIR__ . '/../..' . '/App/Database/Database.php',
        'Database\\DatabaseInterface' => __DIR__ . '/../..' . '/App/Database/DatabaseInterface.php',
        'Database\\PreparedStatement' => __DIR__ . '/../..' . '/App/Database/PreparedStatement.php',
        'Database\\PreparedStatementInterface' => __DIR__ . '/../..' . '/App/Database/PreparedStatementInterface.php',
        'Database\\ResultSet' => __DIR__ . '/../..' . '/App/Database/ResultSet.php',
        'Database\\ResultSetInterface' => __DIR__ . '/../..' . '/App/Database/ResultSetInterface.php',
        'Http\\HttpHandler' => __DIR__ . '/../..' . '/App/Http/HttpHandler.php',
        'Http\\UserHttpHandler' => __DIR__ . '/../..' . '/App/Http/UserHttpHandler.php',
        'Repository\\UserRepository' => __DIR__ . '/../..' . '/App/Repository/UserRepository.php',
        'Repository\\UserRepositoryInterface' => __DIR__ . '/../..' . '/App/Repository/UserRepositoryInterface.php',
        'Service\\UserService' => __DIR__ . '/../..' . '/App/Service/UserService.php',
        'Service\\UserServiceInterface' => __DIR__ . '/../..' . '/App/Service/UserServiceInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita02d3a34b11c991c3cc57714084e0adb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita02d3a34b11c991c3cc57714084e0adb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita02d3a34b11c991c3cc57714084e0adb::$classMap;

        }, null, ClassLoader::class);
    }
}